<?php

function htmlHeader() {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="tpl/templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="templateo_container">

<div id="templatemo_top_panel">
	<div id="site_title">
		<a href="index.php">&nbsp;
		<span>&nbsp;</span>
		</a>
	</div>
  <div class="cleaner"></div>
</div> <!-- end of top panel -->

<div id="templatemo_menu_banner_panel">
	<div id="templatemo_menu_wrapper">
		<div id="templatemo_menu">
			<ul>
				  <li><a href="index.php">Accueil</a></li>
				  <li><a href="Nous.php">Nous ...</a></li>
				  <li><a href="ListeMariage.php">Liste de Mariage</a></li>
				  <li class="index_.php"><a href="#">Nous Contacter</a></li>
			</ul>
		</div> <!-- end of menu -->
	</div> <!-- end of menu wrapper -->

	<div id="templatemo_banner">

	</div> <!-- end of banner -->

	<div class="cleaner">&nbsp;</div>
</div> <!-- end of menu & banner panel -->

    <div id="templatemo_content_wrapper">
<?php
}

function htmlSidebar($pageName) {
?>
            <div id="templatemo_side_column">
				<div class="header_01"><?php echo $pageName; ?></div>
                <div class="side_column_content">
                	<div class="news_section">
                        <div class="news_date">
                          <p>&nbsp;</p>
						</div>
					</div>
                </div>
            </div> <!-- end of side column -->
<?php
}

function htmlFooter() {
?>
    </div> <!-- end of content wrapper -->

    <div id="templatemo_footer">
        Copyright &copy; 2012 - <a href="#">Mariage Lau et bast</a>
    </div> <!-- end of footer -->
</div> <!-- end of container -->
</body>
</html>
<?php
}

?>
