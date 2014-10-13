<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>RezidBay</title>
	<link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<!-- jQuery	 -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
</head>
<body>
	<div id="banniere">
		<div id="bg_banniere"></div>
		<span id="banniere_title">
			RezidBay
			<br>
			<span id="banniere_text">
			Acheter, vendre, échanger ... à la REZID.
		</span>
		</span>
		
	</div>
	<noscript>
		Activer javascript dans votre navigateur améliorera votre expérience.
	</noscript>
	<header id="header">
		<div id="header-container">
			<div id="logo">
				<a href="." title="Retour à l'accueil" class="lien-logo">
					<img src="images/logo.png" alt="Logo"> RezidBay
				</a>
			</div>
			<img src="images/menu_ferme.png" id="switch_menu" class="mobile">

			<div id="menu" class="pc">
				<ul>
					<li><a href="./?page=annonces#header">Annonces</a></li>
					<li><a href="./?page=ajouter#header">Ajouter</a></li>
					<li><a href="./?page=infos#header">Infos</a></li>
					<li><a href="http://rezid.org" target="_blank">Rezid</a></li>
					<li><a href="http://benjamin-caradeuc.tk/" target="_blank">ZeZeN</a></li>
				</ul>
			</div>
		</div>
	</header>



	<div id="container">
		<?php 
		if(isset($_GET['page']) && !empty($_GET['page'])){
				if($_GET['page'] == "ajouter"){ 
					include_once('pages/ajouter.php');
				} 
				elseif($_GET['page'] == "infos"){
					include_once('pages/infos.php');
				}
				elseif($_GET['page'] == "article"){
					include_once('pages/article.php');
				}
				else{
					include_once('pages/annonces.php');
				}
			}
		else{
			include_once('pages/annonces.php');
		}

		?>
	</div>





	<footer>
		by &copy; ZeZeN
	</footer>

	

	<!-- Mes scripts -->
	<script src="js/menu-flottant.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>