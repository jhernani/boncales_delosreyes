<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maintenance extends CI_Controller{
//public $data;
	public function __construct()	
	{
		//Core controller constructor
		parent::__construct();
		 
		$this->load->library('form_validation');    
	}

	function uploadTeachersCSV()
	{
		$this->load->model('Users_model');
		$data['result']=$this->Users_model->upload_teachers_csv();
		$data['query']=$this->Users_model->get_users_info();
		$this->load->view('includes/header');
		$this->load->view('includes/banner');

		if ($this->session->userdata('role_id') == 0)
		{
			$this->load->view('admin/admin-menu');
			$this->load->view('maintenance/upload_success', $data);
		}

		else
		{
			$this->load->view('staff/staff-menu');
			$this->load->view('maintenance/upload_success', $data);
		}
	}

	function uploadStudentsCSV()
	{
		$this->load->model('Users_model');
		$data['result']=$this->Users_model->upload_students_csv();
		$data['query']=$this->Users_model->get_users_info();
		$this->load->view('includes/header');
		$this->load->view('includes/banner');

		if ($this->session->userdata('role_id') == 0)
		{
			$this->load->view('admin/admin-menu');
			$this->load->view('maintenance/upload_success', $data);
		}

		else
		{
			$this->load->view('staff/staff-menu');
			$this->load->view('maintenance/upload_success', $data);
		}
	}


	public function deleteUser()
	{
		$this->load->model('Users_model');
		$p = new Users_model();
		$p->user_id = $this->input->post('user_id');
		$result = $p->deleteUser();

			if(!$result)
			{
				echo mysqli_error($result);
			}

			else
			{
				if ($this->session->userdata('role_id') == 0)
				{
					redirect('admin/successfullyDeletedUser', 'refresh');
				}

				else
				{
									{
					redirect('staff/successfullyDeletedUser', 'refresh');
				}				
			}	
	}
	
	public function addTeacher(){
		$this->load->model('Users_model');
		$p = new Model_product();
		$p->user_id = $this->input->post('user_id');
		$p->password = $this->input->post('password');
		$p->role_id = 2;
		$result=$p->addTeacher();
		
		if (!$result){
			echo mysqli_error($result);
		}
		
		else
		{
				if ($this->session->userdata('role_id') == 0)
				{
					redirect('admin', 'refresh');
				}

				else
				{
					redirect('staff', 'refresh');
				}				
		}
	}

		public function addStudent(){
		$this->load->model('Users_model');
		$p = new Model_product();
		$p->user_id = $this->input->post('user_id');
		$p->password = $this->input->post('password');
		$p->role_id = 3;
		$result=$p->addStudent();
		
		if (!$result){
			echo mysqli_error($result);
		}
		
		else
		{
				if ($this->session->userdata('role_id') == 0)
				{
					redirect('admin', 'refresh');
				}

				else
				{
					redirect('staff', 'refresh');
				}				
		}
	}
	
	/*public function viewUpdateDeleteUserForm(){
		$this->load->model('Model_product');
		$data=array();
		$data['products']=$this->Model_product->loadProducts();
		$this->load->view('list_with_update_delete', $data);
	}
	
	public function viewUpdateUserForm(){
		$this->load->model('Model_product');
		$p = new Model_product();
		$p->ProductID = $this->input->post('product_id');
		$data = array();
		$data = $p->getOneProduct();
		$this->load->view('update_product_view', $data);
	} */

	public function updateUser(){

		$this->load->model('Users_model');
		$p = new Users_model();
		$p->user_id = $this->input->post('user_id');
		$p->ProductName = $this->input->post('product_name');
		$p->ProductDescription = $this->input->post('product_descp');
		$p->ProductStandardPrice = $this->input->post('product_price');

		$result = $p->updateUser();

		if(!$result){
			echo mysqli_error($result);
		}

		else
		{

			if ($this->session->userdata('role_id') == 0)
			{
				redirect('admin/successfullyUpdatedUser', 'refresh');
			}

			else
			{
				redirect('staff/successfullyUpdatedUser', 'refresh');
			}
		}
	}


}