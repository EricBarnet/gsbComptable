<?php
include("vues/v_sommaireC.php");
$idComptable = $_SESSION['idComptable'];
switch($action){

	case 'choisirVisteur':{
	$lesVisiteurs=$pdo->getLesVisiteurs($idComptable);
	$lesCles = array-keys($lesVisiteurs);
	$visiteurASelctionner = $lesCles[0];

	include("vues/v_listeVisiteur.php");
	
	break;
	
	
	}




}