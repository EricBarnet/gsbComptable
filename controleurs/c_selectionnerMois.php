<?php
extract($_POST);
include("vues/v_sommaireC.php");

$action = $_REQUEST['action'];

switch($action){ 

	case 'selectionnerMois':{
		$idVisiteur = $_REQUEST['lstVisiteurs'];
		$lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
			$lesCles = array_keys ($lesMois);
			if($lesCles!=null)
			{
			$moisASelectionner = $lesCles[0];
			include("vues/v_listeMois.php");
			break;
			}



		}
	}