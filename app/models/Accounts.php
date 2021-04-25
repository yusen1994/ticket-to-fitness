<?php
//Example Model for User

    class Accounts{

        private $db;


        public function __construct(){
            $this->db = new Database;

        }

        /*
            Function to check if the username provided by the user exists in the database
            @Param1, username supplied by the user.
        */
        public function checkUsername($username){
            
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);
            $row=$this->db->single();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }
        }
        /*
            Function to check if the email supplied by the user already exists in the database
            @Param1, email supplied by the user
        */
        public function checkEmailExists($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);
            $row=$this->db->single();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }
        }
         /*
            Function to check if the Username supplied by the user already exists in the database
            @Param1, username supplied by the user
        */
        public function checkUsernameExists($username){
            $this->db->query('SELECT * FROM users WHERE username = :username');
            $this->db->bind(':username', $username);
            $row=$this->db->single();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }

        }

        /*
            Function to register user account
            @Param1, data associative array of user information
        */
        public function registerAccount($data){
            this->db->query('INSERT INTO users (username,firstname,lastname,email,password) VALUES (:username,:firstname,:lastname, :email, :password)');
      
            // Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':firstname', $data['firstname']);
            $this->db->bind(':lastname', $data['lastname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            
         
            //Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }


        }



?>