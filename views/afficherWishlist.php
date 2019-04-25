 <?PHP
include "C:wamp64/www/front/core/WishlistW.php";
//include "C:wamp64/www/front/config.php";
$Wishlist1W=new WishlistW();
$listeWishlist=$Wishlist1W->afficherWishlist();


//var_dump($listeCommande->fetchAll());
?>
<table border="1">
<tr>
<td>Referenceproduit</td>
<td>Etat</td>


<td></td>
<td></td>
</tr>

<?PHP
foreach($listeWishlist as $row){
    ?>
    <tr>
    <td><?PHP echo $row['Referenceproduit']; ?></td>
    <td><?PHP echo $row['Etat']; ?></td>
    
    
    <td><form method="POST" action="views/supprimerWishlist.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['Referenceproduit']; ?>" name="Referenceproduit">
    </form>
    </td>
    
            <!--<td><form method="POST" action="views/modifierCommande.php">
                <td><a href="views/modifierCommande.php?id_client=<?PHP echo $row['Referenceproduit']; ?>">
    <input type="submit" name="modifier" value="modifier">
    <input type="hidden" value="<?PHP echo $row['Referenceproduit']; ?>" name="id_commande">
    </form>
    </td>
    Modifier</a></td>
    </tr>-->
    <?PHP
}
?>
