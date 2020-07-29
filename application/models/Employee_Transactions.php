<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Transactions extends CI_Model {


  






	public function Update_DB()
	{
               

        $Manpower_Company = $this->input->post('Manpower_Company',TRUE);
        $Location = $this->input->post('Location',TRUE);
        $Department = $this->input->post('Department',TRUE);
        $Designation = $this->input->post('Designation',TRUE);

       
/*
       
        $query = $this->db->query("SELECT MAX(Employee_Code) FROM emlpoyee where Manpower_Company = '$Manpower_Company' AND Department= '$Department' AND Designation='$Designation'");

        $row = $query->getRow();
        
          if ($query->num_rows() == 0) {
           return 1;
        
        }
        
        
        
        $maxid = $query->row()->max;
        $maxid == 0 ? 1 : $maxid + 1;





        $query = $this->db->query("SELECT MAX(Employee_Code) FROM emlpoyee where Manpower_Company = '$Manpower_Company' AND Department= '$Department' AND Designation='$Designation'");
        if($query->num_rows()> 0){
          $maxid= $query->row();
        
          $maxid= substr($maxid,5);
        //  $maxid= number_format($maxid);
          $maxid= (int)$maxid;

          $maxid = $maxid + 1  ;

        }

*/


$this->db->select_max('autoID', 'max');
$query = $this->db->get('emlpoyee');
if ($query->num_rows() == 0) {
   return 1;

}


$maxid = $query->row()->max;
$maxid == 0 ? 1 : $maxid + 1;

$maxid + 1;



$maxid_lenth = strlen((string)$maxid);

switch ($maxid_lenth) {
    case 1:
        $maxid = "000" . $maxid ;
      break;
    case 2:
        $maxid = "00" . $maxid ;
      break;
    case 3:
        $maxid = "0" . $maxid ;
      break;
    default:
    $maxid =   "0000" . $maxid ;
  }



    $data = array(

        'Employee_Name' => $this->input->post('Employee_Name',TRUE),
        'NIC' => $this->input->post('NIC',TRUE),
        'Date_Appointed' => $this->input->post('Date_Appointed',TRUE),
        'Manpower_Company' => $this->input->post('Manpower_Company',TRUE),
        'Location' => $this->input->post('Location',TRUE),
        'Department' => $this->input->post('Department',TRUE),
        'Designation' => $this->input->post('Designation',TRUE),
        'Remarks' => $this->input->post('remarks',TRUE),
        'OLD_EMP_CODE' => $this->input->post('OLD_EMP_CODE',TRUE),
        'UserID' => $this->session->userdata('User_ID'),
        'Employee_Code' => $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) . $maxid ,
        'IP_Address' => $this->input->ip_address()
        
        // $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) .
     );
     //$EMP_No =  $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) . $maxid ;
    return $this->db->insert('emlpoyee',$data);
     //$EMP_No  = $this->db->insert_id();

    }



    






}
