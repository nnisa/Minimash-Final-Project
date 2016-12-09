<?php
class NewFoodForm extends DbConn
{
    public function createFood($uid, $memberEmail, $item, $quantity, $address)
    {
        try {

            $db = new DbConn;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO food (id, memberEmail, item, quantity, address)
            VALUES (:id, :memberEmail, :item, :quantity, :address)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':memberEmail', $memberEmail);
            $stmt->bindParam(':item', $item);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':address', $address);
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
