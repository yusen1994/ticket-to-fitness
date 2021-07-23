<?php


class ActivityModel
{


  private $db;

  public function __construct()
  {

    $this->db = new Database;
  }

  public function filterByCategory($param){

    $this->db->query('SELECT * FROM gym_activity WHERE category = :category');
    $this->db->bind(':category', $param);
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
   }
  }
  public function filterByCredit($param){

    if($param == 'high'){
      $this->db->query('SELECT * FROM gym_activity ORDER BY price_per_week DESC');
      $row = $this->db->resultSet();
  
      if ($this->db->rowCount() > 0) {
  
        return $row;
     }

    }

    if($param == 'low'){
      $this->db->query('SELECT * FROM gym_activity ORDER BY price_per_week ASC');
      $row = $this->db->resultSet();
  
      if ($this->db->rowCount() > 0) {
  
        return $row;
     }

    }

  }

  public function filterByFrequency($param){

    if($param == 'high'){
      $this->db->query('SELECT * FROM gym_activity ORDER BY sessions_per_week DESC');
      $row = $this->db->resultSet();
  
      if ($this->db->rowCount() > 0) {
  
        return $row;
     }

    }

    if($param == 'low'){
      $this->db->query('SELECT * FROM gym_activity ORDER BY sessions_per_week ASC');
      $row = $this->db->resultSet();
  
      if ($this->db->rowCount() > 0) {
  
        return $row;
     }

    }

  }

}


  


