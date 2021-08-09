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



  public function buyCredits()
  {
    $data = [
      'title' => 'My Cart'
    ];

    $this->view('User/buycredits', $data);
  }

  public function checkout()
  {
    $data = [
      'title' => 'Checkout'
    ];

    $this->view('Landing/checkout', $data);
  }
}
