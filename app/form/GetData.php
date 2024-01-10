<?php


namespace App\form;


/**
 * Summary of Database
 */
class GetData
{
    private $db;

    public function __construct()
    {
        $this->db = Database::db();
    }

    /**
     * Get response based on user_id and id
     *
     * @param int $userId
     * @param int $id
     * @return array|null
     */
    public function getPaymentData($payment_id, $ref_id)
    {
        // Assuming $this->db is your database connection
        $stmt = $this->db->prepare("SELECT * FROM payment WHERE payment_id = ? and ref_id=?");
        $stmt->bind_param("ss", $payment_id, $ref_id);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->get_result();

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Fetch data and return it
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return null; // No data found
        }
    }
    public function getResponse($userId)
    {
        // Assuming $this->db is your database connection
        $stmt = $this->db->prepare("SELECT * FROM payment WHERE user_id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();

        // Fetch the result
        $result = $stmt->get_result();

        // Check if there are any rows returned
        if ($result->num_rows > 0) {
            // Fetch data and return it
            $data = $result->fetch_assoc();
            return $data;
        } else {
            return null; // No data found
        }
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
