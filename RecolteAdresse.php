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
				<div class="header_01">Adresse</div>
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
				<table border="1" style="width:100%;">
					<form method="post" action="MerciAdresse.php" onSubmit="return verif_ChampsFormulaire();">
					<caption>Adresse postale</caption>
					<tr>
						<th>Formulaire</th><th></th>
					</tr>
					<!-- FORMULAIRE --> 
					<tr><td>Titre (Mlle,Mme,Mr,...)</td><td><input type=text name="titre" size="30"></td></tr>
					<tr><td>Pr&eacute;nom *</td><td><input type=text name="prenom" id="prenom" size="30"></td></tr>
					<tr><td>Nom *</td><td><input type=text name="nom"  id="nom" size="30"></td></tr>
					<tr><td>E-mail</td><td><input type=text name="email" id="email" size="30"></td></tr>
					<tr><td>Rue/Avenue*  :</td><td><input type=text name="adressepost" id="adressepost" size="30"> N&deg;<input type=text name="numero" id="numero" size="2"></td></tr>
					<tr><td>Code postal* :</td><td><input type=text name="codepost" id="codepost" size="2"> Ville :<input type=text name="commune" id="commune" size="27"></td></tr>
					<tr><td>Commentaire *</td><td><textarea rows="2" cols="33" name="commentaire" id="commentaire">Vive les mari&eacute;s!</textarea></td></tr>
					<tr><td></td><td></td></tr>
					<tr><td></td><td><SMALL>* Champ obligatoire</SMALL></td></tr>
					<tr>
						<!-- Submit --> 
						<td colspan=6 align="right" style="border-color:rgb(250,250,230);"><input type="submit" value="Envoyer"></td>
					</tr>
					</form>
				</table></p>
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

	<!-- SCRIPT VERIFICATION MONTANT TOTAL COMMANDE -->
	<script type="text/javascript" language="JavaScript">
	function verif_ChampsFormulaire() 
	{
		var boolPrenom = document.getElementById("prenom").value || 0;
		var boolNom = document.getElementById("nom").value || 0;
		var boolAdresse = document.getElementById("adressepost").value || 0;
		var boolNum =  document.getElementById("numero").value || 0;
		var boolCode = document.getElementById("codepost").value || 0;
		var boolCommune = document.getElementById("commune").value || 0;
		var boolComz = document.getElementById("commentaire").value || 0;
		
		if (!boolPrenom)
		{
			alert("Merci de remplir le champ 'Prenom' avant d'envoyer le formulaire");
			return false;
		}
		else if (!boolNom)
		{
			alert("Merci de remplir le champ 'Nom' avant d'envoyer le formulaire");
			return false;
		}else if (!boolAdresse)
		{
			alert("Merci de remplir le champ 'Rue/Avenue' avant d'envoyer le formulaire");
			return false;
		}else if (!boolNum)
		{
			alert("Merci de remplir le champ 'Numero' avant d'envoyer le formulaire");
			return false;
		}else if (!boolCode)
		{
			alert("Merci de remplir le champ 'Code Postale' avant d'envoyer le formulaire");
			return false;
		}else if (!boolCommune)
		{
			alert("Merci de remplir le champ 'Commune' avant d'envoyer le formulaire");
			return false;
		}else if (!boolComz)
		{
			alert("Merci de remplir le champ 'Commentaire' avant d'envoyer le formulaire");
			return false;
		}
	}
	</script>
</div> <!-- end of container --></body>
</html>				