<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_selections extends CI_Model {

    function __construct()
    {
        parent::__construct();

        //$User = $this->session->userdata('Last_Name');
    }
    
    

    public function Load_Areas()
	{
        
       $User = $this->session->userdata('Last_Name');

            $query = $this->db->query("SELECT * FROM distributions where Code = '$User'");
            if($query->num_rows()> 0){
                return $query->result();

        }


    }

    
    public function Load_Manpower_Companies()
	{
        
        
        $query= $this->db->get('manpower_companies');
        if($query->num_rows()> 0){
            return $query->result();

        }
       
    }




}
