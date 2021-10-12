<?php

class Admin
{


    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function validateLogin($data)
    {

        $this->db->query('SELECT * FROM admin where username = :username and password = :password');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $row = $this->db->single();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function getGymInformation()
    {
        $this->db->query('SELECT * FROM `gym_information`');

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function getGymNumber()
    {
        $this->db->query('SELECT Count(*) as gym_count FROM `gym_information`');

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function getMemberInformation()
    {
        $this->db->query('SELECT * FROM `users`');

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function getMemberNumber()
    {
        $this->db->query('SELECT Count(*) as mem_count  FROM `users`');

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function earnings()
    {
        $this->db->query('SELECT Date, SUM(Credits) AS "Credits"
        FROM admin_earnings group by date(Date) ');
        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }

    public function addCredit($data)
    {
        $this->db->query('INSERT INTO `admin_earnings`(`Date`, `Credits`) VALUES (CURRENT_TIMESTAMP, :credits)');
        //$this->db->bind(':date', $data['date']);
        $this->db->bind(':credits', $data['admin_credit']);


        //Execute
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
