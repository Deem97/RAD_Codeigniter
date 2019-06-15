<?php
class InventoryModel extends CI_Model{
	function saverecords($n, $q, $p){
		$data = array(
			'name' => $n,
			'quantity' => $q,
			'price' => $p
		 );
		 $this->db->insert('inventory', $data); 
	}
    
    function displayrecords(){
        $this->db->select('id, name, quantity, price');
        $query = $this->db->get('inventory');
	    return $query->result();
	}

	function editRecord($id, $n=null, $q=null, $p=null){
		if($id!=null && $n==null){
        	$this->db->select('id, name, quantity, price');
        	$this->db->from('inventory');
			$this->db->where('id',$id);
			
        	$query = $this->db-> get();
        	return $query->result();
		}
		else if($id!=null){
			$data = array(
				'name' => $n,
				'quantity' => $q,
				'price' => $p
			);
			$this->db->where('id', $id);
 			$this->db->update('inventory', $data);
		}
	}

	function deleteRecord($id){
		$this->db->delete('inventory', array('id' => $id));
	} 

}