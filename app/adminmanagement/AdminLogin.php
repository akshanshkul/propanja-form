<?php
namespace App\adminmanagement;

use App\classes\Helper;
use App\classes\Database as ClassesDatabase;
use App\classes\Session;

class AdminLogin
{
    private $db;

    public function __construct()
    {
        Session::init();
        $this->db = ClassesDatabase::db();
    }

    public function adminLogin($data)
    {
        $email = $data['email'];
        $password = $data['password'];
        $email = stripslashes($email);
        $password = stripslashes($password);

        // Use prepared statement to prevent SQL injection
        $sql = "SELECT admin_details.id, admin_details.role, admin_passwords.admin_id, admin_passwords.admin_password
            FROM admin_details
            INNER JOIN admin_passwords ON admin_details.id = admin_passwords.admin_id 
            WHERE email=?";

        $stmt = mysqli_prepare($this->db, $sql);
        mysqli_stmt_bind_param($stmt, 's', $email);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if ($result) {
            $row = mysqli_num_rows($result);
            $user_data = mysqli_fetch_assoc($result);

            if ($row == 1 && password_verify($password, $user_data['admin_password'])) {
                $adminId = $user_data['id'];
                $adminRole = $user_data['role'];

                // Update last login timestamp
                $helper = new Helper();
                $helper->updateLastLogin($adminId);
                Session::set('adminLoginSuccess', true);
                Session::set('adminId', $adminId);

                Session::set('adminRole', $adminRole);

                // $_SESSION['admin-login-success'] = true;
                // $_SESSION['admin-id'] = $adminId;
                // $_SESSION['admin-role'] = $adminRole;
                $error_text = 'Successful Login';
                return $error_text;
            } else {
                $error_text = 'Bhaiya Pahle sahi id or password dalo :)';
                return $error_text;
            }
        } else {
            echo 'SQL problem : )';
        }
    }
}
