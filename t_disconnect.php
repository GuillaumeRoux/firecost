<?php
	session_start();
	include("disconnect.php");
	$_SESSION["pseudo"]="youpi";
	disconnect();
	if(isset($_SESSION["pseudo"]))
	{
		echo 'la variable n\'a pas �t� supprim�e et est �gale �'.$_SESSION["pseudo"];
	}
	else
	{
		echo 'Tout marche correctement, bravo !';
	}
?>