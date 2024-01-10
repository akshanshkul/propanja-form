<?php


namespace App\form;

use PHPMailer\PHPMailer\PHPMailer;
use Exception;

class SendMail
{
    public function sendPaymentSuccessMail($name, $to, $amount, $ref_id, $payment_id)
    {
        $mail = new PHPMailer(true);
        // $templateFile = $_SERVER['DOCUMENT_ROOT'] . '/pafi-form/assets/template/payment.html';
        $templateFile = $_SERVER['DOCUMENT_ROOT'] . '/assets/template/payment.html';

        $temp = file_get_contents($templateFile);
        $temp = str_replace('{{user_name}}', $name, $temp);
        $temp = str_replace('{{ref_id}}', $ref_id, $temp);
        $temp = str_replace('{{payment_id}}', $payment_id, $temp);
        $htmlContent = str_replace('{{amount}}', $amount, $temp);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = 'smtp.hostinger.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = 'info@propanja.techcov.in';
            $mail->Password = '@Aksh7453969143';

            // Sender and recipient settings
            $mail->setFrom('info@propanja.techcov.in', 'Pro Panja');
            $mail->addReplyTo('info@propanja.techcov.in', 'Pro Panja');
            $mail->addAddress($to, $name);

            // Email content
            $mail->isHTML(true);
            $mail->msgHTML($htmlContent);

            $mail->Subject = "Payment Receipt";

            // Send the email
            if (!$mail->send()) {
                throw new Exception('Mailer Error: ' . $mail->ErrorInfo);
            } else {
                echo 'The email message was sent.';
                return true;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$e->getMessage()}";
            return false;

        }
    }
}





