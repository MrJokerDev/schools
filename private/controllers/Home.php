<?php
    
 /**
  * Home controller
  */
 
 class Home extends Controller
 {
    function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }else{
            $user = new User();
            $users = $user->findAll();
            $this->view('home', ['users' => $users]);
        }
    }
 }

 