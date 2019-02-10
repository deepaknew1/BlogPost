<?php

	class Loginmodel extends CI_Model{

		public function isvalidate($username,$password){
			//md5($password)
			$q=$this->db->where(['username'=>$username,'password'=>$password])->get('users');
			
			if($q->num_rows()){

				return $q->row()->id;

			}
			else{
				return false;
			}


		}
		public function articleList($limit,$offset){
			$id=$this->session->userdata('id');
			$q=$this->db->select('')
					->from('articles')
					->where(['user_id'=>$id])
					->limit($limit,$offset)
					->get();
					return $q->result();					
				
		}

		public function all_articleList($limit,$offset){
			$q=$this->db->select()
					->from('articles')
					->limit($limit,$offset)
					->get();
					return $q->result();	
		}
		public function add_article($array){
			
			return $this->db->insert('articles',$array);//it will give me data inn rows
		}

		public function add($array)
		{
			return $this->db->insert('users',$array);
		}
		public function del($id){
			return $this->db->delete('articles',['id'=>$id]);
		}

		public function num_rows(){
			$id=$this->session->userdata('id');
			$q=$this->db->select()
					->from('articles')
					->where(['user_id'=>$id])
					->get();
					return $q->num_rows();
					
		}
		public function all_article_count(){
			$q=$this->db->select()
					->from('articles')
					->get();
					
					return $q->num_rows();
		}
		public function find_article($articleId)
		{
			$q=$this->db->select(['article_title','article_body','id'])
					->where(['id'=>$articleId])
					->get('articles');
					return $q->row();
		}
		public function update_article($articleId,Array $article){
		 	return $this->db->where(['id'=>$articleId])
					->update('articles',$article);
					
					
		}

	}


?>