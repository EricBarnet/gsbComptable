<?php
require(dirname(__FILE__) . '/../fpdf/fpdf.php');

    ob_start();

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->Image(dirname(__FILE__) . '/../images/logo.jpg',10,10, 64, 48);
    $pdf->Ln(30);
    $pdf->SetFont('Arial','B',18);
    $pdf->Cell(40,10,'FICHE REMBOURSEMENT DES FRAIS DU VISITEUR');

    $header1 = array('Frais Forfaitaires','Quantite','Montant unitaire','Total');
    $header2 = array('Date','Libelle','Montant');
    
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(30);
    $pdf->Cell(40,10,'Visiteur :' .$visiteur['nom']." ".$visiteur['prenom']);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(40,10,'Mois : ' . $leMois);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',15);

    $pdf->Cell(60,7,$header1[0],1);
    $pdf->Cell(40,7,$header1[1],1);
    $pdf->Cell(40,7,$header1[2],1);
    $pdf->Cell(40,7,$header1[3],1);
    $pdf->Ln();
    
    $totalFraisForfait = 0;
    foreach($fraisForfait as $row)
    {
            $pdf->Cell(60,6, utf8_decode($row['libelle']),1);
            $pdf->Cell(40,6,$row['quantite'],1);
            $pdf->Cell(40,6,$row['montant'],1);
            $pdf->Cell(40,6,$row['montant']*$row['quantite'],1);
            $totalFraisForfait += $row['montant']*$row['quantite'] ;
        $pdf->Ln();
    }
    
    $pdf->SetFont('Arial','B',15);
    $pdf->Ln(20);
    $pdf->Cell(40,10,'Frais divers: ');
    $pdf->Ln(10);
    $pdf->SetFont('Arial','',15);
    $pdf->Cell(30,7,$header2[0],1);
    $pdf->Cell(100,7,$header2[1],1);
    $pdf->Cell(30,7,$header2[2],1);
    $pdf->Ln();
      
    $totalFraisHorsForfait =0;  
      
      foreach($fraisHorsForfait as $row)
    {
            $pdf->Cell(30,6,$row['date'],1);
            $pdf->Cell(100,6,utf8_decode($row['libelle']),1);
            $pdf->Cell(30,6,$row['montant'],1);
            $totalFraisHorsForfait += $row['montant'] ;
        $pdf->Ln();
    }
     
    $total = $totalFraisForfait+$totalFraisHorsForfait ;
    $refuse = $totalFraisForfait+$totalFraisHorsForfait - $montantValide ;
    
    $pdf->Cell(60,10,'aaaamm:' ." ".$leMois);
    $pdf->Cell(60,10,'Total montant: '.$total);
    $pdf->Ln(10);
    $pdf->Cell(60,10,'Montant refuse: '.$refuse);
    $pdf->Ln(10); 
    $pdf->Cell(60,10,'Montant valide: '.$montantValide);
    $pdf->Ln(10); 
    
    $today = date(" Y-M-j");
    $today = strftime('%d %B %Y');
    $pdf->Cell(60,10,'Fiche traitee a Cachan, le: ' . $today);
    $pdf->Ln(10);  
    $pdf->Cell(60,10,"L'agent comptable, le meilleur");
    $pdf->Ln(10);
    $pdf->Output();
    ob_end_flush();
  
    
    
    
 
    
    
?>