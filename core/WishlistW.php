<?php
  class config1 {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
		try{
        self::$instance = new PDO('mysql:host=localhost;dbname=panier'/*l'adreese du pc où mysql est installé généralment localhost+ le nom de la database */, 'root', '');//PDO est une classe permettant d'accéder à n'importe quel type de DB
		self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
            die('Erreur: '.$e->getMessage());
		}
      }
      return self::$instance;
    }
  }
?>






<?PHP



class WishlistW {
	/*
function afficherCommande ($Commande){
		echo "Ref Commande: ".$Commande->getId_commande()."<br>";
		echo "Date Commande: ".$Commande->getDate_commande()."<br>";
		echo "Ref Client: ".$Commande->getId_client()."<br>";
		echo "Quantite: ".$Commande->getQuantite()."<br>";
		echo "Ref Produit ".$Commande->getReferenceproduit()."<br>";
		
		echo "Boutique: ".$Commande->getBoutique()."<br>";
			}
			/*
			function afficherCommande(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From Commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	*/

	function afficherWishlist(){
		$sql="SElECT * From wishlist";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function ajouterWishlist($Wishlist){
		$sql="insert into wishlist (Etat,Referenceproduit) values (:Etat, :Referenceproduit)";
		$db = config1::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $Etat=$Wishlist->getEtat();
        $Referenceproduit=$Wishlist->getReferenceproduit();
        
        
  		$req->bindValue(':Etat',$Etat);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
	
		
         
         if( $req->execute()){
         	return 1;
         }else{
         	return 0;
         }
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	function recupererWishlist($Wishlist){
		$sql="SELECT * from wishlist where Referenceproduit=:Referenceproduit";
		$db = config1::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function supprimerWishlist($Referenceproduit){
		$sql="DELETE FROM wishlist where Referenceproduit= :Referenceproduit";
		$db = config1::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	function modifierWishlist($Wishlist,$Referenceproduit){
		$sql="UPDATE wishlist SET Referenceproduit=:Referenceproduit, Etat=:Etat WHERE Referenceproduit=:Referenceproduit";
		
		$db = config1::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$Referenceproduit=$WishlistW->getReferenceproduit();
        $Etat=$WishlistW->getEtat();
       
		$datas = array(':Referenceproduit'=>$Referenceproduit, 'Etat'=>$Etat);
		$req->bindValue(':Referenceproduit',$Referenceproduit);
		$req->bindValue(':Etat',$Etat);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	
}
	?>