<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller{
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
	$this->load->model('users_model');
	$p = new Users_model();
	$data['users'] = $p->viewAllTeachers();

	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/staff-landing-page', $data);
}


public function viewAllUsers()
{
	$data = array();
	$this->load->model('users_model');
	$p = new Users_model();

	$data['users'] = $p->getAllUsers();

	$this->load->view('includes/header');
	$this->load->view('icludes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/view-users', $data);
}

//User Management Functions

public function viewAddUserCSVForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-users');	
}


public function viewAddTeacherCSVForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/upload-teacher-csv');
}

public function viewAddStudentCSVForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('admin/admin-menu');
	$this->load->view('maintenance/upload-student-csv');
}

function upload_users()
{
	$this->load->model('Users_model');
	$data['result']=$this->Users_model->upload_users_csv();
	$data['query']=$this->Users_model->get_users_info();
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/upload_success', $data);
}

function uploadTeachersCSV()
{
	$this->load->model('Users_model');
	$data['result']=$this->Users_model->upload_teachers_csv();
	$data['query']=$this->Users_model->get_users_info();
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/upload_success', $data);
}

function uploadStudentsCSV()
{
	$this->load->model('Users_model');
	$data['result']=$this->Users_model->upload_students_csv();
	$data['query']=$this->Users_model->get_users_info();
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/upload_success', $data);
}

public function addUser()
{
	$this->load->view('upload');
}


public function viewAddStudentForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/admin-menu');
	$this->load->view('maintenance/add-student-form');
}

public function viewAddTeacherForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-teacher-form');
}



public function viewUpdateUserForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/update-user-form');
}

public function viewUserProfile()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/view-user-profile');
}

public function viewAllStudents()
{
	$this->load->model('users_model');
	$p = new Users_model();
	$data['users'] = $p->viewAllStudents();
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/view-users', $data);
}

public function viewAllTeachers()
{
	$this->load->model('users_model');
	$p = new Users_model();
	$data['users'] = $p->viewAllTeachers(); 
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/view-users', $data);
}

/*Subject Functions */

public function viewSubject()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/view-subject');
}

public function viewAddSubjectForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-subject-form');
}

public function viewAddProgramForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-program-form');
}


/*Class Functions*/

public function viewAddClassForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-class-form');
}  

/*Semester Functions*/

public function viewAddSemesterForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-semester-form');
}

/*Academic Year Functions*/

public function viewAddAcademicYearForm()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/add-academic-year-form');
}

public function viewTeacherDashboard()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('staff/teacher-dashboard');
	//$this->load->view('admin/admin-landing-page', $data);
}

public function successfullyDeletedUser()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/admin-menu');
	$this->load->view('maintenance/delete_success');
}

public function successfullyUpdatedUser()
{
	$this->load->view('includes/header');
	$this->load->view('includes/banner');
	$this->load->view('staff/staff-menu');
	$this->load->view('maintenance/update_success');
}

} /*end of staff Controller*/
