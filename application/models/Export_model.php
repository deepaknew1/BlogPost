<?php

	class Export_model extends CI_Model{
		public function employee_list(){
			$Q=$this->db->select(['name','email','feedback1'])
						->from('feedback')
						->get();
						return $Q->result();
		}
	}

?>