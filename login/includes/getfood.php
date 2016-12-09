<?php
class GetFood extends DbConn
{
    public function retrieve()
    {
        $conf = new GlobalConf;
        $ip_address = $conf->ip_address;

        try {

            $db = new DbConn;
            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        $stmt = $db->conn->prepare("SELECT * FROM food");
        $stmt->execute();
		$foods = $stmt->fetchAll(PDO::FETCH_ASSOC);
		
		$result='';

        foreach($foods as $food) {
			$result.='
			<tr>
				<td>'.$food['item'].'</td>
				<td>'.$food['quantity'].'</td> 
				<td>'.$food['address'].'</td>
				<td><a href="claimfood.php?id='.$food['id'].'" class="btn btn-default btn-block">Claim</a></td>
			</tr>';
		}

        return $result;
    }

}
