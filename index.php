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

//	$reqsql = $bdd->prepare('INSERT INTO inscription_wait (civilité, date_naissance, nom, prénom, email, adresse ) VALUES (:civilite, :datenaissance, :nom, :prenom, :email, :adresse)');
//	$reqsql->execute(array(
//			'civilite' => $civilite,
//			'datenaissance' => $date,
//			'nom' => $nom,
//			'prenom' => $prenom,
//			'email' => $email,
//			'adresse' => $adresse
//	));

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
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	</head>
	<body>

    <?php include "header.php"; ?>


			<!--== Site Description ==-->
			<div class="header-cta">
				<div class="container">
					<div class="row">
						<div class="entry-content">
				            <p><span class="start-text"><b>26 Juin 2017</b></span></p>
				            <h4 class="entry-title"><a href="#">Festival Privé</a></h4>

				            <h5><span><b>Remplissez le formulaire d'inscription et rejoignez LE festival </b></span></h5>
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


		<div class="content">
			<div class="container box">


				<!--===============================-->
				<!--== About us ===================-->
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
					<p>Profitez des différentes infrastructure mise en Place,pour profiter de la fêtes au maximum.</p>
				</div>
			</div>
			<div class="block col-md-4">
				<div class="content-block">
					<i class="fa fa-map fa-3x"></i>
					<h3>Un lieux Unique au coeur de Paris</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.368694288325!2d2.2863701155270806!3d48.851179409168644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6701b487a1783%3A0x79f04230918a64c6!2s10+Rue+Sextius+Michel%2C+75015+Paris!5e0!3m2!1sfr!2sfr!4v1483195920369" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            </div>
			</div>
			<div class="about-part">
			<div class="col-md-12">
			
				<h3>Qui sommes nous ?</h3>
				

				<p>Créé par deux étudiants, Cheekyto est un festival de musique électronique dans un premier lieux qui a pour but de mettre en valeur la scène électronique française avec des grands nom de la musique mais aussi des découvertes et des surprises pour un public grandissant  </p>
			</div>


		</section>
				<!--==========-->
				<!--===============================-->
				<!--== Team =============-->
				<!--===============================-->

				<section id="team" class="team">
					<div class="container">
						<div class="title-start team-menu col-md-4 col-md-offset-4">
							<h2 class="team-heading">les plus grand?</h2>
							<p class="sub-text text-center">Meet the greatest Team of Themewagon</p>
						</div>
					</div>
					<div class="team-member row">
						<div class="col-md-3 col-sm-6 member">
							<img class="blog-image" src="images/team1.jpg" width="100%" height="280" alt="Blog Image 2"/>
							<p class="name-member">Jon Doe, CEO</p>
							<ul class="team-ist">
								<li>CSS3 </li>
								<li>HTML5 </li>
								<li>Adobe</li>
							</ul>
							<div class="team-social">
								<i class="fa fa-2x fa-tumblr-square"></i>
								<i class="fa fa-2x fa-facebook"></i>
								<i class="fa fa-2x fa-twitter"></i>
								<i class="fa fa-2x fa-linkedin"></i>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 member">
							<img class="blog-image" src="images/team2.jpg" width="100%" height="280" alt="Blog Image 2"/>
							<p class="name-member">Jon Doe, Head of Ideas</p>
							<ul class="team-ist">
								<li>CSS3 </li>
								<li>HTML5 </li>
								<li>Adobe</li>
							</ul>
							<div class="team-social">
								<i class="fa fa-2x fa-tumblr-square"></i>
								<i class="fa fa-2x fa-facebook"></i>
								<i class="fa fa-2x fa-twitter"></i>
								<i class="fa fa-2x fa-linkedin"></i>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 member">
							<img class="blog-image" src="images/team3.jpg" width="100%" height="280" alt="Blog Image 2"/>
							<p class="name-member">Jon Doe, Chief Developer</p>
							<ul class="team-ist">
								<li>CSS3 </li>
								<li>HTML5 </li>
								<li>Adobe</li>
							</ul>
							<div class="team-social">
								<i class="fa fa-2x fa-tumblr-square"></i>
								<i class="fa fa-2x fa-facebook"></i>
								<i class="fa fa-2x fa-twitter"></i>
								<i class="fa fa-2x fa-linkedin"></i>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 member">
							<img class="blog-image" src="images/team4.jpg" width="100%" height="280" alt="Blog Image 2"/>
							<p class="name-member">Jon Doe, Event Manager</p>
							<ul class="team-ist">
								<li>CSS3 </li>
								<li>HTML5 </li>
								<li>Adobe</li>
							</ul>
							<div class="team-social">
								<i class="fa fa-2x fa-tumblr-square"></i>
								<i class="fa fa-2x fa-facebook"></i>
								<i class="fa fa-2x fa-twitter"></i>
								<i class="fa fa-2x fa-linkedin"></i>
							</div>
						</div>
					</div>

				</section>
				<!--==========-->



				<!--===============================-->
				<!--== Schedule ===================-->
				<!--===============================-->
				<section id="schedule" class="row">
				<div class="title-start schedule-menu col-md-4 col-md-offset-4">
				<br />
					<h2>Events Schedule</h2>
					<p class="sub-text text-center">Check out the event details</p>
				</div>
					<ul class="timeline">
					    <li>
					        <div class="timeline-badge">
					          <a><i class="fa fa-circle" id=""></i></a>
					        </div>
					        <div class="timeline-panel">
					            <div class="timeline-heading">
					                <h4>Event One</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
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
					                <h4>Event Two</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
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
					                <h4>Event Three</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
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
					                <h4>Event Four</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
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
					                <h4>Event Five</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
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
					                <h4>Event Six</h4>
					            </div>
					            <div class="timeline-body">
					                <p class="timeline-desc col-md-6">Invitamus me testatur sed quod non dum animae tuae lacrimis ut libertatem deum rogus aegritudinis causet. Dicens hoc contra serpentibus isto.</p>
					                <p class="timeline-other col-md-6">
					                	
					                	<em class="timeline-item">
					                	 Venue : Adeleade
					                	</em> 
					                	<em class="timeline-item">
					                	Seats : 25
					                	</em>
					                	<em class="timeline-item">
					                	Ticket: $35 
					                	</em>
					                	<em class="timeline-item">
					                	Date : Feb-21-2014
					                	</em>
					                	<em class="timeline-item">
					                	Duration : 5days
					                	</em>

					                </p>

					            </div>
					            
					        </div>
					    </li>
					    <li class="clearfix no-float"></li>
					</ul>
					
				</section>



				<!--===============================-->
				<!--== Blog =============-->
				<!--===============================-->
			<section id="blog" class="row">
				<div class="title-start col-md-4 col-md-offset-4"><h2>Blog</h2>	
				<p class="sub-text text-center">Awesome news and articles from us</p>	
				</div>
					<div class="top">
					</div>
					<div class="content">
					  
					  <div class="blog col-md-4">
					    <h2 class="blog-head">Evento at HW</h2>
					    <h3>
					    Posted by <a href="#">Shuvo</a><span class="date-line"> on April 1st</span>
					    </h3>
					    <img class="blog-image" src="images/demo/blog2.jpg" width="100%" height="250" alt="Blog Image 2"/>
					    
					    <p class="firstpara"><span class="firstcharacter">P</span>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p> 

					    <button class="button-info read-more">Read More</button>
					     
					  </div>
					
					  <div class="blog col-md-4">
					    <h2 class="blog-head">Evento at NY</h2>
					    <h3>Posted by <a href="#">Shuvo</a><span class="date-line"> on April 30th</span></h3>
					    <img class="blog-image" src="images/demo/blog1.jpg"  width="100%" height="250" alt="Blog Image 2"/>
					    <p class="firstpara"><span class="firstcharacter">G</span>et out of here!" bellowed a brawny man with a beard as long as Charlie's arm. "Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante."Pellentesque habitant morbi tristique." said Charlie.Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					    <button class="button-info read-more">Read More</button>
					  </div>
					  <div class="blog col-md-4">
					    <h2 class="blog-head">US Feast</h2>

					    <h3>Posted by <a href="#">Shuvo</a><span class="date-line"> on April 1st</span></h3>
					    <img class="blog-image" src="images/demo/blog2.jpg" width="100%" height="250" alt="Blog Image 2"/>
					    <p class="firstpara"><span class="firstcharacter">P</span>ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
					    <button class="button-info read-more">Read More</button>
					  </div>
					</div>
				</section>

				<!--==========-->
				<!--==========-->
				<!--===============================-->
				<!--== Testimonial =============-->
				<!--===============================-->
		<section id="testimonial" class="testimonial-area">
            <div class="container">

                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div id="testimonial-container" class="col-xs-12">
                        <div class="testimonila-block">
                            <img src="images/inrock.png" alt="clients" class="selfshot">
                            <p>"Incontournable,le festival de l'année"</p>
                            <strong>Les Inrocks</strong>
                        </div>
                        <div class="testimonila-block">
                            <img src="images/lep.jpg" alt="clients" class="selfshot">
                            <p>"Incroyablement créatif,le Caochella à la française"</p>
                            <strong>Le point</strong>
                        </div>

                    </div>
                </div>
            </div><!-- container -->
        </section><!-- testimonial -->



                <?php include "footer.php"; ?>




		<!--== Javascript Files ==-->
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script src="js/jquery-2.1.0.min.js"></script>
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
		<script type="text/javascript"> 

		$(document).ready(function() {
 
		  $("#testimonial-container").owlCarousel({
		 
		      navigation : false, // Show next and prev buttons
		      slideSpeed : 700,
		      paginationSpeed : 400,
		      singleItem:true,
		  });
 
		});
		</script>
	</body>
</html>