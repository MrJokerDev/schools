<?php
    
 /**
  * Schools controller
  */
 
 class Schools extends Controller
 {
    function index()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('auth/login');
        }
        
        $school = new School(); 
        $schools = $school->findAll();

        $crumbs[] = ['Dashboar', '/home'];
        $crumbs[] = ['Preseasons', '/schools'];

        $this->view('/schools/schools', [
            'crumbs' => $crumbs,
            'schools' => $schools
        ]);
    }


    function add()
    {
        if(!Auth::logged_in())
        {
            $this->redirect('auth/login');
        }
        $errors = array();

        if(count($_POST) > 0)
        {
            $school = new School();

            if($school->validate($_POST))
            {
                $_POST['date'] = date("Y-m-d H:i:s");

                $school->insert($_POST);
                $this->redirect('schools/schools');
            }else{
                $errors = $school->errors;
            }
        }

        $crumbs[] = ['Dashboar', '/home'];
        $crumbs[] = ['Preseasons', '/schools'];
        $crumbs[] = ['Add', '/schools/add'];
        
        $this->view('/schools/schools_add', [
            'crumbs' => $crumbs,
            'errors' => $errors
            ]
        );
    }

    function edit($id = null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('auth/login');
        }
        $errors = array();
        $school = new School();

        if(count($_POST) > 0)
        {
            if($school->validate($_POST))
            {
                $_POST['date'] = date("Y-m-d H:i:s");

                $school->update($id, $_POST);
                $this->redirect('schools/schools');
            }else{
                $errors = $school->errors;
            }
        }
        $row = $school->where('id', $id);
        // if(!$row)
        // {
        //     $row = (object)[];
        //     $row->school = "";
        // }
        $crumbs[] = ['Dashboar', '/home'];
        $crumbs[] = ['Preseasons', '/schools'];
        $crumbs[] = ['Edit', '/schools/edit'];
        $this->view('schools/school_edit', [
            'errors' => $errors,
            'crumbs' => $crumbs,
            'row' => $row[0]
            ]
        );
    }

    function delete($id = null)
    {
        if(!Auth::logged_in())
        {
            $this->redirect('auth/login');
        }else{
            $school = new School();
            if(count($_POST) > 0)
            {
                $school->delete($id);
                $this->redirect('schools/schools');
            }

            $row = $school->where('id', $id);
            
            $crumbs[] = ['Dashboar', ''];
            $crumbs[] = ['Preseasons', '/schools'];
            $crumbs[] = ['Delete', '/schools/delete'];
        }
        $this->view('schools/school_delete', [
            'crumbs' => $crumbs,
            'row' => $row
            ]
        );
    }
 }

 