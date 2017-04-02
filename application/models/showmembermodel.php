
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showmembermodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function showmember() //ดึงข้อมูลไปแสดงทั้งหมด
	{
		$show = $this->db->query("SELECT * FROM `member`");
		$data = $show->result_array();
		return $data;
	}


	public function onedit($id) //เรียกข้อมูลจากdbที่idตรงกันไปแสดง
	{
		$show = $this->db->query("SELECT * FROM `member` WHERE `user_id`='$id'");
		$data = $show->result_array();
		return $data;

	}
	
	public function update_user($modify,$id) //updete การแก้ไข
	{
		$this->db->where('user_id', $id);
		$this->db->update('member', $modify); 
	}
	
	public function delete_user($id) //delete
	{
		$this->db->where('user_id', $id);
		$this->db->delete('member'); 
	}



}

/* End of file showmembermodel.php */
/* Location: ./application/models/showmembermodel.php */
?>