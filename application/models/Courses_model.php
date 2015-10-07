<?php
class Courses_model extends CI_Model {


	public $course_id;
	public $course_name;

	public function loadCourses()
	{
		$query = $this->db->get('course');
		return $query->result();
	}

	public function addCourse()
	{
		$query = $this->db->insert('course', $this);
		return $query;
	}

	public function updateCourse()
	{
		$this->db->where('course_id', $this->course_id);
		$query=$this->db->update('course',$this);
		return $query;

	}

	public function deleteCourse()
	{

		$query = $this->db->delete('course',array('course_id'=>$this->course_id));
		return $query;
	}

	public function getOneCourse()
	{
		$query = $this->db->get_where('course',array('course_id' => $this->course_id));
		return $query->row_array();
	}


} //End