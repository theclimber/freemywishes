<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
    </head>
<body>
<div id="templateo_container">
	
    <?php include("header_.php"); ?>
    
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
					<p> Votre adresse a bien &eacute;t&eacute; enregistr&eacute;e, Merci et &agrave; bientot :)<br /><br /> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<b>Lau & Bast.</b>
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
		/**** Mail content ****/
		$to = $_POST['email'];
		$titre=$_POST['titre'];
		$prenom=$_POST['prenom'];
		$nom=$_POST['nom'];
		$PrenomNom="$prenom $nom";
		$adressepost=$_POST['adressepost'];
		$numero=$_POST['numero'];
		$adressepostNumero="$adressepost $numero";
		$codepost=$_POST['codepost'];
		$commune=$_POST['commune'];
		$codepostCommune="$codepost $commune";
		$commentaire=$_POST['commentaire'];
		$subject = "Adresse $nom";
		$Mail_Content="$titre $PrenomNom \r\n- $to \r\n- $numero $adressepost \r\n ($codepost $commune)\r\n- Commentaire : $commentaire";
		/**********************/
		
		try
		{
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;	// Connect to MySQL
			//$bdd = new PDO('mysql:host=localhost;dbname=mariage', 'root', '', $pdo_options);
			$bdd = new PDO('mysql:host=91.216.107.219;dbname=lauri313808', 'lauri313808', 'SSTVpx3x0OA', $pdo_options);
			
			// On ajoute une entrée dans la table
			$req = $bdd->prepare('INSERT INTO liste_adresse(Titre, PrenomNom, Email, Adresse, CodePost, Comz) VALUES(:Titre, :PrenomNom, :Email, :Adresse, :CodePost, :Comz)');
			$req->execute(array(
				'Titre' => $titre,
				'PrenomNom' => $PrenomNom,
				'Email' => $to,
				'Adresse' => $adressepostNumero,
				'CodePost' => $codepostCommune,
				'Comz' => $commentaire
				));
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());				// En cas d'erreur precedemment, on affiche un message et on arrete tout
		}
		/* ENVOI MAIL --> Us*/
		mail('lauetbast@gmail.com',$subject, $Mail_Content);
	}
?>
</div> <!-- end of container --></body>
</html>				