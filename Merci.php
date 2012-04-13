<?php
	$Mtitre=$_POST['titre'];
	$Mprenom=$_POST['prenom'];
	$Mnom=$_POST['nom'];
	$Maddressepost=$_POST['adressepostale'];
	$Mcom=$_POST['commentaires'];
	
	/* Mail to guest*/
	$to = $_POST['email'];
	$subject = 'Cadeau offert';
	$message = '111De tout coeur nous vous remercions pour';
	
	//=====Création du header de l'e-mail
	$passage_ligne = "\r\n";
	$header = "From: \"Lau et Bast\"<mail_php@laurianeetbastien.be>".$passage_ligne;
	$header .= "Reply-to: \"Lau et Bast\" <mail_php@laurianeetbastien.be>".$passage_ligne;
	$header .= "MIME-Version: 1.0".$passage_ligne;
	$header .= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
	//==========

	$message .=$passage_ligne;
	//mail('bast.gerard@gmail.com', 'Le sujet', 'Exemple d\'envoi d\'email');
	if(mail($to,'Le sujet', $message, $headers))
	{
		echo 'Le message a bien &eacutet&eacute envoy&eacute';
	}
	else
	{
		 echo 'Le message n\'a pu être envoy&eacute';
	}
?>