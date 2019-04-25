<?PHP
include "../core/CommandeC.php";
$Commande1C=new CommandeC();
$listeCommande=$Commande1C->afficherCommande();

//var_dump($listeCommande->fetchAll());
?>
<table border="1">
<tr>
<td>id_client</td>
<td>date_commande</td>
<td>Quantite</td>
<td>id_client</td>
<td>Referenceproduit</td>
<td>Boutique</td>

<td></td>
<td></td>
</tr>

<?PHP
foreach($listeCommande as $row){
    ?>
    <tr>
    <td><?PHP echo $row['id_commande']; ?></td>
    <td><?PHP echo $row['date_commande']; ?></td>
    <td><?PHP echo $row['Quantite']; ?></td>
    <td><?PHP echo $row['id_client']; ?></td>
    <td><?PHP echo $row['Referenceproduit']; ?></td>
    <td><?PHP echo $row['Boutique']; ?></td>
    
    <td><form method="POST" action="supprimerCommande.php">
    <input type="submit" name="supprimer" value="supprimer">
    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="id_commande">
    </form>
    </td>
    
            <td><form method="POST" action="modifierCommande.php">
                <td><a href="modifierCommande.php?id_client=<?PHP echo $row['id_commande']; ?>">
    <input type="submit" name="modifier" value="modifier">
    <input type="hidden" value="<?PHP echo $row['id_commande']; ?>" name="id_commande">
    </form>
    </td>
    Modifier</a></td>
    </tr>
    <?PHP
}
?>

</table>


