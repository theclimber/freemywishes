<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<div id="templateo_container">
	
    <?php include("header.php"); ?>
    
    <div id="templatemo_content_wrapper">
        <div id="templatemo_content">
            <div id="templatemo_side_column">
				<div class="header_01">Merci !</div>
					<div class="side_column_content">
						<div class="news_section">
							<div class="news_date">
								<p>&nbsp;</p>
							</div>
						</div>
					</div>
				</div> <!-- end of side column -->
            <div id="templatemo_main_content_column">
              <div class="section_w600">
                <p class="em_text">
					<p> Votre commande a bien &eacute;t&eacute; enregistr&eacute;e, vous recevrez prochainement un email avec un rappel de votre commande ainsi qu un numero de compte. 
					Nous vous remercions vivement pour votre g&eacute;n&eacute;rosit&eacute;.<br\> Lau & Bast.
					<?php SendMail(); ?>
					</p>
					<div class="cleaner"></div>
			  </div>
                
			<div class="margin_bottom_30"></div>
            <div class="cleaner"></div>
            </div> <!-- end of main content column -->            
            
			<div class="cleaner"></div>
        </div> <!-- end of content -->
    </div> <!-- end of content wrapper -->
    
    <div id="templatemo_footer">
        Copyright Â© 2012 - <a href="#">Mariage Lau et bast</a>
    </div> <!-- end of footer -->


	<?php
/******* ENVOIE MAIL *******/
	function SendMail() 
	{
		$pTot=0;
		
		/**** Mail content ****/
		$to = $_POST['email'];
		$titre=$_POST['titre'];
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$subject = "Cadeau(x) Lauriane & Bastien";
		$Mail_LstCado="Chèr(es) $titre $prenom $nom, \r\nNous vous remercions de tout coeur pour votre généreuse intention. Vous trouverez ci-dessous un résumé de votre commande.\r\n\r\n";
		/**********************/
		
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;							// Connect to MySQL
			//$bdd = new PDO('mysql:host=localhost;dbname=mariage', 'root', '', $pdo_options);
			$bdd = new PDO('mysql:host=91.216.107.219;dbname=lauri313808', 'lauri313808', 'SSTVpx3x0OA', $pdo_options);
			
			$reponse = $bdd->query('SELECT * FROM liste_autres');	// Get content of table
							
			// On affiche chaque entrÃ©e une Ã  une
			while ($donnees = $reponse->fetch())
			{
				$id=$donnees['ID'];
				$PhotoLnk=$donnees['PhotoLink'];
				$ItemDsc=$donnees['ItemDesc'];
				$Coms="{$donnees['Com']},$nom";
				$Pric=$donnees['Price'];
				$TotalNum=$donnees['TotalNumber'];
				$Avail=$donnees['Available'];
				
				$c =  $_POST["I$id"];						// Récup Qtité
				if ($c>0)
				{

					$Mail_LstCado.="- $ItemDsc : $c unités à $Pric € chacune \r\n";
					$pTot=($pTot*1)+($c*$Pric);

					/* Update des valeures restantes dans DB SQL*/
					$upAvail=$Avail-$c;

					$bdd->exec("UPDATE liste_autres SET Available='$upAvail', Com='$Coms' WHERE ID = '$id'");
				}
			}
			$reponse->closeCursor(); // Termine le traitement de la requete
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());				// En cas d'erreur precedemment, on affiche un message et on arrete tout
		}
		
		$Mail_LstCado.="\r\n Total de : $pTot €\r\n\r\nNotre numéro de compte est le BE92 7554 8754 8123 . \r\nAu plaisir de vous revoir bientot,\r\n\r\n";
		$Mail_LstCado.="Lauriane et Bastien\r\n14 Av. Edouard Speeckaert, 1200 Bxl\r\nLauEtBast@gmail.com\r\n";


		/* ENVOI MAIL --> User*/


		mail($to,$subject, $Mail_LstCado);
		/* ENVOI MAIL --> Us*/
		$subject="Cadeaux - $nom";
		$coms=$_POST['commentaires'];
		$add=$_POST['adressepostale'];
		$Mail_LstCado.="\r\n Email: \r\n$to\r\n Adresse: \r\n$add\r\n Commentaire : \r\n$coms";
		mail('lauetbast@gmail.com',$subject, $Mail_LstCado);

	}
?>
</div> <!-- end of container --></body>
</html>				