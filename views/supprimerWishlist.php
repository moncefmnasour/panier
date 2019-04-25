<?PHP
include "../core/WishlistW.php";
$WishlistW=new WishlistW();
if (isset($_POST["Referenceproduit"])){
	$WishlistW->supprimerWishlist($_POST["Referenceproduit"]);
	header('Location: ../Wishliste.php?operation=oksupp');
}

?>