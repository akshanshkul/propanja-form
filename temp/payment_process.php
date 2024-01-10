<?php
session_start();
require_once 'vendor/autoload.php';
use App\form\Database;
use App\form\Helper;

// Assuming you have a Database class with a db method for database connection
$db = Database::db();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys exist before accessing them
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['amt'])) {
        $user_id = rand(100001, 999999);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $amt = $_POST['amt'];
        $weight = $_POST['weight'];
        $payment_status = "pending";
        date_default_timezone_set('Asia/Calcutta');
        $added_on = date('Y-m-d h:i:s');
        $refId = Helper::generateReferenceID(10);
        $stmt = $db->prepare("INSERT INTO payment (user_id, name, email, phone, weight, amount, ref_id,payment_status, added_on) VALUES (?, ?, ?, ?, ?, ?, ?,?, ?)");
        $stmt->bind_param("ssssissss", $user_id, $name, $email, $phone, $weight, $amt, $refId, $payment_status, $added_on);

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['ref_id'] = $refId;

            $response = array('status' => 'success', 'message' => 'Insertion successful. User ID: ' . $user_id);
        } else {
            $response = array('status' => 'error', 'message' => 'Insertion failed. Please try again.');
        }
        $stmt->close();

        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => 'One or more required fields are missing.');
        echo json_encode($response);
    }
}
?>