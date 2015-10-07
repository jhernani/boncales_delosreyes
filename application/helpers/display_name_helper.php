<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function getUserInfo()
    {
    	$ci = get_instance();
        $id = $ci->session->userdata('user_id');

		$array = array('user_id' => $id);
		$ci->load->database();
		$query = $ci->db->select('fname, lname')
			->from('user')
				->where($array);
			
		$ret = $query->get()->result();

	return $ret;
    }   		

}