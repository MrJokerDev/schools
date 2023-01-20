<?php

 /**
  * Student controller
  */

 class Students extends Controller
 {
    function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }else{
            $crumbs[] = ['Dashboar', '/home'];
            $crumbs[] = ['Students', '/students'];

            $this->view('students/students', [
                'crumbs' => $crumbs
            ]);
        } 
    }
 }

 