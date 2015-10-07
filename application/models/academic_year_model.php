<?php
class Academic_year_model extends CI_Model {


	public $academic_year_id;
	public $academic_year;

	public function loadAllAcademicYears()
	{
		$this->db->order_by('academic_year_id', 'desc');
		$query = $this->db->get('academic_year');
		return $query->result();
	}

	public function addAcademicYear()
	{
		$query = $this->db->insert('academic_year', $this);
		return $query;
	}

	public function updateAcademicYear()
	{
		$this->db->where('academic_year_id', $this->academic_year_id);
		$query=$this->db->update('academic_year',$this);
		return $query;

	}

	public function deleteAcademicYear()
	{

		$query = $this->db->delete('academic_year',array('academic_year_id'=>$this->academic_year_id));
		return $query;
	}

	public function getOneAcademicYear()
	{
		$query = $this->db->get_where('academic_year',array('academic_year_id' => $this->academic_year_id));
		return $query->row_array();
	}


} //End