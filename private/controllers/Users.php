<?php
    
 /**
  * Users controller
  */
 

 class Users extends Controller
 {
    function index($id = '')
    {
        if(!Auth::logged_in())
        {
            $this->redirect('login');
        }else{
            $user = new User();
            $school_id = Auth::getSchool_id();
            $users = $user->run("select * from users where school_id = :school_id", ['school_id' => $school_id]);
            $row = $user->first('user_id', $id);
        }

        // print_r($users);
        
        $this->view('users/users',[
            'users' => $users,
            'row' => $row
        ]);
    }
 }

 