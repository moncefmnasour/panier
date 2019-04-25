<?PHP
include "../config.php";
class CommandeC {
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

	function affichercommande(){
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function ajouterCommande($Commande){
		$sql="insert into commande (id_commande,Nomproduit,Quantite,size,prix,couleur) values (:id_commande, :Nomproduit,:Quantite,:size,:prix,:couleur)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);//prépare la requete sql à etre exécuté par
		
        $id_commande=$Commande->getId_commande();
        $Nomproduit=$Commande->getNomproduit();
        $Quantite=$Commande->getQuantite();
        $size=$Commande->getsize();
        $prix=$Commande->getprix();
        $couleur=$Commande->getcouleur();
        
  		$req->bindValue(':id_commande',$id_commande);
		$req->bindValue(':Nomproduit',$Nomproduit);
		$req->bindValue(':Quantite',$Quantite);
		$req->bindValue(':size',$size);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':couleur',$couleur);
		
         
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
	function recupererCommande($Commande){
		$sql="SELECT * from commande where id_commande=:id_commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function supprimerCommande($id_commande){
		$sql="DELETE FROM commande where id_commande= :id_commande";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_commande',$id_commande);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


	
}
	?>