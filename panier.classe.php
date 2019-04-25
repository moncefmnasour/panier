

<?php
include "connexion.php";
class panier{
	private $DB;



	public function __construct($DB){
		if(!isset($_SESSION)){
			session_start();
		}
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier'] = array();
		}
		$this->DB=$DB;

	}
	public function count(){
		return array_sum($_SESSION['panier']);
	}
	function rechercherCommande($recherche){
		$sql="SELECT * from products where id like '%$recherche%' or name like '%$recherche%' or nomClient like '%$recherche%'or price like '%$recherche%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	/*public function rechercher($prix,$db){
		$ids = array_keys($_SESSION['panier']);
  $sql="SELECT * FROM products WHERE pricz=".$name;
  $req=$this->DB->query('SELECT id,price FROM products WHERE id IN('.implode(', ',$ids).')');
//$req->execute($data);
  return $req->fetchALL();
}*/
	public function total(){
		$total = 0;
		$ids = array_keys($_SESSION['panier']);
		if(empty($ids)){
			$products= array();

		}else{
			$products=$this->DB->query('SELECT id,price FROM products WHERE id IN('.implode(', ',$ids).')');
		}
		foreach ($products as $product) {
			$total += $product->price * $_SESSION['panier'][$product->id];
			# code...
		}
		return $total;
	}
	public function add($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]++;
		}
		else{
		$_SESSION['panier'][$product_id] = 1;
	}
	}
	public function del($product_id){
		if(isset($_SESSION['panier'][$product_id])){
			$_SESSION['panier'][$product_id]--;
			if($_SESSION['panier'][$product_id]==0)
			{
				unset($_SESSION['panier'][$product_id]);
			}
		}
		else{
			unset($_SESSION['panier'][$product_id]);
		}
		
	}
}
