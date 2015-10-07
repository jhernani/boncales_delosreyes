<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semester extends CI_Controller{

	public function viewAddSemesterForm()
	{
		$this->load->model('Academic_year_model');
		$p = new Academic_year_model;
		$data = array();
		$data['academic_years'] = $p->loadAllAcademicYears();

		if ($this->session->userdata('role_id') == 0)
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('admin/admin-menu');
				$this->load->view('maintenance/add-semester-form', $data);
			}

			else
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('staff/staff-menu');
				$this->load->view('maintenance/add-semester-form', $data);
			}
	}

	public function addSemester()
	{
		$this->load->model('Semesters_model');
		$p = new Semesters_model();
		$p->academic_year_id = $this->input->post('academic_year_id');
		$p->semester = $this->input->post('semester');
		$p->start_date = $this->input->post('start_date');
		$p->end_date = $this->input->post('end_date');
		$result=$p->addSemester();
		
		if (!$result)
		{
			echo mysqli_error($result);
		}
		
		else
		{
			echo "<script type='text/javascript'>alert('Successfully added new semester!')</script>";

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

}