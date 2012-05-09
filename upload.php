﻿<?php
$dossier = 'upload/';
$fichier = basename($_FILES['picture']['name']);
$taille_maxi = 10485760;
$taille = filesize($_FILES['picture']['tmp_name']);
$extensions = array('.png', '.jpg', '.jpeg');
$extension = strrchr($_FILES['picture']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions))
{
	$erreur = 'Vous devez uploader un fichier de type png, gif, jpg ou jpeg';
}
if($taille>$taille_maxi)
{
	$erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
	//On formate le nom du fichier ici...
	$fichier = strtr($fichier, 
		'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
		'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
	$fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
	if(move_uploaded_file($_FILES['picture']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
	{
		echo 'Upload effectué avec succès !';
	}
	else //Sinon (la fonction renvoie FALSE).
	{
		echo 'Echec de lupload !';
	}
}
else
{
	echo "Problème durant l'upload";
}
?>
