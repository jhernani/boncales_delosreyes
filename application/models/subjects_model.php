<?php
class Subjects_model extends CI_Model {


	public $subject_code;
	public $subject_title;

	public function loadAllSubjects()
	{
		$query = $this->db->get('subject');
	return $query;
	}

	public function addSubject()
	{
		$query = $this->db->insert('subject', $this);
		return $query;
	}

	public function updateSubject()
	{
		$this->db->where('subject_id', $this->subject_code);
		$query=$this->db->update('subject',$this);
		return $query;

	}

	public function deleteSubject()
	{
		$query = $this->db->delete('subject',array('subject_code'=>$this->subject_id));
		return $query;
	}

	public function getOneSubject()
	{
		$query = $this->db->get_where('subject',array('subject_code' => $this->subject_id));
		return $query->row_array();
	}

} //End