	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<title> Ludothèque - Création de compte </title>
	</head>

<body>
			<div class="titre">
			<a href="index.html">
				<h1> Super ludothèque <span>Location de Jeux</span></h1>
			</a>
		</div>
		<div class="navbar">
			<ul class="onglet">
				<li><a href="stock.html"><p>Jeux en stock</p></a> </li>
				<li><a href="liste.html"><p>Liste des jeux</p></a></li>
				<li><a href="login.html"><p>Se connecter</p></a></li>
				<li><a href="about.html"><p>About</p></a></li>
			</ul>
		</div>
		<div class="corps">
	<p>
	<?php
	if(isset($_POST["envoyer"]))
	{
if(!empty($_POST["nom"])&&!empty($_POST["prenom"])&&!empty($_POST["age"])&&!empty($_POST["mail"])&&!empty($_POST["login"])&&!empty($_POST["password"]))
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
				$Name=$_POST["nom"];
				$FName=$_POST["prenom"];
				$Mail=$_POST["mail"];
				$Age=$_POST["age"];
				$Requete="INSERT INTO FC_grp1_Users (nom,prenom,mail,age,login,password) VALUES ($Name,$FName,$Mail,$Age,$User,$Pwd);";
				mysql_query($Requete);	
				}
		} else {
			echo "Tous les champs ne sont pas remplis!";
		}
	}
	?>
	</p>
	</div>
</body>
