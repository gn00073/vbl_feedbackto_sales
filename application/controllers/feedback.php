<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends CI_Controller {


    function __construct()
    {
        parent::__construct();
        $this->load->model('db_selections');
    }








	public function Feedback_Form()
	{
		
	
		$this->form_validation->set_rules('Outlet_Name', 'Outlet Name', 'required');
		$this->form_validation->set_rules('Owner_Name', 'Owner Name', 'required');
		$this->form_validation->set_rules('Owner_contact', 'Owner contact', 'required');
		$this->form_validation->set_rules('remarks', 'Remarks', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('Users/Add_Post');
		}
		else
		{
				$this->load->model('Post_Process');
				$responce = $this->Post_Process->Update_DB();
				if($responce == TRUE){
					$this->session->set_flashdata('msg','Feedback Updated Successfully.');
					redirect('Users/Inform_Sales');
					
				}
				else{
					$this->session->set_flashdata('msg','Something went wrong. Please Retry');
					redirect('Users/Inform_Sales');
				}
		}


		
    }
    


}
