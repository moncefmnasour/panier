<?php
class wishlist{
	private $DB;

	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['wishlist'])){
			$_SESSION['wishlist'] = array();
		}
		$this->DB=$DB;

	}
	

	public function add1($product_id){
		if(isset($_SESSION['wishlist'][$product_id])){
			$_SESSION['wishlist'][$product_id]++;
		}
		else{
		$_SESSION['wishlist'][$product_id] = 1;
	}
	}
	public function del1($product_id){
		if(isset($_SESSION['wishlist'][$product_id])){
			
		
				unset($_SESSION['wishlist'][$product_id]);
		
		
	}
}
}
