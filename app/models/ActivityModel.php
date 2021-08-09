<?php


class ActivityModel
{


  private $db;

  public function __construct()
  {

    $this->db = new Database;
  }

  public function filterByCategory($param)
  {

    $this->db->query('SELECT * FROM gym_activity WHERE category = :category and status = :status');
    $this->db->bind(':category', $param);
    $this->db->bind(':status', 1);
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
    }
  }
  public function filterByCredit($param)
  {

    if ($param == 'high') {
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY credit DESC');
      $this->db->bind(':status', 1);
      $row = $this->db->resultSet();

      if ($this->db->rowCount() > 0) {

        return $row;
      }
    }

    if ($param == 'low') {
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY credit ASC');
      $this->db->bind(':status', 1);
      $row = $this->db->resultSet();

      if ($this->db->rowCount() > 0) {

        return $row;
      }
    }
  }

  public function filterByFrequency($param)
  {

    if ($param == 'high') {
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY sessions_per_week DESC');
      $this->db->bind(':status', 1);
      $row = $this->db->resultSet();

      if ($this->db->rowCount() > 0) {

        return $row;
      }
    }

    if ($param == 'low') {
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY sessions_per_week ASC');
      $this->db->bind(':status', 1);
      $row = $this->db->resultSet();

      if ($this->db->rowCount() > 0) {

        return $row;
      }
    }
  }

  public function fetchActiveActivity()
  {
    $this->db->query('SELECT * FROM gym_activity WHERE status = :status');
    $this->db->bind(':status', 1);
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
    }
  }

  public function searchByName($param)
  {
    $this->db->query('SELECT * FROM gym_activity WHERE activity_name LIKE :query OR category LIKE :query');
    $this->db->bind(':query', $param."%");
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
    }
  }

  public function nearestOffer($data){
    
    $this->db->query('SELECT * , (3956 * 2 * ASIN(SQRT( POWER(SIN(( :latitude - `gym_information`.`latitude`) *  pi()/180 / 2), 2) +COS( :latitude2 * pi()/180) * COS(`gym_information`.`latitude` * pi()/180) * POWER(SIN(( :longitude - `gym_information`.`longitude`) * pi()/180 / 2), 2) ))) as distance  
    from gym_activity JOIN gym_information ON gym_information.gym_id = gym_activity.gym_id  
    having  distance <= :distance 
    order by distance');
    $this->db->bind(':latitude', $data['latitude']);
    $this->db->bind(':latitude2', $data['latitude']);

    $this->db->bind(':longitude', $data['longitude']);
    $this->db->bind(':distance', $data['distance']);
    $row = $this->db->resultSet();
   
    if ($this->db->rowCount() > 0) {

      return $row;
    }
  }

  public function fetchActivitybyid($id){
    $this->db->query('SELECT * FROM gym_activity WHERE id = :id');
    $this->db->bind(':id', $id);
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
    }

  }

  public function fetchgymInfoByid($gymid){
    $this->db->query('SELECT * FROM gym_information WHERE gym_id = :id');
    $this->db->bind(':id', $gymid);
    $row = $this->db->resultSet();

    if ($this->db->rowCount() > 0) {

      return $row;
    }

  }

  
  public function addToCart($data)
  {

    $this->db->query('INSERT INTO `cart`(`user_id`, `activity_id`) VALUES (:user_id, :activity_id)');
    $this->db->bind(':user_id', $data['user_id']);
    $this->db->bind(':activity_id', $data['activity_id']);


    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }




}
