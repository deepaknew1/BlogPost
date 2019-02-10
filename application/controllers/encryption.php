<?php

	class encryption extends CI_Controller{

		public function __construct(){
			parent::__construct();

			$this->load->library('encrypt');
		}
		public function index(){
			$this->load->view('users/show_form');

		}
		public function key_encoder(){
			$this->form_validation->set_rules('key','Message','trim|required');
			if($this->form_validation->run()==False){
				$this->load->view('show_form');

			}else{
				$key=$this->input->post('key');
				$data['encrypt_value']=$this->encrypt->encode($key);
				$this->load->view('show_form',$data);
			}

		}
		public function key_decoder(){
			
		}
	}

?>