<?php


namespace App\form;

use App\form\Database;

class GetFormData
{
    private $db;

    public function __construct()
    {
        $this->db = Database::db();
    }

    public function getAllFormData()
    {
        $sql = "SELECT * FROM `payment`";
        $stmt = $this->db->prepare($sql);
        if ($stmt) {
            $stmt->execute();
            return $stmt->get_result();
        } else {
            throw new \Exception("Error in prepared statement: " . $this->db->error);
        }
    }

}
