<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('db_selections');
    }








	public function Register_Form()
	{
		
	
		$this->form_validation->set_rules('Employee_Name', 'Employee Name', 'required');
		$this->form_validation->set_rules('NIC', 'NIC', 'required');
		$this->form_validation->set_rules('Date_Appointed', 'Date_Appointed', 'required');
		

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('Users/Register_Employee');
		}
		else
		{
				$this->load->model('Employee_Transactions');
				$responce = $this->Employee_Transactions->Update_DB();
				if($responce == TRUE){
					echo $responce;
					$this->session->set_flashdata('msg','Employee Registered Successfully.');
					

					

					redirect('Users/Register_Employee');
					
				}
				else{
					$this->session->set_flashdata('msg','Something went wrong. Please Retry');
					redirect('Users/Register_Employee');
				}
		}


		
    }
    


}
