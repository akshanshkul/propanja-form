<?php
session_start();
require_once 'vendor/autoload.php';
use App\form\Database;
use App\form\GetData;
use App\form\SendMail;

$sendMailOBj = new SendMail;
// Assuming you have a Database class with a db method for database connection
$db = Database::db();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys exist before accessing them
    if (isset($_POST['payment_id'])) {

        $payment_id = $_POST['payment_id'];
        $refId = $_SESSION['ref_id'];
        // Update payment_id and payment_status based on your condition
        $update_stmt = $db->prepare("UPDATE payment SET payment_status='complete', payment_id=? WHERE user_id=? And ref_id=?");
        $update_stmt->bind_param("sis", $payment_id, $_SESSION['user_id'], $refId);
        $update_stmt->execute();
        $update_stmt->close();
        $getData = new GetData();
        $paymentData = $getData->getPaymentData($payment_id, $refId);
        if ($paymentData !== null) {
            // Data found, send payment success email
            $name = isset($paymentData['name']) ? $paymentData['name'] : 'N/A';
            $email = isset($paymentData['email']) ? $paymentData['email'] : 'N/A';
            $amount = isset($paymentData['amount']) ? $paymentData['amount'] : 'N/A';
            $refId = isset($paymentData['ref_id']) ? $paymentData['ref_id'] : 'N/A';
            $paymentId = isset($paymentData['payment_id']) ? $paymentData['payment_id'] : 'N/A';

            $sendMailOBj->sendPaymentSuccessMail($name, $email, $amount, $refId, $paymentId);
        } else {
            // No data found
            echo "No data found for payment_id: $payment_id and ref_id: $ref_id";
        }

    }
}
?>