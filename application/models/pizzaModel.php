<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pizzaModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();

	}

	public function allPizza(){
		$q = $this->db->get('pizza');
		return ($q->result_array());
	}
	public function viewitem($id){
		$query = $this->db->get_where('pizza', array('id' => $id));
		return $query->row_array();
	}
	public function sides(){
		$q = $this->db->get('sides');
		return ($q->result_array());
	}
	public function sideFind($id){
		$query = $this->db->get_where('sides',array('id'=>$id));
		return ($query->row_array());
	}
	public function combines(){
		$q = $this->db->get('combines');
		return ($q->result_array());
	}
	public function combineFind($id){
		$query = $this->db->get_where('combines',array('id'=>$id));
		return ($query->row_array());
	}
	public function addItem($data){
		$this->db->insert('cart', $data);
	}
	public function cartItem(){
		$item= $this->db->get('cart');
		return ($item->result_array());
	}
	public function optionSize($id){
		$query = $this->db->get_where('size',array('id'=>$id));
		return ($query->result_array());
	}
	public function cartSize($id,$size){
		$query = $this->db->get_where('size', array('id' => $id,'size'=>$size));
		return $query->row_array();
	}
	public function delete($itemId){
		$data=$this->db->get_where('cart',array('itemId'=>$itemId));
		$this->db->delete('cart',array('itemId'=>$itemId));
	}
}
?>
