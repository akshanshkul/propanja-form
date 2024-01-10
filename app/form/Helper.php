<?php


namespace App\form;

use PHPMailer\PHPMailer\PHPMailer;
use Exception;

/**
 * Summary of Database
 */
class Helper
{
    public static function generateReferenceID($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}