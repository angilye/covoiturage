<?xml version="1.0" encoding="UTF-8-BOM" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
  <head>
    <title>Nouvelle voiture</title>
	<!-- incorporer la feuille de style-->  
	<link href="Monstyle.css" rel="stylesheet" type="text/css">
	</head>
   <body>
		<!-- Contenu de la page respectant la syntaxe XML. -->
		<h1 align="center">Nouvelle voiture</h1>
		<BR>
		<BR>
		<BR>
		<?PHP
		// obtenir les éléments postés
		$marque=utf8_decode($_POST['marque']);
		$modele=utf8_decode($_POST['modele']);
		$place_max=utf8_decode($_POST['place_max']);
		$puissance=utf8_decode($_POST['puissance']);
		$couleur=utf8_decode($_POST['couleur']);
		$type=utf8_decode($_POST['type']);
		
		/* connexion au SGBD et envoie de la requête d'insertion de la voiture */
		$requete = "INSERT INTO voiture(marque,modele,place_max,puissance,couleur,type)
					VALUES ('$marque','$modele','$place_max','$puissance','$couleur','$type')";
					
		/* connexion au SGBD MySql en précisant le serveur, l'utilisateur, le MdP et la base de données, 
		 si ok la connexion sera accessible à travers $link*/
		// préparation des informations de connexion	
			$Nom_Serveur = 'moh-gaming.fr';
			$Nom_utilisateur = 'nekohana';
			$Mdp_utilisateur ='azerty09';
			$Nom_BD_Travail  = 'covoiturage';
		
		$link = mysqli_connect($Nom_Serveur, $Nom_utilisateur, $Mdp_utilisateur, $Nom_BD_Travail);
		if (!$link) {
			//si erreur arrêt du script après affichage d'un massage d'erreur
			die('Erreur de connexion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}
		// envoie requete d'insertion
		if ($result = mysqli_query($link,$requete, MYSQLI_USE_RESULT)) 
		{
			require_once('Add_voiturePhp.php');
			header('Location: espaceperso.php');
			exit;
		}
		else
		{
			die('Erreur de requête insertion (' . mysqli_connect_errno() . ') '
					. mysqli_connect_error());
		}

		?>
	</body>
</html>