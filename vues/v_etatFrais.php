﻿
<h3>Fiche de frais du mois <?php echo $numMois."-".$numAnnee?> : 
    </h3>
    <div class="encadre">
    <p>
        Etat : <?php echo $libEtat?> depuis le <?php echo $dateModif?> <br> Montant validé : <?php echo $montantValide?>
              
                     
    </p>
  	<table class="listeLegere">
  	   <caption>Eléments forfaitisés </caption>
        <tr>
         <?php
         foreach ( $lesFraisForfait as $unFraisForfait ) 
		 {
			$libelle = $unFraisForfait['libelle'];
		?>	
			<th> <?php echo $libelle?></th>
		 <?php
        }
		?>
		</tr>
        <tr>
        <?php
          foreach (  $lesFraisForfait as $unFraisForfait  ) 
		  {
				$quantite = $unFraisForfait['quantite'];
		?>
                <td class="qteForfait"><?php echo $quantite?> </td>
		 <?php
          }
		?>
		</tr>
    </table>
  	<table class="listeLegere">
  	   <caption>Descriptif des éléments hors forfait -<?php echo $nbJustificatifs ?> justificatifs reçus -
       </caption>
             <tr>
                <th class="date">Date</th>
                <th class="libelle">Libellé</th>
                <th class='montant'>Montant</th>
                <th class="supprimer">Supprimer</th>
             </tr>
        <?php      
          foreach ( $lesFraisHorsForfait as $unFraisHorsForfait ) 
		  {
			$date = $unFraisHorsForfait['date'];
			$libelle = $unFraisHorsForfait['libelle'];
      $montant = $unFraisHorsForfait['montant'];
      $id = $unFraisHorsForfait['id'];
		?>
             <tr>
                <td><?php echo $date ?></td>
                <td><?php echo $libelle ?></td>
                <td><?php echo $montant ?></td>
                <td><a href="index.php?uc=supprimer&action=supprimerFrais&idFrais=<?php echo $id ?>&idVisiteur=<?php echo $idVisiteur ?>&mois=<?php echo $leMois ?>"onclick="return confirm('Voulez-vous vraiment supprimer ce frais?');">Supprimer</a></td>
             </tr>
        <?php   
          }
		?>
    </table>
    <center><a href="index.php?uc=validerFrais&action=validerFicheFrais&idVisiteur=<?php echo $idVisiteur ?>&mois=<?php echo $leMois ?>"onclick="return confirm('Voulez-vous vraiment valider cette fiche ?');">VALIDER FICHE DE FRAIS</a></center>
  </div>
  </div>
 













