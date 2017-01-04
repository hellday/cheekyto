<?php
if ((isset($_POST['email']) && !empty($_POST['email'])) ) {

	$civilite = $_POST['civilité'];
	$date = $_POST['date'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$adresse = $_POST['adresse'];


	try {
		$bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (Exception $e) {
		die('Erreur : ' . $e->getMessage());
	}


	$reqsql = $bdd->prepare('INSERT INTO inscriptions (civilité, date_naissance, nom, prénom, email, adresse, status ) VALUES (:civilite, :datenaissance, :nom, :prenom, :email, :adresse, :status)');
	$reqsql->execute(array(
		'civilite' => $civilite,
		'datenaissance' => $date,
		'nom' => $nom,
		'prenom' => $prenom,
		'email' => $email,
		'adresse' => $adresse,
		'status' => "wait"
	));

	$ok = "<div class=\"bg-success\"><h2>Inscription réussie pour l'adresse email <b>$email</b> !</h2></div>";


}


?>

<!DOCTYPE html>
<html lang="fr">
	
<head>
		<title>Cheekyto</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>  
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="">

		<!--== CSS Files ==-->
		<link href="css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<link href="css/font-awesome.css" rel="stylesheet" media="screen">
		<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
		<link href="css/flexslider.css" rel="stylesheet" media="screen">
		<link href="css/fancySelect.css" rel="stylesheet" media="screen">
		<link href="css/responsive.css" rel="stylesheet" media="screen">

		<!--== Google Fonts ==-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Electrolize" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	</head>
	<body>
		<header id="header">
			<div id="menu" class="header-menu fixed">
				<div class="box">
					<div class="row">
						<nav role="navigation" class="col-sm-12">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>

								<!--== Logo ==-->
								<span class="navbar-brand logo">
									Cheekyto
								</span>

							</div>
							<div class="navbar-collapse collapse">

								<!--== Navigation Menu ==-->
								<ul class="nav navbar-nav">
									<li class="current"><a href="#header">Accueil</a></li>
									<li><a href="#about">A propos</a></li>
									<li><a href="#schedule">Au programme</a></li>
									<li><a href="#testimonial">Avis</a></li>
									<li><a href="#contact">Inscription</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<!--== Site Description ==-->
			<div class="header-cta">
				<div class="container">
					<div class="row">
						<div class="entry-content">
							<p><span class="start-text"><b>du 27 au 30 Juin 2017</b></span></p>
							<h4 class="entry-title"><a href="#">Le Festival Privé Parisien</a></h4>

							<h5><span><b>Remplissez le formulaire d'inscription et rejoignez le festival </b></span></h5>
						</div>
					</div>
				</div>
			</div>


			<div class="header-bg">
				<div id="preloader">
					<div class="preloader"></div>
				</div>
				<div class="main-slider" id="main-slider">

					<!--== Main Slider ==-->
					<ul class="slides">
						<li><img src="images/demo/bg-slide-01.jpg" alt="Slide Image"/></li>
						<li><img src="images/demo/festival_01.jpg" alt="Slide Image 2"/></li>
						<li><img src="images/demo/festival_02.jpg" alt="Slide Image 2"/></li>
					</ul>

				</div>
			</div>
		</header>

		<div class="content">
			<div class="container box">


				<!--===============================-->
				<!--== A propos ===================-->
				<!--===============================-->
				<section id="about" class="about-us">
					<div class="title-start col-md-4 col-md-offset-4">
						<br />
						<h2>A propos du festival</h2>
						<p class="sub-text text-center">Ce qui vous attend...</p>
					</div>
					<div class="container">
						<div class="about-first">
							<div class="block col-md-4">
								<div class="content-block">
									<i class="fa fa-users fa-3x"></i>
									<h3>Les plus grands artistes</h3>
									<p>Parmis Daft Punk, Justice et bien d'autres !</p>
								</div>
							</div>
							<div class="block col-md-4">
								<div class="content-block">
									<i class="fa fa-beer fa-3x"></i>
									<h3>Une Ambiance de fête</h3>
									<p>Différentes infrastructures mise en place pour profiter de la fête au maximum.</p>
								</div>
							</div>
							<div class="block col-md-4">
								<div class="content-block">
									<i class="fa fa-map-marker fa-3x"></i>
									<h3>Un lieu Unique au coeur de Paris</h3>
									<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.368694288325!2d2.2863701155270806!3d48.851179409168644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b487a1783%3A0x79f04230918a64c6!2s10+Rue+Sextius+Michel%2C+75015+Paris!5e0!3m2!1sfr!2sfr!4v1483195920369" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe></p>
								</div>
							</div>
						</div>
						<div class="about-part">
							<div class="col-md-12">
								<p>Créé par deux étudiants parisiens, Cheekyto est un festival unique de musique électronique qui a pour but de mettre en valeur la scène électronique française avec des grands noms de la musique mais aussi des découvertes et des surprises pour un public grandissant. Les Artistes se produisant gratuitement l'evenement ne peut acceuillir qu'un nombre restreint de personnes. Alors si tu veux participer à notre festival saisis ta chance et inscrit toi<br></p>
								<br>

							</div>


				</section>




				<!--===============================-->
				<!--== Déroulement ===================-->
				<!--===============================-->
				<section id="schedule" class="row">
					<div class="title-start schedule-menu col-md-4 col-md-offset-4">
						<br />
						<h2>Déroulement de l'évenement</h2>
					</div>
					<ul class="timeline">
						<li>
							<div class="timeline-badge">
								<a><i class="fa fa-circle" id=""></i></a>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Jour 1</h4>
								</div>
								<div class="timeline-body">
									<p class="timeline-desc col-md-6">Ouverture du Festival avec 4 artistes "French Touch" dans le cadre d'un soirée exceptionelle de 16:00 à 3:00 </p>
									<p class="timeline-other col-md-6">

										<em class="timeline-item">
											Étienne de Crécy
										</em>
										<em class="timeline-item">
											Alan Braxe
										</em>
										<em class="timeline-item">
											Mr. Oizo
										</em>



									</p>

								</div>

							</div>
						</li>

						<li  class="timeline-inverted">
							<div class="timeline-badge">
								<a><i class="fa fa-circle" id=""></i></a>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Jour 2</h4>
								</div>
								<div class="timeline-body">
									<p class="timeline-desc col-md-6">La Fête bats son plein avec 3 artiste emblematique de la culture électronique française et une surprise en fin de set avec comme programmation une soirée sur les mêmes horaires : 16:00 à 3:00</p>
									<p class="timeline-other col-md-6">

										<em class="timeline-item">
											Cassius
										</em>
										<em class="timeline-item">
											Laurent Garnier
										</em>
										<em class="timeline-item">
											Mome
										</em>
										<em class="timeline-item">
											?????
										</em>


									</p>

								</div>

							</div>
						</li>

						<li>
							<div class="timeline-badge">
								<a><i class="fa fa-circle" id=""></i></a>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Jour 3</h4>
								</div>
								<div class="timeline-body">
									<p class="timeline-desc col-md-6">Soirée exceptionnel avec non seulement 2 grand DJ mais aussi une scéne ouverte de 22:00 au lever du jour!!</p>
									<p class="timeline-other col-md-6">

										<em class="timeline-item">
											Flume
										</em>
										<em class="timeline-item">
											Crayon
										</em>
										<em class="timeline-item">
											OPEN
										</em>

										</em>

									</p>

								</div>
							</div>
						</li>

						<li class="timeline-inverted">
							<div class="timeline-badge">
								<a><i class="fa fa-circle" id=""></i></a>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Jour 4</h4>
								</div>
								<div class="timeline-body">
									<p class="timeline-desc col-md-6">Cérémonie de Cloture de notre festival avec comme théme les légendes électro! et une programmation d'exception de 20:00 à 6:00</p>
									<p class="timeline-other col-md-6">

										<em class="timeline-item">
											Jean-Michel Jarre
										</em>
										<em class="timeline-item">
											Daft Punk
										</em>
										<em class="timeline-item">
											Justice
										</em>
										<em class="timeline-item">
										BreakBot
										</em>

									</p>

								</div>

							</div>
						</li>

						<
						<li class="clearfix no-float"></li>
					</ul>

				</section>







				</div></div>
				<!--==========-->
				<!--==========-->
				<!--===============================-->
				<!--== Avis =============-->
				<!--===============================-->
		<section id="testimonial" class="testimonial-area">
			<div class="container">

				<div class="row">
					<div class="col-xs-12">
					</div>
					<div id="testimonial-container" class="col-xs-12">
						<div class="testimonila-block">
							<img src="images/inrock.png" alt="clients" class="selfshot">
							<p>"Incontournable, le festival de l'année"</p>
							<strong>Les Inrocks</strong>
						</div></br>
						<div class="testimonila-block">
							<img src="images/lep.jpg" alt="clients" class="selfshot">
							<p>"Incroyablement créatif, le Caochella à la française"</p>
							<strong>Le Point</strong>
						</div>

					</div>
				</div>
			</div><!-- container -->
		</section><!-- testimonial -->
				

		</div>

		<!-- Formulaire d'inscription -->

        <section id="contact" class="mapWrap">
            <div id="googleMap" style="width:100%;"></div>
            <div id="contact-area">
                <div class="container">
                    <h2 class="block_title">Cheekyto</h2>
                    <div class="row">
                        <div class="col-xs-12">
                        </div>
                        <div class="col-sm-6">
                            <div class="moreDetails">
                                <h2 class="con-title">Inscription</h2>
                                <p> Inscrivez-vous pour participer au festival !</p>
								<p> Les places sont limitées alors ne perdez pas de temps !</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="con-title">Inscrivez-vous !</h2>
							<form method="POST" action="index.php#contact">

								<div class="form-group">
									<label for="civilité">Civilité :
									<select class="form-control" id="civilité" name="civilité">
										<option>Madame</option>
										<option>Monsieur</option>
									</select></label>
								</div>
								<div class="form-group">
									<label for="date">Date de naissance</label>
									<input type="date" class="form-control" placeholder="Votre adresse" id="date" name="date" required="true">

								</div>
                              <div class="form-group" >
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required="true">
                              </div>
								<div class="form-group">
									<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required="true">
								</div>
                              <div class="form-group">
                                <input type="email" class="form-control" id="mail" name="email" placeholder="Votre email" required="true"><div id="status2"></div>
                              </div>
								<div class="form-group">
									<input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" required="true">
								</div>

                              <button type="submit" class="btn medium">Envoyer</button>
								<?php if(isSet($ok)){
									echo $ok;
								}
								?>
								<br><br><br>
                            </form>
                        </div>
                    </div>
                </div><!-- container -->



            </div><!-- Fin du formulaire -->
			<div class="content mcontent">
				<div id="gotop" class="gotop fa fa-arrow-up"></div>
			</div>
            <div id="social">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="scoialinks">
                                <li class="normal-txt">Retrouvez-nous</li>
                                <li class="social-icons"><a class="facebook" href="#"></a></li>
                                <li class="social-icons"><a class="twitter" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- social -->
        </section><!-- contact -->
		<footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">© Copyright 2016-2017</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="designed">By Terry GROSSO & Nicolas OLIVIER</p>
                    </div>
                </div>
            </div>
        </footer>


		<!--== Javascript Files ==-->
		<script src="http://code.jquery.com/jquery-1.7.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.scrollTo.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/jquery.flexslider.js"></script>
		<script src="js/jquery.accordion.js"></script>
		<script src="js/jquery.placeholder.js"></script>
		<script src="js/jquery.fitvids.js"></script>
		<script src="js/gmap3.js"></script>
		<script src="js/fancySelect.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>


		<SCRIPT type="text/javascript">
			<!--
			/*
			 Credits: Bit Repository
			 Source: http://www.bitrepository.com/web-programming/ajax/username-checker.html
			 */

			pic1 = new Image(16, 16);
			pic1.src = "images/loader.gif";

			$(document).ready(function(){

				$("#mail").change(function() {

					var usr = $("#mail").val();

					if(usr.indexOf("@") >= 0)
					{
						$("#status2").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Vérification...');

						$.ajax({
							type: "POST",
							url: "check.php",
							data: "mail="+ usr,
							success: function(msg){

								$("#status2").ajaxComplete(function(event, request, settings){

									if(msg == 'OK')
									{
										$("#mail").removeClass('object_error'); // if necessary
										$("#mail").addClass("object_ok");
										$(this).html('Adresse valide &nbsp;<img src="images/tick.gif" align="absmiddle">');
									}
									else
									{
										$("#mail").removeClass('object_ok'); // if necessary
										$("#mail").addClass("object_error");
										$(this).html(msg);
									}

								});

							}

						});
					}
					else
					{
						$("#status2").html('<font color="red">Le mail doit contenir un <strong>@</strong>.</font>');
						$("#mail").removeClass('object_ok'); // if necessary
						$("#mail").addClass("object_error");
					}


				});

				$("#testimonial-container").owlCarousel({

					navigation : false, // Show next and prev buttons
					slideSpeed : 700,
					paginationSpeed : 400,
					singleItem:true,
				});

			});

			//-->
		</SCRIPT>
	</body>
</html>