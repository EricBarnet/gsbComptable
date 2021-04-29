<?php
include("vues/v_sommaireC.php");

$idComptable = $_SESSION['idComptable'];

$action = $_REQUEST['action'];

switch($action){
	case 'listeVisiteur':{
		$lesVisiteurs = $pdo->getLesVisiteurs($idComptable);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		$lesCles = array_keys( $lesVisiteurs );
		$VisiteurASelectionner = $lesCles[0];
		include("vues/v_listeVisiteur.php");
		break;
		}
	
	}
?>