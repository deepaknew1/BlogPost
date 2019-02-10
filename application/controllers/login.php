<?php

class login extends MY_Controller{

	public function __construct(){

			parent::__construct();
			if($this->session->userdata('id'))
				return redirect('admin/welcome');
		}
	
	public function index(){

		//$this->load->library('form_validation');
		$this->form_validation->set_rules('uname','Username','required|alpha');
		$this->form_validation->set_rules('pass','password','required|max_length[16]');
		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run()){
			$uname=$this->input->post('uname');
			$pass=$this->input->post('pass');
			$this->load->model('loginmodel');
			$login_id=$this->loginmodel->isvalidate($uname,$pass);
			if($login_id){

				$this->session->set_userdata('id',$login_id);
				//$this->session->ser_userdata('username',$uname);
				return redirect('admin/Welcome');
			}
			else{
				$this->session->set_flashdata('Login_failed','Invalid username/Password');
			  	return	redirect('login');

			  	//this redirect login mean view admin login.php
			}

		}
		else{
			$this->load->view('Admin/Login');
		}
	}

	

	
		
}


?>