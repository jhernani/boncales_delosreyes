<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller{

	public function viewCourseList()
	{
		$this->load->model('Courses_model');
		$p = new Courses_model;
		$data = array();
		$data['courses'] = $p->loadCourses();

		if ($this->session->userdata('role_id') == 0)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('admin/admin-menu');
				$this->load->view('maintenance/view-courses-list', $data);
			}

			else
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('staff/staff-menu');
				$this->load->view('maintenance/view-courses-list', $data);
			}
	}

	public function addCourse(){
		$this->load->model('Courses_model');
		$p = new Courses_model();
		$p->course_id = strtolower($this->input->post('course_id'));
		$p->course_name = $this->input->post('course_name');
		$result=$p->addCourse();
		
		if (!$result){
			echo mysqli_error($result);
		}
		
		else
		{
			echo "<script type='text/javascript'>alert('Successfully added new course!')</script>";
			redirect('course/viewCourseList', 'refresh');
		}
	}

	public function viewUpdateCourseForm(){
		$this->load->model('Courses_model');
		$p = new Courses_model();
		$p->course_id = $this->input->post('course_id');
		$data = array();
		$data = $p->getOneCourse();

		if ($this->session->userdata('role_id') == 0)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('admin/admin-menu');
				$this->load->view('maintenance/update-course-view', $data);
			}

			else
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('staff/staff-menu');
				$this->load->view('maintenance/update-course-view', $data);
			}
	}

	public function updateCourse(){

		$this->load->model('Courses_model');
		$p = new Courses_model();
		$p->course_id = $this->input->post('course_id');
		$p->course_name = strtolower($this->input->post('course_name'));

		$result = $p->updateCourse();

		if(!$result){
			echo mysqli_error($result);
		}

		else {
			echo "<script type='text/javascript'>alert('Successfully updated course!')</script>";
			redirect('course/viewCourseList', 'refresh');
		}
	}

	public function deleteCourse(){

		$this->load->model('Courses_model');
		$p = new Courses_model();
		$p->course_id = $this->input->post('course_id');
		$result = $p->deleteCourse();

			if(!$result){
				echo mysqli_error($result);
			}

			else{
				echo "<script type='text/javascript'>alert('Successfully deleted course!')</script>";
				redirect('course/viewCourseList', 'refresh');
			}
	
	
	}

} //end