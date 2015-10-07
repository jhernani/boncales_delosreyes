<?php
class Semesters_model extends CI_Model {


	public $semester_id;
	public $semester;
	public $academic_year_id;
	public $start_date;
	public $end_date;

	public function loadSemesters()
	{
		$query = $this->db->get('semester');
	return $query;
	}

	public function addSemester()
	{
		$query = $this->db->insert('semester', $this);
		return $query;
	}

	public function updateSemester()
	{
		$this->db->where('semester_id', $this->semester_id);
		$query=$this->db->update('semester',$this);
		return $query;

	}

	public function deleteSemester()
	{

		$query = $this->db->delete('semester',array('semester_id'=>$this->semester_id));
		return $query;
	}

	public function getOneSemester()
	{
		$query = $this->db->get_where('semester',array('semester_id' => $this->semester_id));
		return $query->row_array();
	}

} //End