<?php
//Example Model for User

    class Accounts{

        private $db;


        public function __construct(){
            $this->db = new Database;

        }

        public function checkUsername($username){
            
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);
            $row=$this->db->single();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }
        }



?>