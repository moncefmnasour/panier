<?php

class panier1{
	private $DB;
public function totalfinal(){
		$totalfinal=0;
		$ids = array_keys($_SESSION['panier']);
		if (empty($ids)){
			$products= array( );
		}
		else  {
			$products=$this->DB->query('SELECT id,price FROM products WHERE id IN('.implode(', ',$ids).')');
		}
foreach ($products as $product) {
			$totalfinal += (($product->price * $_SESSION['panier'][$product->id]*50)/100);
			# code...
		}
		return $totalfinal;

		}
	}
		header('Location: cart.php');
		?>