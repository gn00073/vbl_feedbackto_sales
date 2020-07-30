<?php

class Users extends CI_Controller{

public function index(){
$this->load->view('Users/dashboard');

}

public function Inform_Sales(){
    $this->load->model('db_selections');  // Load_Areas
    $getAreas = $this->db_selections->Load_Areas();
  
    $this->load->view('Users/Add_Post',['getAreas'=>$getAreas]);
    
    }
    public function Register_Employee(){
        $this->load->model('db_selections');  // Load_Areas
        $getAreas = $this->db_selections->Load_Areas();
      
        $this->load->view('Users/register_employee',['getAreas'=>$getAreas]);
        
        }
        public function Excel(){
                      
            $this->load->view('Users/excel');
            
            }

}







