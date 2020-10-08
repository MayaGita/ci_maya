<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation');
	}

	
	public function index()
	{
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        //ini contoh input password
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run() ==false){
		$this->load->view('include/auth_header');
		$this->load->view('Auth/login');
		$this->load->view('include/auth_footer');
	   }else{
	   	$this->_login();
	   }
	}

    
    private function _login(){
    	$email = $this->input->post('email');

    	$password = $this->input->post('password');

    	$user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user){
    	    if($user['is_active'] == 1){

    		//user ditemukan

    		     if(password_verify($password,$user['password'])){
    			  //jika password sama

    			  $data =[
    				'email' =>$user['email'],
    				'id_role' =>$user['id_role']

    			   ];
    			    //simpan email dan id_role dalam session
    			  $this->session->set_userdata($data);
    			  redirect('user');	
    		     }else{
    			          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">wrong password"');
		             redirect('auth');

    		     }
    	    }else{
    		    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">this email has not been activated"');
		     redirect('auth');

    	}
       }else{

       	     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">email is not registered"');
		redirect('auth');

       }
    }


	public function register(){
		//contoh aturan validasi $this->form_validation->set_rules('nama attribut 'nama' di database,'aliasnya','aturannya')
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password','Password','required|trim|min_length[8]|matches[repeat_password]');
        $this->form_validation->set_rules('repeat_password','RepeatPassword','required|trim|min_length[8]|matches[password]');


      if($this->form_validation->run() ==false){


	    $this->load->view('include/auth_header');
		$this->load->view('auth/register');
		$this->load->view('include/auth_footer');
	}else{
		$data =[
			'name' => htmlspecialchars($this->input->post('name', TRUE)),
			'email' => htmlspecialchars($this->input->post('email', TRUE)),
			'image' => 'default.jpg',
			'password' =>password_hash($this->input->post('password'),PASSWORD_DEFAULT),
			'id_role' => 2,
			'is_active' => 1,
			'date_created' => time(),
			'date_modified' => null

		];

		$this->db->insert('user', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation!your account has been created!"');
		redirect('auth');

	}

    }


      public function logout(){
    	//menghapus data session

    	$this->session->unset_userdata('email');
    	$this->session->unset_userdata('id_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">logout success"');
		redirect('auth');



    }


}
