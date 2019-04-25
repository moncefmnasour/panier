<?php
require "_header.php";
 $json = array("error" => true);



  



if (isset($_GET['id'])){
	$product=$DB->query('SELECT id FROM products WHERE id=id',array('id'=>$_GET['id']));
	if(empty($product)){
		$json['message'] = "ce produit nexiste pas";
	}
	$wishlist->add1($product[$_GET['id']]->id) ;
	$json['error'] = false;
	$json['message']='le produit a bien ete ajoute a votre Wishlist';
	}else{
		$json['message'] = "vous n'avez pas selectionne de produit a ajouter a votre Wishlist";
	
	}
	echo json_encode($json);
