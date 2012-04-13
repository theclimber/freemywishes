<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="../highslide/highslide.css" />
        <script type="text/javascript" src="../highslide/highslide-with-gallery.js"></script>
    </head>
<body>
<div id="templateo_container">
	
    <?php include("header.php"); ?>
    
    <div id="templatemo_content_wrapper">
    	
        <div id="templatemo_content">
        	
            <div id="templatemo_side_column">
          <div class="header_01">Liste de Mariage</div>
                
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
					<form method="post" action="MerciOKAutre.php" onSubmit="return verif_Commande();">
					<caption>Liste de Mariage</caption>
					
					<tr>
						<th>Photo</th><th>Article</th><th>Prix</th><th>Quantit&eacute; restante</th><th>Mon choix</th>
					</tr>
				
					<?php
						try
						{
							$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;							// Connect to MySQL
							//$bdd = new PDO('mysql:host=localhost;dbname=mariage', 'root', '', $pdo_options);
							$bdd = new PDO('mysql:host=91.216.107.219;dbname=lauri313808', 'lauri313808', 'SSTVpx3x0OA', $pdo_options);

							$reponse = $bdd->query('SELECT * FROM liste_autres');										// Get content of table
							
							// On affiche chaque entrÃ©e une Ã  une
							while ($donnees = $reponse->fetch())
							{
								$id=$donnees['ID'];
								$PhotoLnk=$donnees['PhotoLink'];
								$ItemDsc[$id]=$donnees['ItemDesc'];
								$Coms=$donnees['Com'];
								$Pric[$id]=$donnees['Price'];
								$TotalNum=$donnees['TotalNumber'];
								$Avail[$id]=$donnees['Available'];
								if ($Avail[$id]<0)
								{
									$Avail[$id]=0;
								}
								$LeftStr="$Avail[$id]/$TotalNum";
							?>
								<tr height="60px">
									<td align="center">
										<strong>
											<a class="highslide" onclick='return hs.expand(this, {captionText: "<?php echo $ItemDsc[$id] ?>"})' href="images/Autre/<?php echo $PhotoLnk ?>" target="_blank" title="<?php echo $ItemDsc[$id] ?>">
												<img src="images/Autre/<?php echo $PhotoLnk ?>" width="60">
											</a>
										</strong>
									</td>
									<td align="center">
										<strong><?php echo $ItemDsc[$id] ?></strong>
									</td>
									<td align="center">
										<strong><?php echo $Pric[$id] ?>&euro;</strong>
									</td>
									<td align="center">
										<strong><?php echo $LeftStr ?></strong>
									</td>
									<?php /**** Menu Deroulant ****/?>
									<td align="center">
										<select name=<?php echo "I$id"?> id=<?php echo "I$id" ?> onChange="usum()">
											<?php
											$nombre_de_lignes = 0;
											if ($Avail[$id]>0)
											{
												for ($nombre_de_lignes = 0; $nombre_de_lignes <= $Avail[$id]; $nombre_de_lignes++)
												{
													echo '<option value="'.$nombre_de_lignes.'">'.$nombre_de_lignes."</option>";
												}
											}
											else
											{
												echo '<option value="'.$nombre_de_lignes.'">'.$nombre_de_lignes."</option>";
											}
											?>
										</select>
									</td>
								</tr>
							<?php
							}
							$reponse->closeCursor(); // Termine le traitement de la requete
						}
						catch(Exception $e)
						{
							die('Erreur : '.$e->getMessage());				// En cas d'erreur precedemment, on affiche un message et on arrÃªte tout
						}
					?>
					<tr> 
						<td colspan=4 align="right">Total: </td> 
						<td align="center"><input type=text disabled="disabled" name="Cadeaux_Montant_Total" id="Cadeaux_Montant_Total"  value="0" style="color:navy; font-weight:bold; align:center" size=3> &euro;</td>
					</tr>
					
					<!-- FORMULAIRE --> 
					<tr><td>Titre</td><td><input type=text name="titre" value="Monsieur et Madame"></td></tr>
					<tr><td>Pr&eacute;nom</td><td><input type=text name="prenom"></td></tr>
					<tr><td>Nom *</td><td><input type=text name="nom"  id="nom"></td></tr>
					<tr><td>E-mail *</td><td><input type=text name="email" id="email"></td></tr>
					<tr><td>Adresse postale</td><td><input type=text name="adressepostale"></td></tr>
					<tr><td>Commentaires</td><td><textarea rows="3" name="commentaires">Vive les mari&eacute;s!</textarea></td></tr>
					<tr>
						<!-- Submit --> 
						<td colspan=6 align="right" style="border-color:rgb(250,250,230);"><input type="submit" value="Confirmer"></td>
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
	
	<!-- SCRIPT PARAMETRISATION HIGHSLIDE -->
	<script type="text/javascript">
	        hs.graphicsDir = '../highslide/graphics/';
	        hs.align = 'center';
	        hs.transitions = ['expand', 'crossfade'];
	        hs.wrapperClassName = 'dark borderless floating-caption';
	        hs.fadeInOut = true;
	        hs.dimmingOpacity = .75;
	</script>
	<!-- SCRIPT SOMME MONTANT TOTAL + VERIF SI QUANTITE DEPASSEE OU NON PAR ARTICLE -->
	<script type="text/javascript" language="JavaScript">
	function usum() 
	{
		var sum = 0;
		var c = 0;
	<?php
		for($i=1; $i<=$id; $i++)
		{	
		?>
				c=0;
				c = document.getElementById("I<?php echo $i ?>").value;
				c=c*<?php echo $Pric[$i] ?>;
				sum=sum*1+c*1;
		<?php
		}
		?>
		document.getElementById("Cadeaux_Montant_Total").value = sum; 
	}
	</script>

	<!-- SCRIPT VERIFICATION CHAMP REMPLIS -->
	<script type="text/javascript" language="JavaScript">
	function verif_Commande() 
	{
		var boolMail = document.getElementById("email").value || 0;
		var boolNom = document.getElementById("nom").value || 0;
		if(document.getElementById("Cadeaux_Montant_Total").value == 0) {
			alert("Au moins un des champs doit \352tre non nul afin d'envoyer le formulaire");
			return false;
	    }else if (!boolNom)
		{
			alert("Merci de remplir le champ 'Nom' avant d'envoyer le formulaire");
			return false;
		}else if (!boolMail)
		{
			alert("Merci de remplir le champ 'E-mail' avant d'envoyer le formulaire");
			return false;
		}
	}
	</script>
	<div id="templatemo_footer">
        Copyright &copy; 2012 - <a href="#">Mariage Lau et bast</a>
    </div> <!-- end of footer -->
</div> <!-- end of container --></body>
</html>				