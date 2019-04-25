<?PHP
include "../entities/Wishlist.php";
include "../core/WishlistW.php";


if (isset($_POST['Referenceproduit'])and isset($_POST['Etat']))
{
	echo $_POST['Referenceproduit'];
	
$Wishlist1=new Whishlist($_POST['Referenceproduit'],$_POST['Etat']);
//Partie2

var_dump($Wishlist1);

//Partie3
$wishlist1W=new WishlistW($Wishlist1);
$wishlist1W->ajouterWishlist($Wishlist1);
//$Commande1C->supprimerCommande(12);


header('Location: ../Wishliste.php');
}
else{
	echo "vérifier les champs";
	
}
//*/

?>