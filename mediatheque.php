<?php 
require_once('./fonctions/template.fonctions.php');
require_once('./fonctions/parametre.fonction.php');

if (isset($_POST['action'])) {
    $action=$_POST['action'];
    //$param=getParam();
}else{
    $action="";
}

try{
    $dbh=connection_serveur();

    switch ($action) {
        case 'Rechercher':
        ajouter($dbh);
        break;                  
    }

    //$tab=fetch_all_data($dbh);

require_once("./template/index.template.php");

}catch (Exception $ex){
  die("ERREUR FATALE : ". $ex->getMessage().'<form><input type="button" value="Retour" onclick="history.go(-1)"></form>');
}
?>