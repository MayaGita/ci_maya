<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Ci_controller {
	
	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}


	
	public function index()
	{
		$data['user'] = $this->db->get_where('user',['email'=> $this->session->userdata('email')])->row_array();
		echo 'Halo' .'  '.  $data['user']['name'];
	}
}
