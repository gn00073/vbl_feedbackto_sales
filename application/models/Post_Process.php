<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Process extends CI_Model {


	public function Update_DB()
	{
        
		
    $data = array(

        'Outlet_Name' => $this->input->post('Outlet_Name',TRUE),
        'Owner_Name' => $this->input->post('Owner_Name',TRUE),
        'Owner_Contact' => $this->input->post('Owner_contact',TRUE),
         //'Nearest_DB_Area' => $this->input->post('Email',TRUE),
        'Remarks' => $this->input->post('remarks',TRUE)
        //'UserID' => $this->input->post('Email',TRUE),
        
        
     );
    
     return $this->db->insert('feedback_to_sales',$data);

//$msgdatabase = "msgdatabase";
//return  $msgdatabase ;
    }


    public function Registration()
	{
		
    $data = array(

        'First_Name' => $this->input->post('First_Name',TRUE),
        'Last_Name' => $this->input->post('Last_Name',TRUE),
        'Email' => $this->input->post('Email',TRUE),
        'Password' => sha1($this->input->post('Password',TRUE))
     );
        
     return $this->db->insert('users',$data);

    }
    






}
