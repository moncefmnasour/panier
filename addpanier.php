<?php


require "_header.php";

	include "Nexmo/src/NexmoMessage.php" ;


	

/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('2bd1ee1e','ajJ5lbsLFg6aTD4z');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '216258106611', 'Cazasport', 'le produit a ete bien ajouter au panier ' );

	// Step 3: Display an overview of the message
	

	// Done!



  



if (isset($_GET['id'])){
	
	

	$product=$DB->query('SELECT id FROM products WHERE id=id',array('id'=>$_GET['id']));
	if(empty($product)){
		$json['message'] = "ce produit nexiste pas";
	}
	$panier->add($product[$_GET['id']]->id) ;
	$json['error'] = false;
	 $nexmo_sms->displayOverview($info);
	}else{
		$json['message'] = "vous n'avez pas selectionne de produit a ajouter au panier";
	
	}
	echo json_encode($json);
