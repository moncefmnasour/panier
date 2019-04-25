<?PHP
include "../entities/Wishlist.php";
include "../core/WishlistW.php";
$Wishlist=new Wishlist(50,20);
$WishlistW=new WishlistW();
$WishlistW->afficherWishlist($Wishlist);
echo "****************";
echo "<br>";
echo "Refenceproduit:".$Wishlist->getReference();
echo "<br>";
echo "Etat:".$Wishlist->getEtat();



?>