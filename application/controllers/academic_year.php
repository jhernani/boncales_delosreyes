<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic_year extends CI_Controller{

	public function loadAllAcademicYears()
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
				$this->load->view('maintenance/view-academic-years', $data);
			}

			else
			{
				$this->load->view('includes/header');
				$this->load->view('includes/banner');
				$this->load->view('staff/staff-menu');
				$this->load->view('maintenance/view-academic-years', $data);
			}
	}

	public function addAcademicYear(){
		$this->load->model('Academic_year_model');
		$p = new Academic_year_model();
		$p->academic_year = $this->input->post('academic_year');
		$result=$p->addAcademicYear();
		
		if (!$result){
			echo mysqli_error($result);
		}
		
		else
		{
			redirect('academic_year/loadAllAcademicYears', 'refresh');
					
		}
	}

} //end