<?php

	class Users extends MY_controller{
		public function __construct(){

			parent::__construct();
			if($this->session->userdata('id'))
				return redirect('admin/welcome');
		}
		public function index(){
			//$this->load->helper('url');
			log_message('error','error message in this line');
			log_message('debug','debug message in this line');

			log_message('info','Index method called');

			$this->load->model('loginmodel','ar');
			$this->load->library('pagination');
			$config=[
				'base_url'=> base_url('users/index'),
				'per_page'=>3,
				'total_rows'=>$this->ar->all_article_count(),
				'full_tag_open'=>"<ul class='pagination'>",
				'full_tag_close'=>"</ul>",
				'next_tag_open'=>"<li>",
				'next_tag_close'=>"</li>",
				'prev_tag_open'=>"<li>",
				'prev_tag_close'=>"</li>",
				'num_tag_open'=>"<li>",
				'num_tag_close'=>"</li>",
				'cur_tag_open'=>"<b class='active'>",
				'cur_tag_close'=>"</b>"

			];
			$this->pagination->initialize($config);
			
			$articles=$this->ar->all_articleList($config['per_page'],$this->uri->segment(3));
			$this->load->view('users/Homepage',compact('articles'));
		}
		public function register(){
			$this->load->view('admin/register');
		}


	public function sendEmail(){

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

		if($this->form_validation->run('registera')){
			$post=$this->input->post();
			$this->load->model('loginmodel','user_add');
			if($this->user_add->add($post)){
				$this->session->set_flashdata('user','user added successful');
				$this->session->set_flashdata('user_class','alert-success');
			}
			else{
				$this->session->set_flashdata('user','user added not added');
				$this->session->set_flashdata('user_class','alert-danger');
			}
			return redirect('users/register');
			/*$this->load->library('email');
			$this->email->from(set_value('email'),set_value('firstname'));
			$this->email->to('prajapari1210deep@gmail.com');
			$this->email->subject('registration successful');
			$this->email->message('Thanks for Registration');
			$this->email->set_newline("\r\n");
			$this->email->send();

			if(!$this->email->send()){
					show_error($this->email->print_debugger());

			}
			else{
				echo "your E-mail has been send";
			}*/

		}
		else{
			$this->load->view('Admin/register');
		}

	}
	}



?>