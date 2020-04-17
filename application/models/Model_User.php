<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_User extends CI_Model {


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
    

    public function LoginUser()
	{
		

        $Email_Address = $this->input->post('Email');
        $Pass = sha1($this->input->post('Password'));

        $this->db-> Where('Email', $Email_Address);
        $this->db-> Where('Password', $Pass);
       $respond =  $this->db->get('users');

       echo $respond->num_rows();

       if ($respond->num_rows()==1){
            return ($respond->row(0));
           
       }
       else{
           echo "Something went wrong - DB Query Error";
           return false;
          
           
       }
       
    }


}
