<?php
require_once("include/fct.inc.php");
require_once("include/class.pdogsb.inc.php");
include("vues/v_entete.php") ;

session_start();
$pdo = PdoGsb::getPdoGsb();
$estConnecte = estConnecte();
if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}

$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
	break;
	}
	case 'gererFrais' :{
		include("controleurs/c_gererFrais.php");
	break;
	}
	case 'etatFrais' :{
		include("controleurs/c_etatFrais.php");
	break; 
	}
	case 'listeVisiteur':{
		include("controleurs/c_listeVisiteur.php");
	break;
	}
	case 'selectionnerMois':{
		include("controleurs/c_selectionnerMois.php");
	break;
	}
	case 'selectionnerFichesFrais':{
		include("controleurs/c_ValiderFrais.php");
	break;
	}
	case 'supprimer':{
		include('controleurs/c_gererFrais.php');
	}
	case 'validationFicheFrais':{
		include('controleurs/c_validationFicheFrais.php');
	}

}
include("vues/v_pied.php") ;
?>

