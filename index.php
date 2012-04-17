<?php
require_once(dirname(__FILE__).'/inc/prepend.php');

htmlHeader();
?>

        <div id="templatemo_content">
<?php
$pageName=trim($_GET['page']);
if (!in_array($pageName, array_keys($content)))
	$pageName="Accueil";

htmlSidebar($pageName);

echo $content[$pageName];
?>
        </div> <!-- end of content -->
<?php

htmlFooter();
?>
