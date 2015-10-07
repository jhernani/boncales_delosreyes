<?php
class Class_members_model extends CI_Model {


	public $student_id;
	public $class_id;
	public $status;
	public $seat_id;

	function uploadClassMembersCSV()
	{
		$fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
		
		while($csv_line = fgetcsv($fp,1024)) 
		{
			for ($i = 0, $j = count($csv_line); $i < $j; $i++) 
			{
				$insert_csv = array();
				$insert_csv['student_id'] = $csv_line[0];
				$insert_csv['class_id'] = $this->class_id;
			}

			$data = array(
			'student_id' => $insert_csv['student_id'] ,
			'class_id' => $insert_csv['class_id']
			);
			   
			$data['insert_students']=$this->db->insert('class_member', $data);
		}
		
		fclose($fp) or die("can't close file");
		$data['success']="success";
		return $data;
	}

	function addClassMember()
	{
		$this->db->where('class_id', $this->class_id);
		$query = $this->db->insert('class_member', $this);

		return $query;
	}

	function updateClassMember()
	{
		$array = array(
			'student_id' => $this->student_id,
			'class_id' => $this->class_id
			);

		$this->db->where($array);
		$query = $this->db->update('class_member', $this);
		return $query;
	}

	function deleteClassMember()
	{
		$this->db->where('class_id', $this->class_id);
		$this->db->where('student_id', $this->student_id);
		$query = $this->db->delete('class_member');
		return $query;
	}
} //End of class_members_model