<?php
	$Base="info201a";
	$Serveur="info.univ-lemans.fr";
  	$Utilisateur="info201a_user";
  	$MotDePasse="com72";
  	
  	//connexion au serveur où se trouve la base de données
  	$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);
  	//sélection de la base de données au niveau du serveur
  	$retour=mysql_select_db($Base,$LienBase);
  	//affichage d’un message d’erreur si la connexion a été refusée
  	
  	if (!$retour){
  	  echo "Connexion à la base impossible";
  	}
?>