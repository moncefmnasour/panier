<?PHP
/*----------------------------------------------------------=Class=--------------------------------------------------------------*/
class Whishlist{
	private $Etat;
	private $Referenceproduit;
   
    
   
    
/*--------------------------------------------------------=Constructeur=--------------------------------------------------------------*/
	function __construct($Referenceproduit,$Etat){
		$this->Referenceproduit=$Referenceproduit;
		$this->Etat=$Etat;
		
		
	}
	
	
	
	/*----------------------------------------------------------=Getters=--------------------------------------------------------------*/
	function getReferenceproduit(){
		return $this->Referenceproduit;
	}
	
	
	function getEtat(){
		return $this->Etat;
	}
	

/*----------------------------------------------------------=Setters=--------------------------------------------------------------*/

	function setId_commande($Referenceproduit){
		$this->Referenceproduit=$Referenceproduit;
	}
	function setEtat($Etat){
		$this->Etat=$Etat;
	}
	
	
}

?>