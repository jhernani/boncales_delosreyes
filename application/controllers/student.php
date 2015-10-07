<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller{



public function index()
{
	$this->load->model('Users_model');
	$p = new Users_model;
	$p->user_id = $this->session->userdata('user_id');
	$data = array();
	$data = $p->getUserInformation();
	
	$fname = $data['fname'];

	if($fname == NULL)
	{
		$this->load->view('includes/header');
		$this->load->view('includes/banner');
		$this->load->view('student/student-menu');
		$this->load->view('student/create-student-profile');
	}

	else {

		$this->load->view('includes/header');
		$this->load->view('includes/banner');
		$this->load->view('student/student-menu');
		$this->load->view('includes/sem_header');
		$this->load->view('student/student-classes');
	}
}

public function changePage()
{
	if ($this->input->post('page') == 0)
	{
		redirect('student/studentClassCalendar', 'refresh');
	}

	else
	{
		redirect('student/studentClassAttendance', 'refresh');
	}
}

public function studentClassCalendar()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('student/student-menu');
	$this->load->view('student/student-class-calendar');
}

public function studentClassAttendance()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('student/student-menu');
	$this->load->view('student/student-class-attendance');
}

public function overallAttendance()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('student/student-menu');
	$this->load->view('student/student-consultation-records');
}


public function consultationRecords()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('student/student-menu');
	$this->load->view('student/student-consultation-records');
}


public function createStudentProfile()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('student/student-menu');
	$this->load->view('student/create-student-profile');
}

} /*end of Admin Controller*/
