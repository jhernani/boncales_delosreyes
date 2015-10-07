<?php
class Classes_model extends CI_Model {


	public $class_id;
	public $student_id;
	public $role_id;
	public $status;
	public $fname;
	public $mname;
	public $lname;
	public $birthdate;
	public $contact_no;

	public function getAllUsers()
	{
		$this->db->where('role_id !=', 0);
		$this->db->where('role_id !=', 1);
		$this->db->order_by('lname', 'asc');
		$query = $this->db->get('user');
		return $query->result();
	}

	public function viewAllStudents()
	{
		$this->db->where('role_id', 3);
		$this->db->order_by('lname', 'asc');
		$query = $this->db->get('user');
		return $query->result();
	}

	public function viewAllTeachers()
	{
		$this->db->where('role_id', 2);
		$this->db->order_by('lname', 'asc');
		$query = $this->db->get('user');
		return $query->result();
	}

	public function checkUser()
	{
		$this->db->where('user_id', $this->user_id);
		$this->db->where('password', $this->password);
		$query = $this->db->get('user');
		return $query->num_rows();
	}

	public function getUserInformation()
	{
		$query = $this->db->get_where('user',array('user_id' => $this->user_id));
		return $query->row_array();
	}

	function uploadClassMembersCSV()
	{
		$fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
		
		while($csv_line = fgetcsv($fp,1024)) 
		{
			for ($i = 0, $j = count($csv_line); $i < $j; $i++) 
			{
				$insert_csv = array();
				$insert_csv['user_id'] = $csv_line[0];
				$insert_csv['password'] = $csv_line[1];
				$insert_csv['role_id'] = 3;
			}

			$data = array(
			'user_id' => $insert_csv['user_id'] ,
			'password' => $insert_csv['password'],
			'role_id' => $insert_csv['role_id']
			);
			
			$this->db->where('class_id', $this->class_id);
			$data['insert_users']=$this->db->insert('class_member', $data);
		}
		
		fclose($fp) or die("can't close file");
		$data['success']="success";
		return $data;
	}


	function get_users_info()
    {    
	    $get_user_details=$this->db->get('user');
	    return $get_user_details;
    }

} //End