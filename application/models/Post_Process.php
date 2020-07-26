<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_Process extends CI_Model {





	public function Update_DB()
	{
        
        $AreaPosted = $this->input->post('Area',TRUE);
        
/*
        $query = $db->query("SELECT Territory_Name FROM areas");
        $row = $query->getRow();

            if (isset($row))
            {
            echo $row->Territory_Name;
            }

*/

    $data = array(

        'Outlet_Name' => $this->input->post('Outlet_Name',TRUE),
        'Owner_Name' => $this->input->post('Owner_Name',TRUE),
        'Owner_Contact' => $this->input->post('Owner_contact',TRUE),
        'Nearest_DB_Area_Code' => $this->input->post('Area',TRUE),
        'Nearest_DB_Area' => $AreaPosted,
        'Remarks' => $this->input->post('remarks',TRUE),
        'UserID' => $this->session->userdata('User_ID'),
        'Date_Visited' => $this->input->post('Date_Visited',TRUE),
        'IP_Address' => $this->input->ip_address()
        
        
     );
    
     return $this->db->insert('feedback_to_sales',$data);


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
