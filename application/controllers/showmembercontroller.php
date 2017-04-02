
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showmembercontroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('showmembermodel');	
	}

	public function index()
	{
		$data['items'] = $this->showmembermodel->showmember();
		$this->load->view('showmemberview', $data, FALSE);

	}

}

/* End of file showmembercontroller.php */
/* Location: ./application/controllers/showmembercontroller.php */