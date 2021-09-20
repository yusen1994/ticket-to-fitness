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

    public function getMemberInformation()
    {
        $this->db->query('SELECT * FROM `users`');

        $row = $this->db->resultSet();

        if ($this->db->rowCount() > 0) {

            return $row;
        }
    }
}
