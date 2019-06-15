<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InventoryController extends CI_Controller{
	public function __construct(){
	    parent::__construct();
	    $this->load->database('drugman');
	    $this->load->helper('url');
	    $this->load->model('InventoryModel');
	}

	public function savedata(){
		$this->load->view('AddInventoryView');
		if($this->input->post('save')){
		    $n=$this->input->post('name');
		    $e=$this->input->post('qty');
		    $m=$this->input->post('price');
		    $this->InventoryModel->saverecords($n,$e,$m);		
		    redirect("InventoryController/displayData");  
		}
	}
    
    public function displayData(){
	    $result['data']=$this->InventoryModel->displayrecords();
		$this->load->view('InventoryView',$result);
	}

	public function editRecord($id = null){
		if($id){
			$data['result']=$this->InventoryModel->editRecord($id);
			$this->load->view('UpdateInventoryView',$data);
		}
		else{
			if($this->input->post('update')){
				$i=$this->input->post('id');
				$n=$this->input->post('name');
				$e=$this->input->post('qty');
				$m=$this->input->post('price');
				$this->InventoryModel->editRecord($i,$n,$e,$m);		
				redirect("InventoryController/displayData");  
			}
		}
	}

	public function deleteRecord($id = null){
		if($id){
			$this->InventoryModel->deleteRecord($id);
			redirect("InventoryController/displayData");
		}
			  
	}
}
?>