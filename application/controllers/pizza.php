<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pizza extends CI_Controller
{
	public function __construct(){

		parent::__construct();
		$this->load->model('pizzaModel');
	}


	public function index()
	{
		$this->load->view('index1');
	}

	public function order(){
		$data['pizza'] = $this->pizzaModel->allPizza();
		$data['sides']=$this->pizzaModel->sides();
		$data['combines']=$this->pizzaModel->combines();
		$this->load->view('showcase',$data);
	}

	public function viewitem(){
		$id=$this->input->post('id');
		$data['data']= $this->pizzaModel->viewitem($id);
		$data['size']=$this->pizzaModel->optionSize($id);
		$this->load->view('pizza',$data);
	}

	public function cart(){

		$pizzaId=$this->input->post('prodName');
		$otherId=$this->input->post('name');
		$item=array();
		if($pizzaId != null){
			$item=array(
			'productName'=> $this->input->post('prodName'),
			'productId' => $this->input->post('id'),
			'productType'=> $this->input->post('prodtype'),
			'productSize'=> $this->input->post('size'),
			'productQuantity'=> $this->input->post('quantity'),
			'productTopping'=> $this->input->post('topping')
		);}
		if($otherId != null) {
			$item = array(
				'productName' => $this->input->post('name'),
				'productId' => $this->input->post('id'),
				'productType' => $this->input->post('type'),
				'productSize' => 'None',
				'productQuantity' => $this->input->post('quantity'),
				'productTopping' => 'None'
			);
		}
		$itemId= $this->input->post('itemId');
		if (isset($itemId)){
			$this->pizzaModel->delete($itemId);
		}
		$allItem['images']=array();
		$allItem['price']=array();
		if(!isset($item['productName'])){
			$allItem['allItem']=$this->pizzaModel->cartItem();
			foreach($allItem['allItem'] as $value){
				if ($value['productType']=='pizza') {
					$data2 = $this->pizzaModel->viewitem($value['productId']);
					array_push($allItem['images'], $data2['image']);
					$data21 = $this->pizzaModel->cartSize($value['productId'], $value['productSize']);
					array_push($allItem['price'], $data21['price']);
				}
				if($value['productType']=='sides'){
					$data3=$this->pizzaModel->sideFind($value['productId']);
					array_push($allItem['images'], $data3['image']);
					$data31= $this->pizzaModel->sideFind($value['productId']);
					array_push($allItem['price'], $data31['price']);
				}
				if($value['productType']=='combines'){
					$data4=$this->pizzaModel->combineFind($value['productId']);
					array_push($allItem['images'], $data4['image']);
					$data41 = $this->pizzaModel->combineFind($value['productId']);
					array_push($allItem['price'], $data41['price']);
				}
			}
		}else{
			$this->pizzaModel->addItem($item);
			$allItem['allItem']=$this->pizzaModel->cartItem();
			foreach($allItem['allItem'] as $value){
				if ($value['productType']=='pizza') {
					$data2 = $this->pizzaModel->viewitem($value['productId']);
					array_push($allItem['images'], $data2['image']);
					$data21 = $this->pizzaModel->cartSize($value['productId'], $value['productSize']);
					array_push($allItem['price'], $data21['price']);
				}
				if($value['productType']=='sides'){
					$data3=$this->pizzaModel->sideFind($value['productId']);
					array_push($allItem['images'], $data3['image']);
					$data31= $this->pizzaModel->sideFind($value['productId']);
					array_push($allItem['price'], $data31['price']);
				}
				if($value['productType']=='combines'){
					$data4=$this->pizzaModel->combineFind($value['productId']);
					array_push($allItem['images'], $data4['image']);
					$data41= $this->pizzaModel->combineFind($value['productId']);
					array_push($allItem['price'], $data41['price']);
				}
			}
		}
		$this->load->view('cart',$allItem);
	}
}
?>
