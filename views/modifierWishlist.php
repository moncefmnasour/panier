<?PHP
include "../entities/Wishlist.php";
include "../core/WishlistW.php";

if (isset($_POST['modifier']) and !empty($_POST["Referenceproduit"])){
	extract($_POST);
	if(!empty($_POST["Etat"])){
		WishlistW::modifierWishlistW($_POST["WishlistW"],"Etat",$Etat);
			header('Location: ../afficherWishlist.php?operation=update');
	}
	
	


}

?>