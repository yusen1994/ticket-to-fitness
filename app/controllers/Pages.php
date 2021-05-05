<?php
class Pages extends Controller
{
  public function __construct()
  {
 
  }

  public function index()
  {
    $data = [
      'title' => 'Ticket To Fitness',
      'Description' => 'This is a fitness webapp'
    ];

    $this->view('Landing/Homepage', $data);
  }

  public function about()
  {
    $data = [
      'title' => 'About Us'
    ];

    $this->view('pages/about', $data);
  }
}
