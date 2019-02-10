<?php

	if(!defined('BASEPATH')) exit('No direct script access allowed');
	//require_once('PHPExcel.php');

	class Export extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Export_model','export');
		}

		public function index()
		{
			$data['title']='Display feedback done!';
			$data['feedbackInfo']=$this->export->employee_list();
			//load file for output
			$this->load->view('users/feedbackList',$data);
		}
		public function createXLS(){
			$this->load->library("excel");
			$object=new PHPExcel();

			$object->setActiveSheetIndex(0);
			$total_colums=array("name","email","feedback");

			$colums=0;

			foreach ($total_colums as $field) {
				# code...
				$object->getActiveSheet()->setCellValueByColumnAndRow($colums,1,$field);
				$colums++;

			}

			$feedbackInfo=$this->export->employee_list();
			$excel_row=2; 
			foreach($feedbackInfo as $row)
			{
				$object->getActiveSheet()->setCellValueByColumnAndRow(0,$excel_row,$row->name);
				$object->getActiveSheet()->setCellValueByColumnAndRow(1,$excel_row,$row->email);
				$object->getActiveSheet()->setCellValueByColumnAndRow(2,$excel_row,$row->feedback1);
				$excel_row++;
			}
			$object_writer=PHPExcel_IOFactory::createWriter($object,'Excel2007');
			header('Content-Type: application/vnd.ms-excel');
			header('Content-Disposition: attachment;filename="feedback Data.xls"');
			$object_writer->save('php://output');

		}
	}

?>