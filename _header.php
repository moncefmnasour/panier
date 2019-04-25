<?php


require "db.classe.php";
require"panier.classe.php";
require"wishlist.classe.php";
$DB = new DB();
$panier= new panier($DB);

$wishlist= new wishlist($DB);
					
						

?>