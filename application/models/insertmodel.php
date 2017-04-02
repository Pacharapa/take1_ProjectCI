 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertmodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		
	}

	public function  dbregiter($register){
		
		$this->db->insert("member",$register);

	}

}

/* End of file insertmodel.php */
/* Location: ./application/models/insertmodel.php */