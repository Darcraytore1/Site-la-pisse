<?php 
if ($_SERVER["QUERY_STRING"] === "fr") {
	require "contenu/contenu_fr.php"; 
} else {
	require "contenu/contenu_eng.php";
}
?>

<!DOCTYPE html>
<html>

<head>
	<title> <?php echo basename($_SERVER["SCRIPT_NAME"], ".php"); ?> </title>
	<link rel="stylesheet" type="text/css" href="../CSS.css">
	<meta charset="utf-8">
</head>
<body>
	<header>
		<div id = "entete">

			<p class="flotte">
				<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?fr">
					<img src="../image/french_flag.png">
				</a>
				<a href="<?php echo $_SERVER["PHP_SELF"]; ?>?eng">
					<img src="../image/english_flag.png">
				</a>
			</p>

			<p class="titre">
				<FONT face="Comic Sans ms">
					<?php echo Titre_page; ?> 
				</FONT>
			</p>



			<br/>
			<br/>

			<div id="boutons">
				<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/index.php") { ?>active<?php } ?>">
					<a href="index.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Accueil; ?> </a>
				</div>
				<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/Rallye.php") { ?>active<?php } ?>">
					<a href="Rallye.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Rallye; ?> </a>
				</div>
				<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/Trocadero.php") { ?>active<?php } ?>">
					<a href="Trocadero.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Trocadero; ?> </a>	
				</div>
				<div class="bouton <?php if ($_SERVER["SCRIPT_NAME"] === "/Contact.php") { ?>active<?php } ?>">
					<a href="Contact.php?<?php echo $_SERVER["QUERY_STRING"] ?>"> <?php echo Contact; ?> </a>
				</div>
			</div>
		</div>
	</header>