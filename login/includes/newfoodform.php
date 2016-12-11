<?php
class NewFoodForm extends DbConn
{
    public function createFood($uid, $memberEmail, $item, $quantity, $neighborhood, $foodtype, $address, $pickupTime)
    {
        try {

            $db = new DbConn;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO food (id, memberEmail, item, quantity, neighborhood, foodtype,address, pickupTime)
            VALUES (:id, :memberEmail, :item, :quantity, :neighborhood, :foodtype, :address, :pickupTime)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':memberEmail', $memberEmail);
            $stmt->bindParam(':item', $item);
            $stmt->bindParam(':quantity', $quantity);
            $stmt->bindParam(':neighborhood', $neighborhood);
            $stmt->bindParam(':foodtype', $foodtype);
            $stmt->bindParam(':address', $address);
            $stmt->bindParam(':pickupTime', $pickupTime);
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
