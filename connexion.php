<?php
  class config {
    private static $instance = NULL;

    public static function getConnexion() {
      if (!isset(self::$instance)) {
    try{
        self::$instance = new PDO('mysql:host=localhost;dbname=products'/*l'adreese du pc oÃ¹ mysql est installÃ© gÃ©nÃ©ralment localhost+ le nom de la database */, 'root', '');//PDO est une classe permettant d'accÃ©der Ã  n'importe quel type de DB
    self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
            die('Erreur: '.$e->getMessage());
    }
      }
      return self::$instance;
    }
  }
?>