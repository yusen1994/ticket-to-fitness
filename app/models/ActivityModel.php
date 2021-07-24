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
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY price_per_week DESC');
      $this->db->bind(':status', 1);
      $row = $this->db->resultSet();

      if ($this->db->rowCount() > 0) {

        return $row;
      }
    }

    if ($param == 'low') {
      $this->db->query('SELECT * FROM gym_activity WHERE status=:status ORDER BY price_per_week ASC');
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
}
