<?php


    class GymModel{


        private $db;

        public function __construct(){

        $this->db = new Database;

        }

        public function addActivity($data){
            $this->db->query('INSERT INTO gym_activity (gym_id,activity_name,category,sessions_per_week,max_capacity,price_per_week,description) VALUES (:gym_id,:activity_name,:category, :sessions_per_week, :max_capacity,:price_per_week,:description)');
      
            // Bind Values
            $this->db->bind(':gym_id', $data['gym_id']);
            $this->db->bind(':activity_name', $data['activity_name']);
            $this->db->bind(':category', $data['category']);
            $this->db->bind(':sessions_per_week', $data['sessions_per_week']);
            $this->db->bind(':max_capacity', $data['max_capacity']);
            $this->db->bind(':price_per_week', $data['price_per_week']);
            $this->db->bind(':description', $data['description']);

                 
         
            //Execute
            if($this->db->execute()){
              return true;
            } else {
              return false;
            }

        }

        public function viewActivity($data){
            $this->db->query('SELECT * FROM gym_activity WHERE gym_id = :gym_id');
            $this->db->bind(':gym_id', $data['gym_id']);
            $row=$this->db->resultSet();
            
            if($this->db->rowCount() > 0) {
               
                return $row;
            }
        }
        
        




    }
