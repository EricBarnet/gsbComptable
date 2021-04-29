<?php






require(dirname(__FILE__) . '/../fpdf/fpdf.php');
    ob_start();
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->Image(dirname(__FILE__) . '/../images/logo.jpg',10,10, 64, 48);
    $pdf->Ln(30);
    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(60,20,'Fiche de Frais  ');

    
    $header1 = array('Frais Forfaitaires','Quantite','Montant unitaire','Total');
   $header2 = array('Date','Libell�','Montant');
    
    
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(30);
    $pdf->Cell(40,10,'Visiteur :' .$visiteur['nom']." ".$visiteur['prenom']);
    $pdf->Ln(10);
    $pdf->Cell(40,10,'Mois :' .$mois);
	$pdf->Ln(10);
	$pdf->SetFont('Arial','',15);
  
     $pdf->Cell(60,7,$header1[0],1);
    $pdf->Cell(40,7,$header1[1],1);
     $pdf->Cell(40,7,$header1[2],1);
      $pdf->Cell(40,7,$header1[3],1);
    $pdf->Ln();
	
	$totalFraisForfait = 0;
    foreach($lesFraisForfait as $row)
    {
        
            $pdf->Cell(60,6,  utf8_decode($row['libelle']),1);
            $pdf->Cell(40,6,$row['quantite'],1);
            $pdf->Cell(40,6,$row['montant'],1);
            $pdf->Cell(40,6,$row['montant']*$row['quantite'],1);
            
            $totalFraisForfait += $row['montant']*$row['quantite'] ;
        
        $pdf->Ln();
    }
    
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(20);
    $pdf->Cell(40,10,'Autres frais ');
    $pdf->Ln(20);
     $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,7,$header2[0],1);
    $pdf->Cell(100,7,$header2[1],1);
     $pdf->Cell(30,7,$header2[2],1);
      $pdf->Ln();
      
     $totalFraisHorsForfait =0;  
      foreach($lesFraisHorsForfait as $row)
    {
            $pdf->Cell(30,6,$row['date'],1);
            $pdf->Cell(100,6,utf8_decode($row['libelle']),1);
            $pdf->Cell(30,6,$row['montant'],1);
      $totalFraisHorsForfait += $row['montant'] ;       
        $pdf->Ln();
    }
    $total = $totalFraisForfait+$totalFraisHorsForfait ;
    $refus� = $totalFraisForfait+$totalFraisHorsForfait - $montantValide ;
    $pdf->Cell(60,10,'Total :' ." ".$mois);
     $pdf->Cell(60,10,$total);
    $pdf->Ln(10);
   $pdf->Cell(60,10,'Montant Refuse :' ." ");
     $pdf->Cell(60,10,$refus�);
    $pdf->Ln(10); 
    
    
    $pdf->Cell(60,10,'Montant Valide :' ." ");
     $pdf->Cell(60,10,$montantValide);
     
     
    $pdf->Ln(10); 
    
    $today = date(" Y-M-j");
    
    $today = strftime('%d %B %Y'); 
    $pdf->Cell(60,10,'Fait � Paris le : ' . $today);
    $pdf->Ln(10);  
    
     
    
    
    $pdf->AddPage();
  //  $pdf->Cell(40,10,'Vol num�ro : ' . $fiche['numero']);
    $pdf->Ln(10);
       // Enfin, le document est termin� et envoy� au navigateur gr�ce � Output().
	   
    $pdf->Output();
    ob_end_flush();
    
    
    
 
    
    
?>