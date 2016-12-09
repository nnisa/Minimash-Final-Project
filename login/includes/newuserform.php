<?php
class NewUserForm extends DbConn
{
    public function createUser($name, $uid, $email, $pw, $location)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO ".$tbl_members." (id, name, password, email, location)
            VALUES (:id, :name, :password, :email, :location)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':location', $location);
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
