
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertcontroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();

		$this->load->view('fromregisteview');
		$this->load->model('insertmodel');
	}

	public function index()
	{
		
	}
	public function getdb(){
		$regiter = array(
						'name_surname' => $this->input->post('name'),
						'user' => $this->input->post('user'),
						'password' => $this->input->post('password'),
						'Email' => $this->input->post('email'),
						'phone' => $this->input->post('phone')
					); 
		$this->insertmodel->dbregiter($regiter);
		$this->load->view('insertoK');
		
	}


	
}

/* End of file insertcontroller.php */
/* Location: ./application/controllers/insertcontroller.php */