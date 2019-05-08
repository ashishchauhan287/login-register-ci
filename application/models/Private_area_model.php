<?php
class Private_area_model extends CI_Model {


 function get_data($uid)
 {
 	$this->db->where('id', $uid);
 	$query = $this->db->get('codeigniter_register');
  	$result = $query->row_array();
  	return $result;
 }

 function update_data($uid,$data){


//$this->db->set('name', $data['name'],'email', $data['email'], FALSE);
$this->db->where('id', $uid);
$val = $this->db->update('codeigniter_register',$data);
return $val;
 }
	}

?>