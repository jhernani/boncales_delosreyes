<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller{

	public function addSubject(){
		$this->load->model('Subjects_model');
		$p = new Academic_year_model();
		$p->subject_code = $this->input->post('subject_code');
		$p->subject_title = $this->input->post('subject_title');
		$result=$p->addSubject();
		
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
}