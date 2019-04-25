<?PHP
include "../entities/Commande.php";
include "../core/CommandeC.php";

if (isset($_POST['id_commande']) and isset($_POST['Nomproduit']) and isset($_POST['Quantite']) and   isset($_POST['size']) and isset($_POST['prix']) and isset($_POST['couleur'])){
$Commande1=new Commande($_POST['id_commande'],$_POST['Nomproduit'],$_POST['Quantite'],$_POST['size'],$_POST['prix'],$_POST['couleur']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Commande1C=new CommandeC();
$Commande1C->ajouterCommande($Commande1);
header('Location: afficherCommande.php');
	
}else{
	echo "verifier les champs";
}
//*/

?>