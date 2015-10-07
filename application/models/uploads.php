<?php
class Uploads extends CI_Model
 {
function __construct()
{
 
parent::__construct();
 
 
}
 function upload_users_csv()
 {
    
  $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
   while($csv_line = fgetcsv($fp,1024)) 
   {
 for ($i = 0, $j = count($csv_line); $i < $j; $i++) 
   {
 
 
    $insert_csv = array();
    $insert_csv['school_id'] = $csv_line[0];
    $insert_csv['password'] = $csv_line[1];
    $insert_csv['user_role_id'] = $csv_line[2];
    $insert_csv['active'] = $csv_line[3];
   }
 
   $data = array(
    'school_id' => $insert_csv['school_id'] ,
    'password' => $insert_csv['password'],
    'user_role_id' => $insert_csv['user_role_id'],
    'active' => $insert_csv['active']
    );
       $data['insert_users']=$this->db->insert('user', $data);
      }
                   fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
 
           }
function get_users_info()
    {
       $get_user_details=$this->db->query("select * from user");
    return $get_user_details;
    
    }
}