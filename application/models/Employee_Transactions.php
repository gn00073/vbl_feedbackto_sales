<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Transactions extends CI_Model {


  






	public function Update_DB()
	{
               

        $Manpower_Company = $this->input->post('Manpower_Company',TRUE);
        $Location = $this->input->post('Location',TRUE);
        $Department = $this->input->post('Department',TRUE);
        $Designation = $this->input->post('Designation',TRUE);

  
        //$query = $this->db->query("SELECT MAX(Employee_Code) as MaxCode FROM emlpoyee");
     //   $row = $query->row();
     //   $maxid= $row->MaxCode; 
//$maxid = 112020000;
         // $maxid= substr($maxid,5);
        //$maxid= number_format($maxid);
         // $maxid= (int)$maxid;

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


$this->db->select_max('EMP_Sequence', 'max');
$this->db->where('Manpower_Company', $Manpower_Company);
$this->db->where('Department', $Department);
$this->db->where('Designation', $Designation);
$query = $this->db->get('emlpoyee');
if ($query->num_rows() == 0) {
   return 1;

}


$maxid = $query->row()->max;
$maxid == 0 ? 1 : $maxid + 1;


$maxid = $maxid+ 1;

//(string)$maxid;

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

$EmployeeID=  $this->input->post('Manpower_Company',TRUE). $this->input->post('Department',TRUE) .  $this->input->post('Designation',TRUE). $maxid;
$EmployeeSequence=$maxid + 0;
//(int)$maxid = $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) ;

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
        'Employee_Code' => $EmployeeID,
        'EMP_Sequence' => $EmployeeSequence,
        'IP_Address' => $this->input->ip_address()
        //$this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) .
        // $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) .
     );
     //$EMP_No =  $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) . $maxid ;
    
     $this->db->insert('emlpoyee',$data);
     return $EMP_No  = $this->db->insert_id();
     

    }



    






}
