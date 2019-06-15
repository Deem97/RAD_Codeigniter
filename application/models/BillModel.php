<?php
class BillModel extends CI_Model{
	function saverecords($b_id, $i_id, $qty){
		$data = array(
			'bill_id' => $b_id,
			// 'cust_id' => $c_id,
			'item_id' => $i_id,
			'quantity' => $qty
		);
		$this->db->insert('bill_items', $data); 
	}

    function displayrecords(){
        $this->db->select('bill_id, item_id, quantity');
        $query = $this->db->get('bill_items');
	    return $query->result();
	}

	function editRecord($id, $q=null, $p=null){
		if($id!=null && $q==null){
        	$this->db->select('bill_id, item_id, quantity');
        	$this->db->from('bill_items');
			$this->db->where('bill_id',$id);
			
        	$query = $this->db-> get();
        	return $query->result();
		}
		else if($id!=null){
			$data = array(
				// 'cust_id' => $n,
				// 'item_id' => $q,
				'quantity' => $p
			);
			$this->db->where('bill_id', $id);
			$this->db->where('item_id', $q);
 			$this->db->update('inventory', $data);
		}
	}

	function deleteRecord($id){
		$this->db->delete('bill_items', array('bill_id' => $id));
	} 
	
}