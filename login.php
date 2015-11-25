<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<title> Ludothèque - Accueil </title>
	</head>

<body>
	<p>
	<?php
	if(isset($_POST["envoyer"]))
	{
		if(!empty($_POST["login"])&&!empty($_POST["password"]))
		{
			$Base="info201a";
			$Serveur="info.univ-lemans.fr";
			$Utilisateur="info201a_user";
			$MotDePasse="com72";
				
			$LienBase=mysql_connect($Serveur,$Utilisateur,$MotDePasse);
			$retour=mysql_select_db($Base,$LienBase);
			
			if (!$retour) {

				echo "Connexion à la base impossible";

			} else {
				$User=$_POST["login"];
				$Pwd=$_POST["password"];
				$Requete="SELECT prenom FROM FC_grp1_Users WHERE login=$User;";
				$prenom=mysql_query($Requete);
				while ($row = mysql_fetch_array($prenom, MYSQL_NUM)) {
   					printf("Bonjour, %s!", $row[0]);
				}
			}
		} else {
			echo "Tous les champs ne sont pas remplis!";
		}
	}
	?>
	</p>
</body>
