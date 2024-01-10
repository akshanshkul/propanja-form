<?php


namespace App\form;

use App\form\Database;
use App\classes\Helper;

use Exception;

class AddRegistration
{
    private $db;
    public function __construct()
    {
        $this->db = Database::db();
    }
    public function addPaymentDetails($data)
    {
        $user_id = rand(10001, 99999);
        $name = $data['name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $sex = $data['sex'];
        $dob = $data['dob'];
        $amt = $data['amt'];
        $payment_status = "pending";

        date_default_timezone_set('Asia/Calcutta');
        $added_on = date('Y-m-d h:i:s');

        $stmt = $this->db->prepare("INSERT INTO payment (user_id, name, email, phone, sex, age_category, amount, payment_status, added_on) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssdss", $user_id, $name, $email, $phone, $sex, $dob, $amt, $payment_status, $added_on);

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['user_id'] = $user_id;
            $return = "Insertion successful. User ID: $user_id";
        } else {
            $return = "Insertion failed. Please try again.";
        }

        // Close the statement
        $stmt->close();
        return $return;
    }

}
?>