
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editcontroller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('showmembermodel');	
	}

	public function view($id)
	{
		$data['items'] = $this->showmembermodel->onedit($id);
		$this->load->view('editview', $data, FALSE);

	}
	public function modify(){ //รับค่ามาจากหน้าedit
		$modify = array(
						'name_surname' => $this->input->post('name'),
						'password' => $this->input->post('password'),
						'Email' => $this->input->post('email'),
						'phone' => $this->input->post('phone')
					); 
		$id = $this->input->post('id');
		$this->showmembermodel->update_user($modify,$id);

		$this->load->view('editok');
	}
	public function delete($id){ //delete
		$this->showmembermodel->delete_user($id);
		$this->load->view('deleteok');
	}
}

/* End of file showmembercontroller.php */
/* Location: ./application/controllers/showmembercontroller.php */