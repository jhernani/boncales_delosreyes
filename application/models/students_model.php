<?php
class Students_model extends CI_Model {


	public $student_id;
	public $course_id;
	public $year_level;

	public function getAllStudents()
	{
		
	}

	public function updateStudentProfile()
	{
		$this->db->where('student_id', $this->student_id);
		$query = $this->db->update('student', $this);
		return $query;
	}

} //End