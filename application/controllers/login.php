<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function LoginUser()
	{
		$this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('Password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE)
		{
				$this->load->view('Login');
		}
		else
		{
			$this->load->model('Model_User');
			$result =$this->Model_User->LoginUser();	

			if($result != false){
				$User_Data = array(
					'User_ID'=>$result->autoID,
					'First_Name'=>$result->First_Name,
					'Last_Name'=>$result->Last_Name,
					'Email'=>$result->Email,
					'EMP_No'=>$result->EMP_No,
					'Division'=>$result->Division,
					'Designation'=>$result->Designation,
					'Logged_In'=>TRUE
				);
				$this->session->set_userdata($User_Data);
				$this->session->set_flashdata('Welcome_msg','Welcome Back' );
				redirect('Users/Index');


			}
			else{
				$this->session->set_flashdata('error_msg','Email or Password is Wrong. Please Retry');
				redirect('Home/Login');

			}

		}


    }
    

	public function LogoutUser()
	{
	$this->session->unset_userdata('User_ID');
	$this->session->unset_userdata('First_Name');
	$this->session->unset_userdata('Last_Name');
	$this->session->unset_userdata('Email');
	$this->session->unset_userdata('EMP_No');
	$this->session->unset_userdata('Division');	
	$this->session->unset_userdata('Designation');
	$this->session->unset_userdata('Logged_In');	
	redirect('Home/Login');

    }



}
