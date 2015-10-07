<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller{



public function index()
{
	$this->load->model('users_model');
	$p = new Users_model();
	$data['users'] = $p->viewAllTeachers();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('teacher/teacher-menu');
	$this->load->view('teacher/teacher-landing-page');
	//$this->load->view('admin/admin-landing-page', $data);
}


public function viewClass()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/teacher-menu');
	$this->load->view('admin/add-consultation-form');
}

public function addNewClass()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/teacher-menu');
	$this->load->view('admin/add-class-form');
}

public function addClassMembersCSV()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/teacher-menu');
	$this->load->view('admin/add-class-members-csv');
}

public function addClassMembers()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/teacher-menu');
	$this->load->view('admin/add-class-members');
}

public function viewAddConsultationForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/teacher-menu');
	$this->load->view('admin/add-consultation-form');
}




} /*end of Admin Controller*/
