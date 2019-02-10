<?php

	class Admin extends MY_Controller{
		public function __construct(){

			parent::__construct();
			if( ! $this->session->userdata('id'))
				return redirect('login');
		}

		public function Welcome(){
			
			$this->load->model('loginmodel','ar');
			 $this->load->library('pagination');

  $config=[
        'base_url' => base_url('admin/welcome'),
        'per_page' =>2,
        'total_rows' => $this->ar->num_rows(),
        'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"<li>",
        'cur_tag_open' =>"<b class='active'><a>",
        'cur_tag_close' =>"</a></b>"

 ];


  $this->pagination->initialize($config);


			$articles=$this->ar->articleList($config['per_page'],$this->uri->segment(3));
			$this->load->view('admin/dashboard',['article'=>$articles]);
		}


		public function edit($id){
			
			$this->load->model('loginmodel');
			$article=$this->loginmodel->find_article($id);
			$this->load->view('admin/edit_article',['article'=>$article]);
		}

		public function updateArticle($articleId){

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if($this->form_validation->run('add_article_rules')){
				$post=$this->input->post();
				//reciving id from edit_article using post
				//$articleid=$post['articleId'];
				//
				//unset($articleid);
				$this->load->model('loginmodel','update');			
				if($this->update->update_article($articleId,$post))
				{
					$this->session->set_flashdata('msg','article updated successfully');
					$this->session->set_flashdata('msg_class','alert-success');
				}	
				else{
					$this->session->set_flashdata('msg','articles not updated');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				return redirect('admin/welcome');
			}
			else{
				$this->load->model('loginmodel');
			$article=$this->loginmodel->find_article($articleId);
			$this->load->view('admin/edit_article',['article'=>$article]);
			}
		}

		public function deleteArticle(){
		 	$id=$this->input->post('id');
				$this->load->model('loginmodel','delarticle');			
				if($this->delarticle->del($id))
				{
					$this->session->set_flashdata('msg','deleted successful');
					$this->session->set_flashdata('msg_class','alert-success');
				}	
				else{
					$this->session->set_flashdata('msg','plz try again');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				return redirect('admin/welcome');
			
		}
		public function add(){
			$this->load->view('Admin/add_article');
			$this->input->post();
		}

		/*public function register(){
			$this->load->view('admin/register');
		}*/	

		public function userValidation(){

			$config=
			[
				'upload_path'=>'./upload/',
				'allowed_types'=>'gif|jpg|png',
				'max_size'=>'2048'
			];

		$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		
			$this->load->library('upload',$config);
			if($this->form_validation->run('add_article_rules') && $this->upload->do_upload()){

				$post=$this->input->post();
				$data=$this->upload->data();
				$image_path=base_url("upload/".$data['raw_name'].$data['file_ext']);
				
				$post['image_path']=$image_path;

				$this->load->model('loginmodel','add');			
				if($this->add->add_article($post))
				{
					$this->session->set_flashdata('msg','article added successfully');
					$this->session->set_flashdata('msg_class','alert-success');
				}	
				else{
					$this->session->set_flashdata('msg','articles not added');
					$this->session->set_flashdata('msg_class','alert-danger');
				}
				return redirect('admin/welcome');
			}
			else{
				$upload_error=$this->upload->display_errors();
				$this->load->view('admin/add_article',compact('upload_error'));
			}
		}		

		public function logout(){
			$this->session->unset_userdata('id');
			return redirect(base_url());
		}
			/*public function __construct(){

			parent::__construct();
			if( ! $this->session->userdata('id'))
				return redirect('admin/login');
		}*/
	}
?>