<?php
class LoginForm extends DbConn
{
    public function checkLogin($myemail, $mypassword)
    {
        $conf = new GlobalConf;
        $ip_address = $conf->ip_address;

        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        $stmt = $db->conn->prepare("SELECT * FROM ".$tbl_members." WHERE email = :myemail");
        $stmt->bindParam(':myemail', $myemail);
        $stmt->execute();

        // Gets query result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

             //If max attempts not exceeded, continue
            // Checks password entered against db password hash
            if (password_verify($mypassword, $result['password'])) {

                $success = 'true';
                session_start();
				
				$_SESSION['email'] = $myemail;

            } else {
                $success = "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wrong Username or Password</div>";

            }
        return $success;
    }

}
