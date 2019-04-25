<?PHP
include "../core/CommandeC.php";
$CommandeC=new CommandeC();
if (isset($_POST["id_commande"])){
	$CommandeC->supprimerCommande($_POST["id_commande"]);
	header('Location: ../views/afficherCommande.php?operation=oksupp');
}

?>