<?php
//Example Model for User

    class Account{

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
            Function to check if the username provided by the user exists in the database
            @Param1, username supplied by the user.
        */
        public function fetchUserInformation($userid){
            
            $this->db->query('SELECT * FROM users WHERE id = :id');
            $this->db->bind(':id', $userid);
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
            $this->db->query('INSERT INTO users (username,firstname,lastname,email,password,user_activation_code,user_email_status,password_reset) VALUES (:username,:firstname,:lastname, :email, :password,:activation_code,:user_email_status,:password_reset)');
      
            // Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':firstname', $data['firstname']);
            $this->db->bind(':lastname', $data['lastname']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':activation_code', $data['user_activation_code']);
            $this->db->bind(':user_email_status', $data['user_email_status']);
            $this->db->bind(':password_reset', $data['password_reset']);

            
         
            //Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }
        }



        public function updateEmailStatus($data){
            $this->db->query('UPDATE users SET user_email_status = :user_email_status where email = :email');
            $this->db->bind(':user_email_status', $data['user_email_status']);
            $this->db->bind(':email', $data['user_email']);

            //Execute
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }

            
        }

        //Store gym information in the database using id as a primary key

        public function registerGym($data){
            $this->db->query('INSERT INTO `gym_information`(`gym_id`, `gym_name`, `gym_address`,`latitude`,`longitude`, `gym_email`, `phone_number`, `abn`) VALUES (:gym_id, :gym_name, :gym_address,:latitude,:longitude,:gym_email,:phone_number,:abn)');
            $this->db->bind(':gym_id', $data['gym_id']);
            $this->db->bind(':gym_name', $data['gym_name']);
            $this->db->bind(':gym_address', $data['gym_address']);
            $this->db->bind(':latitude', $data['latitude']);
            $this->db->bind(':longitude', $data['longitude']);
            $this->db->bind(':gym_email', $data['gym_email']);
            $this->db->bind(':phone_number', $data['phone_number']);
            $this->db->bind(':abn', $data['abn']);

            
            //Execute
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }

        }

        public function updatePasswordResetHash($data){
            $this->db->query('UPDATE users SET password_reset = :password_reset where email = :email');
            $this->db->bind(':password_reset', $data['password_reset_code']);
            $this->db->bind(':email', $data['email']);

            //Execute
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }


        }

        public function updatePassword($data){
            $this->db->query('UPDATE users SET password = :password where email = :email');
            $this->db->bind(':password', $data['password']);
            $this->db->bind(':email', $data['email']);

            //Execute
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }

            
        }

        public function updatePartnershipStatus($data){
            $this->db->query('UPDATE users SET partnership_status = :partnership_status where email = :email');
            $this->db->bind(':partnership_status', $data['partnership_status']);
            $this->db->bind(':email', $data['email']);
              
            //Execute
            if($this->db->execute()){
                return true;
              } else {
                return false;
              }
        }

        public function fetchGymInformation($gym_id){

            $this->db->query('SELECT * FROM gym_information WHERE gym_id = :gym_id');
            $this->db->bind(':gym_id', $gym_id);
            $row=$this->db->single();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }
        }

    }
?>