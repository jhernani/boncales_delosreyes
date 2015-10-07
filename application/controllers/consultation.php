<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consultation extends CI_Controller{
public $data;
public function __construct()	
{
	//Core controller constructor
	parent::__construct();
	 
	$this->load->model('uploads');
	$this->load->library('form_validation');    
}


public function index()
{
	$this->load->model('consultations_model');
	$p = new Consultations_model();
	$data['users'] = $p->viewAllConsultations();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('teacher/teacher-menu');
	$this->load->view('teacher/teacher-consultation-records');
}

public function addConsultationRecordForm()
{
	//$this->load->model('consultations_model');
	//$p = new Consultations_model();
	//$data['users'] = $p->addConsultationRecord();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('teacher/teacher-menu');
	$this->load->view('teacher/add-consultation-form');
}

public function viewConsultationRecords()
{
	//$this->load->model('consultations_model');
	//$p = new Consultations_model();
	//$data['users'] = $p->addConsultationRecord();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('teacher/teacher-menu');
	$this->load->view('teacher/teacher-consultation-records');
}


public function listOfConsultants()
{
	$this->load->model('users_model');
	$p = new Users_model();
	$data['users'] = $p->viewAllTeachers();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/admin-menu');
	$this->load->view('admin/view-consultants-list', $data);
}

public function viewConsultationRecordsByTeacher()
{

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/admin-menu');
	$this->load->view('admin/admin-consultation-records');	
}

public function viewConsultationRecordsByStudent ()
{

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/admin-menu');
	$this->load->view('admin/admin-consultation-records');	
}







} // end of Consultations controller