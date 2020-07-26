<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class db_selections extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    public function Load_Areas()
	{
        
        
        $query= $this->db->get('areas');
        if($query->num_rows()> 0){
            return $query->result();

        }
        /*
        $query = $this->db->query("SELECT `autoID`,`Territory_Name` FROM areas WHERE Status='1';");

      $query = $this->db->get('areas');
      return $result = $query->result();
      */
/*
      $Area_ID = array('autoID');
      $Area_Name = array('Territory_Name');
      
      for ($i = 0; $i < count($result); $i++)
      {
          array_push($Area_ID, $result[$i]->autoID);
          array_push($Area_Name, $result[$i]->Territory_Name);
      }
      print_r($Area_Name);
      return array_combine($Area_ID, $Area_Name);
      */
    }

    
    public function Load_Manpower_Companies()
	{
        
        
        $query= $this->db->get('manpower_companies');
        if($query->num_rows()> 0){
            return $query->result();

        }
        /*
        $query = $this->db->query("SELECT `autoID`,`Territory_Name` FROM areas WHERE Status='1';");

      $query = $this->db->get('areas');
      return $result = $query->result();
      */
/*
      $Area_ID = array('autoID');
      $Area_Name = array('Territory_Name');
      
      for ($i = 0; $i < count($result); $i++)
      {
          array_push($Area_ID, $result[$i]->autoID);
          array_push($Area_Name, $result[$i]->Territory_Name);
      }
      print_r($Area_Name);
      return array_combine($Area_ID, $Area_Name);
      */
    }




}
