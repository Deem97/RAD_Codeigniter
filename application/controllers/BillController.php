<?php
class BillController extends CI_Controller{
	public function __construct(){
	    parent::__construct();
	    $this->load->database('drugman');
	    $this->load->helper('url');
	    $this->load->model('BillModel');
	}

	public function createRecord(){
		$this->load->view('AddBill');
		if($this->input->post('save')){
		    $b=$this->input->post('b_id');
		    // $n=$this->input->post('c_id');
		    $e=$this->input->post('i_id');
		    $m=$this->input->post('qty');
		    $this->BillModel->saverecords($b,$e,$m);		
		    redirect("BillController/displayData");  
		}
	}
    
    public function displayData(){
	    $result['data']=$this->BillModel->displayrecords();
	    $this->load->view('BillView',$result);
	}

	public function editRecord($id = null){
		if($id){
			$data['result']=$this->BillModel->editRecord($id);
			$this->load->view('UpdateBillView',$data);
		}
		else{
			if($this->input->post('update')){
				$i=$this->input->post('bill_id');
				// $n=$this->input->post('cust_id');
				$e=$this->input->post('item_id');
				$m=$this->input->post('quantity');
				$this->BillModel->editRecord($i,$e,$m);		
				redirect("BillController/displayData");  
			}
		}
	}

	public function deleteRecord($id = null){
		if($id){
			$this->BillModel->deleteRecord($id);
			redirect("BillController/displayData");
		}
			  
	}

}
?>