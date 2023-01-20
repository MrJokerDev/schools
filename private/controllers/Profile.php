<?php
    
 /**
  * Profile controller
  */
 

 class Profile extends Controller
 {
    function index($id = '')
    {
        if(!Auth::logged_in())
        {
            $this->redirect('auth/login');
        }else{
            $user = new User();
            $row = $user->first('user_id', $id);

            $this->view('users/profile',[
                'row' => $row,
            ]);
        }
        
    }
 }

 