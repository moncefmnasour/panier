<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Commande{
	private $id_commande;
	private $Nomproduit;
	private $Quantite;
	private $size;
	private $prix;
    private $couleur;
   
   
    
   
    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	function __construct($id_commande,$Nomproduit,$Quantite,$size,$couleur,$prix){
		$this->id_commande=$id_commande;
		$this->Nomproduit=$Nomproduit;
		$this->Quantite=$Quantite;
		$this->size=$size;
		$this->couleur=$couleur;
	
		
		
		$this->prix=$prix;
		
	}
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/
	function getId_commande(){
		return $this->id_commande;
	}
	
	
	function getNomproduit(){
		return $this->Nomproduit;
	}
	function getQuantite(){
		return $this->Quantite;
	}
	
	function getsize(){
		return $this->size;
	}
	
	function getprix(){
		return $this->prix;
	}
		function getcouleur(){
		return $this->couleur;
	}

/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setId_commande($id_commande){
		$this->id_commande=$id_commande;
	}
	function setNomproduit($Nomproduit){
		$this->Nomproduit=$Nomproduit;
	}
	function setsize($size){
		$this->size=$size;
	}
	
	function setQuantite($Quantite){
		$this->Quantite=$Quantite;
	}
	function setprix($prix){
		$this->prix=$prix;
	}
	function setcouleur($couleur){
		$this->couleur=$couleur;
	}
	
	
}

?>