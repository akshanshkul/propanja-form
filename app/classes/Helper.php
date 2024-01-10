<?php


namespace App\Classes;

use App\form\Database;
use Exception;

class Helper
{
    private $db;
    public function __construct()
    {
        $this->db = Database::db();
    }
    public function numberToEncryptedText($number)
    {

        $encodedText = base64_encode($number);
        return $encodedText;
    }

    public function encryptedTextToNumber($encryptedText)
    {
        $decodedNumber = base64_decode($encryptedText);
        $decodedNumber = intval($decodedNumber);

        return $decodedNumber;
    }
    public function updateLastLogin($adminId)
    {

        try {
            date_default_timezone_set('Asia/Kolkata');
            $lastLogin = date('Y-m-d H:i:s');

            $sql = "UPDATE `admin_details` SET `last_login` = ? WHERE `id` = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->bind_param("si", $lastLogin, $adminId);

            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception("Failed to update last login timestamp.");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        } finally {
            $stmt->close();
        }
    }
    public function getLastPlayer()
    {
        // Execute a query to retrieve the last player's count
        $query = "SELECT MAX(CAST(SUBSTRING(id, -3) AS UNSIGNED)) AS max_id FROM districtplayer";
        $stmt = $this->db->prepare($query);

        // Check if the query was successful
        if ($stmt) {
            if ($stmt->execute()) {
                // Bind the result variable
                // $stmt->bind_result($last_player_count);

                // Fetch the result
                $stmt->fetch();

                // Close the statement
                $stmt->close();

                // return $last_player_count;
            } else {
                // Handle execute error
                return false;
            }
        } else {
            // Handle prepare error
            return false;
        }
    }




    // This code block work for gentrate State wish Player Code 
    public static function generateNewUserId($code, $number)
    {
        // Pad the number with leading zeros
        $number_str = str_pad($number, 3, '0', STR_PAD_LEFT);

        // Concatenate the state code, course abbreviation, and the padded number
        $user_id = $code . $number_str;

        return $user_id;
    }
    public static function generateReferenceID($length)
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
    public static function generateOtp($length)
    {
        $characters = '0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
    public static function imageChecker($ext)
    {
        if ($ext == 'jpg' || $ext == 'JPG' || $ext == 'JPEG') {
            return true;
        } else {
            return false;
        }
    }


    public static function customImageUploader($directory, $tempFilePath, $uniqueFileName)
    {
        $targetPath = $directory . '/' . $uniqueFileName;

        if (move_uploaded_file($tempFilePath, $targetPath)) {
            return $uniqueFileName;
        }

        return false;
    }



}