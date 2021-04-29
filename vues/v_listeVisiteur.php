 <div id="contenu">
      <h2>Ma liste de visiteurs</h2>
      <h3>Visiteur à sélectionner : </h3>
      <form action="index.php?uc=selectionnerMois&action=selectionnerMois" method="post">
      <div class="corpsForm">
         
      <p>
	 
        <label for="lstVisiteurs" accesskey="n">Visiteurs : </label>
        <select id="lstVisiteurs" name="lstVisiteurs">
            <?php
			foreach ($lesVisiteurs as $unVisiteur)
			{
			    $idVisiteur= $unVisiteur['id'];
				$nom = $unVisiteur['nom'];
				$prenom =$unVisiteur['prenom'];

				if($Visiteur == $VisiteurASelectionner){
				?>
				<option selected value="<?php echo $idVisiteur ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
				}
				else{ ?>
				<option value="<?php echo $idVisiteur ?>"><?php echo  $nom." ".$prenom ?> </option>
				<?php 
				}
			
			}
           
		   ?>    
            
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
  