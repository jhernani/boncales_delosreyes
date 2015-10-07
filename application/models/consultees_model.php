<?php
class Consultees_model extends CI_Model {


	public $consultation_id;
	public $student_id;

	public function loadAllConsultationsByStudent()
	{
		$this->db->where('student_id', $this->student_id);
		$query = $this->db->get('consultee');
		return $query;
	}
} //End