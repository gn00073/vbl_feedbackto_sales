<?php

class Users extends CI_Controller{

public function index(){
$this->load->view('Users/dashboard');

}

public function Inform_Sales(){
    $this->load->view('Users/Add_Post');
    
    }



}







