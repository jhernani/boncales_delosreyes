<?php
class Consultations_model extends CI_Model {


	public $consultation_id;
	public $instuctor_id;
	public $class_id;
	public $datetime_scheduled;
	public $time_consumed;
	public $issue_topic;
	public $remarks;

	public function loadAllConsultations()
	{
		$query = $this->db->get('academic_year');
		return $query;
	}

	public function loadAllConsultationsByInstructor()
	{
		$this->db->where('instructor_id', $this->instructor_id);
		$query = $this->db->get('consultation');
		return $query;
	}

	public function addConsultation()
	{
		$query = $this->db->insert('consultation', $this);
		return $query;
	}

	public function updateConsultation()
	{
		$this->db->where('consultation_id', $this->consultation_id);
		$query=$this->db->update('consultation',$this);
		return $query;

	}

	public function deleteConsultation()
	{

		$query = $this->db->delete('consultation',array('consultation_id'=>$this->consultation_id));
		return $query;
	}

	public function getOneConsultation()
	{
		$query = $this->db->get_where('consultation',array('consultation_id' => $this->consultation_id));
		return $query->row_array();
	}


} //End