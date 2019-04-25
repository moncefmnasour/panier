<?PHP
include "../entities/Commande.php";
include "../core/CommandeC.php";

if (isset($_POST['modifier']) and !empty($_POST["id_commande"])){
	extract($_POST);
	if(!empty($_POST["date_commande"])){
		CommandeC::modifierProduit($_POST["id_commande"],"date_commande",$date_commande);
			header('Location: ../afficherCommande.php?operation=update');
	}
	
	if(isset($_POST["Quantite"])){
	if(!empty($_POST["Quantite"])){
		CommandeC::modifierProduit($_POST["id_commande"],"Quantite",$Quantite);
			header('Location: ../afficherCommande.php?operation=update');
	}
	}
	if(isset($_POST["id_client"])){	
		if(!empty($_POST["id_client"])){
		CommandeC::modifierProduit($_POST["id_commande"],"id_client",$id_client);
			header('Location: ../afficherCommande.php?operation=update');
	}
}
if(isset($_POST["Referenceproduit"])){
		if(!empty($_POST["Referenceproduit"])){
		CommandeC::modifierProduit($_POST["id_commande"],"Referenceproduit",$Referenceproduit);
			header('Location: ../afficherCommande.php?operation=update');
	}
}
if(isset($_POST["Boutique"])){
		if(!empty($_POST["Boutique"])){
		CommandeC::modifierProduit($_POST["id_commande"],"Boutique",$Boutique);
			header('Location: ../afficherCommande.php?operation=update');
	}
}

}
?>
