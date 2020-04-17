<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {


	public function RegisterUser()
	{
		
	
		$this->form_validation->set_rules('First_Name', 'First Name', 'required');
		$this->form_validation->set_rules('Last_Name', 'Last Name', 'required');
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email|is_unique[users.Email]');
		$this->form_validation->set_rules('Password', 'Password', 'required');
		$this->form_validation->set_rules('Repeat_Password', 'Repeat Password','required|matches[Password] ');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('Register');
		}
		else
		{
				$this->load->model('Model_User');
				$responce = $this->Model_User->Registration();
				if($responce == TRUE){
					$this->session->set_flashdata('msg','Registered Successfully. Please login');
					redirect('Home/Register');
					
				}
				else{
					$this->session->set_flashdata('msg','Something went wrong. Please Retry');
					redirect('Home/Register');
				}
		}


		
    }
    


}
