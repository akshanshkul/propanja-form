<?php

namespace App\adminmanagement;

use App\classes\Session;
use App\classes\Database as ClassesDatabase;

class GetAdminData
{
    private $db;

    public function __construct()
    {
        $this->db = ClassesDatabase::db();
    }


    public function getAdminById($adminId)
    {
        $query = "SELECT * FROM admin_details WHERE id = ?";
        $stmt = $this->db->prepare($query);

        if ($stmt) {
            $stmt->bind_param("i", $adminId); // Assuming 'id' is an integer
            $stmt->execute();
            $result = $stmt->get_result();
            $stmt->close();

            if ($result) {
                return $result;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}