<center>
<table class="table table-striped">
        <caption>Liste des fiches - mise en paiement</caption>
             <thead>
                <tr>
                        <th class="visiteur">Visiteur</th>
                        <th class="mois">Mois</th>
                        <th class="montant">Montant Valide</th>
                        <th class="date">Date modification</th>
                        <th class="etat">Etat</th>
                        <th class="action">Valider</th>
                        <th class="action">Telecharger</th>
                </tr>
             </thead>
</center>
             
      <form method="POST"  action="index.php?uc=validationFicheFrais&action=misePaiement">
      <div class="corpsForm">
          
          <fieldset>
                 
          
    <?php    
    
   
	    foreach( $lesFiches as $uneFiche) 
		{
			$visiteur = $uneFiche['idVisiteur'] ;
                        $mois = $uneFiche['mois'] ;
                        $nbJustificatifs = $uneFiche['nbJustificatifs'];
			$montantValide = $uneFiche['montantValide'];
			$dateModif = $uneFiche['dateModif'];
                        $idEtat = $uneFiche['idEtat'];
	?>
        <tbody>		
            <tr>
                <td> <?php echo $visiteur ?></td>
                <td><?php echo $mois ?></td>
                <td><?php echo $montantValide ?></td>
                 <td><?php echo $dateModif ?></td>
                <td><?php echo $idEtat ?></td>
           <td> <input type="checkbox" name="payer[]" value=<?php echo $visiteur.";".$mois.";".$idEtat ?> />
<td><a href = index.php?uc=validationFicheFrais&action=creationPdf&visiteur=<?php echo $visiteur ?>&mois=<?php echo $mois ?>> <img src = 'images/pdf_icon.gif' border = '0'></a></td>

                
             </tr>
        </tbody>
	<?php		 
          
          }
	?>
       </fieldset>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
      
      </p> 
      </div>  
             </form>
                                          
    </table>

