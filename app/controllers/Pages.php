<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->usermodel = $this->model('User');
  }

  public function index()
  {
    $users = $this->usermodel->getUsers();
    $data = [
      'title' => 'Home page',
      'users' => $users,
    ];
    $this->view('pages/index', $data);
  }

  public function about()
  {
    $this->view('pages/about');
  }
}
