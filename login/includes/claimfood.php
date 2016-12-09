<?php
class ClaimFood extends DbConn
{
    public function deleteFood($id)
    {
        try {

            $db = new DbConn;
            // prepare sql and bind parameters
			$stmt = $db->conn->prepare("DELETE FROM food WHERE id=:id");
			$stmt->bindParam(':id', $id);
			$stmt->execute();

			$err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}

