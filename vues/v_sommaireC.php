    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
    
</h2>
    
      </div>  
        <ul id="menuList">
			<li>
				  Comptable:<br>
				<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
         <br>
           <li class="smenu">
              <a href="index.php?uc=listeVisiteur&action=listeVisiteur" title="Afficher toute la liste des visiteurs">Liste des visiteurs</a>
           </li>
           <li class="smenu">
              <a href="index.php?uc=validationFicheFrais&action=choisirFichesPaiement" title="Validation des fiches de frais">Valider fiches de frais</a>
           </li>
 	         <li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter de la session">Déconnexion</a>
           </li>
         </ul> 
    </div>
    