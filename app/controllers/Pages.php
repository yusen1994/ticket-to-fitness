<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->gymModel = $this->model('GymModel'); // Model for gym related work
  }

  public function index()
  {

    $data = [
      'title' => 'Ticket To Fitness',
      'Description' => 'This is a fitness webapp',
      'gym_activity' => '',
    ];

    $activity = $this->gymModel->fetchActiveActivity();
    if ($activity != NULL) {
      $data['gym_activity'] = $activity;
    }


    $this->view('Landing/homepage', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }

  public function gymManageActivities()
  {
    $data = [
      'title' => 'Manage Activities'
    ];

    $this->view('gym/manageactivities', $data);
  }

  public function gymAddActivity()
  {
    $data = [
      'title' => 'Add an Activity'
    ];

    $this->view('gym/activies', $data);
  }
}
