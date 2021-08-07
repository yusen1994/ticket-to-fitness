<?php


class userModel
{


  private $db;

  public function __construct()
  {

    $this->db = new Database;
  }



public function viewtimeTable($data){

    $this->db->query('SELECT gym_activity_timetable.day, gym_activity_timetable.time, users_activity.activity_id, gym_activity.activity_name, gym_activity.category,gym_activity.sessions_per_week, gym_activity.max_capacity, gym_activity.credit, gym_activity.description, gym_information.gym_address
    FROM users_activity
    INNER JOIN gym_activity_timetable ON users_activity.activity_id = gym_activity_timetable.activity_id 
    Inner join gym_activity ON users_activity.activity_id = gym_activity.id 
    INNER JOIN gym_information ON users_activity.gym_id = gym_information.gym_id
    where users_activity.user_id = :user_id and gym_activity_timetable.day=:day');
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':day', $data['day']);
  
  
    $row = $this->db->resultSet();
  
    if ($this->db->rowCount() > 0) {
  
      return $row;
    }

}



}

