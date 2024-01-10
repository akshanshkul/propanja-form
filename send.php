<?php
include 'vendor/autoload.php';
use App\form\SendMail;
use App\form\GetData;

$sendMailOBj = new SendMail;
$name = "Akshansh";
$to = "Akshanshkul7830@gmail.com";
$amount = 100;
$ref_id = "RXGXBUIQDB";
$payment_id = "pay_NKuqpjQhV9zmok";


// $getData = new GetData();
// $paymentData = $getData->getPaymentData($payment_id, $ref_id);
// echo $paymentData['name'];
// if ($paymentData !== null) {
//     // Data found, send payment success email
//     $name = isset($paymentData['name']) ? $paymentData['name'] : 'N/A';
//     $email = isset($paymentData['email']) ? $paymentData['email'] : 'N/A';
//     $amount = isset($paymentData['amount']) ? $paymentData['amount'] : 'N/A';
//     $refId = isset($paymentData['ref_id']) ? $paymentData['ref_id'] : 'N/A';
//     $paymentId = isset($paymentData['payment_id']) ? $paymentData['payment_id'] : 'N/A';

    $sendMailOBj->sendPaymentSuccessMail($name, $to, $amount, $ref_id, $payment_id);
// } else {
//     // No data found
//     echo "No data found for payment_id: $payment_id and ref_id: $ref_id";
// }
// $sendMailOBj->sendPaymentSuccessMail($name, $to, $amount, $ref_id, $payment_id);


?>