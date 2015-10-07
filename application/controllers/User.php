<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{


	public function index()
	{
		if($this->session->userdata('is_logged_in')==1)
		{
			$this->dashboard();
		}

		else
		{
			$this->load->view('includes/header');
			$this->load->view('includes/components.html');
			$this->load->view('includes/banner');
			$this->load->view('index');
		}
	}


	public function validateLogin()
	{
		if($this->session->userdata('is_logged_in')==1)
		{
			redirect ('', 'refresh');
		}

		else
		{
			$data = array();
			$this->load->model('Users_model');
			$p = new Users_model();
			$p->user_id = $this->input->post('user_id');
			$p->password = $this->input->post('password');
			$result = $p->checkUser();

				if($result==0)
				{
					redirect('', 'refresh');
					echo mysqli_error($result);
				}

				else
				{
					$this->setSession();
				}
		}
	}

	public function setSession()
	{
		$this->load->model('Users_model');
		$p = new Users_model();
		$p->user_id = $this->input->post('user_id');
		$data = array();
		$data = $p->getUserInformation();

		$sess_array = array(
		'user_id' => $data['user_id'],
		'role_id' => $data['role_id'],
		'is_logged_in' => 1
		);

		$this->session->set_userdata($sess_array);

		redirect ('', 'refresh');

	}

	public function dashboard()
	{
		if ($this->session->userdata('role_id')==0)
		{
			redirect ('admin', 'refresh');
		}

		elseif ($this->session->userdata('role_id')==1)
		{
			redirect ('staff', 'refresh');
		}

		elseif ($this->session->userdata('role_id')==2)
		{
			redirect ('teacher', 'refresh');
		}

		else
		{
			redirect ('student', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect ('', 'refresh');
	}

} /* end of User Controller */