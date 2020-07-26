<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee_Transactions extends CI_Model {


  






	public function Update_DB()
	{
        
        $AreaPosted = $this->input->post('Area',TRUE);
        


$this->db->select_max('autoID', 'max');
$query = $this->db->get('emlpoyee');
if ($query->num_rows() == 0) {
   return 1;
}
$maxid = $query->row()->max;
$maxid == 0 ? 1 : $maxid + 1;

$maxid = $maxid + 1  ;


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
    $maxid =   "0" . $maxid ;
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
        'UserID' => $this->session->userdata('User_ID'),
        'Employee_Code' =>  $this->input->post('Manpower_Company',TRUE) . $this->input->post('Department',TRUE) . $this->input->post('Designation',TRUE) . $maxid ,
        'IP_Address' => $this->input->ip_address()
        
        
     );
    
     return $this->db->insert('emlpoyee',$data);
     

    }



    






}
