<?php
$content = array();

$content['Accueil'] = <<<EOD
            <div id="templatemo_main_content_column">
              <div class="section_w600">


                <p class="em_text">

				Bienvenue sur notre site !<br /><br />

				Tout d&rsquo;abord, merci de votre visite.<br /><br />

				Le jour tant attendu approche &agrave; grand pas. Nous sommes ravis de vous
				accueillir sur notre site et tr&egrave;s impatients de vous revoir le 21 avril !

				Votre pr&eacute;sence &agrave; nos c&ocirc;t&eacute;s ce jour l&agrave; sera tr&egrave;s
				sinc&egrave;rement votre plus beau cadeau. Si vous souhaitez n&eacute;anmoins
				nous aider &agrave; am&eacute;nager notre petit foyer, vous trouverez des id&eacute;es
				de cadeaux qui nous feraient vraiment plaisir, qui nous seront tr&egrave;s
				utiles au quotidien et/ou qui d&eacute;coreront notre int&eacute;rieur.<br /><br />

				De tout coeur nous vous en remercions... <br />Et nous nous r&eacute;jouissons de vous retrouver le 21 avril !
				</p>

					<div class="cleaner"></div>
				</div>

                <div class="margin_bottom_30"></div>
                <div class="cleaner"></div>
            </div> <!-- end of main content column -->

            <div class="cleaner"></div>
EOD;
$content["Adresses"] = <<<EOD
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
		<script type="text/javascript" language="JavaScript" src="tpl/checkForm.js"></script>
EOD;

?>
