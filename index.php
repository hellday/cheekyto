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
									<li><a href="#schedule">Inscription</a></li>
									<li><a href="#blog">Blog</a></li>
									<li><a href="#team">La bande</a></li>
									<li><a href="#testimonial">Testimonials</a></li>
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
				            <p><span class="start-text"><b>26 Juin 2017</b></span></p>
				            <h4 class="entry-title"><a href="#">Festival Privé</a></h4>

				            <h5><span><b>Remplissez le formulaire d'inscription</b></span></h5>
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
					<h3>Bars</h3>
					<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="block col-md-4">
				<div class="content-block">
					<i class="fa fa-trophy fa-3x"></i>
					<h3>Award Winning Company</h3>
					<p>I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			</div>
			<div class="about-part">
			<div class="col-md-8">
			
				<h3>Qui sommes nous ?</h3>
				

				<p>Nullam enim nunc, sollicitudin eget rhoncus non, iaculis quis metus. Nunc urna diam, blandit nec ipsum eu, mollis convallis lectus. Vestibulum sapien mauris, auctor quis magna sed, pretium vestibulum est. Mauris vitae tristique urna. Nullam enim nunc, sollicitudin eget rhoncus non, iaculis quis metus. Nunc urna diam, blandit nec ipsum eu, mollis convallis lectus.

				Vestibulum sapien mauris, auctor quis magna sed, pretium vestibulum est. Mauris vitae tristique urna.</p>
			</div>
			<div class="col-md-4">

				<p> Design</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
				    60%
				  </div>
				</div>
				<br/>
				<p> Idea</p>
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
				    80%
				  </div>
				</div>
				<br/>
			</div>
			</div>
			</div>

		</section>
				<!--==========-->
				<!--===============================-->
				<!--== Team =============-->
				<!--===============================-->

				<section id="team" class="team">
					<div class="container">
						<div class="title-start team-menu col-md-4 col-md-offset-4">
							<h2 class="team-heading">La bande</h2>
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
				<!--===============================-->
				<!--== Pricing Tables =============-->
				<!--===============================-->
				<!--<section id="prices" class="row">-->
				<!--<div class="title-start events-menu col-md-4 col-md-offset-4">-->
				<!--<h2>Pricing</h2>-->
				<!--<p class="sub-text text-center">Details of our reasonable pricing</p>-->
				<!--</div>-->

				<!--<div class="col-md-12 visible-md visible-lg">-->
					<!--<div class="wrap">-->
					<!---->
						<!--<div class="pricing-table">-->
							<!--<div class="plan">-->
								<!--<h3 class="name">Silver</h3>-->
								<!--<h4 class="price">$10,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>100</strong> Seats</li>-->
									<!--<li><strong>3 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->

							<!--<div class="plan">-->
								<!--<h3 class="name">Gold</h3>-->
								<!--<h4 class="price">$20,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>300</strong> Seats</li>-->
									<!--<li><strong>5 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->

							<!--<div class="plan">-->
								<!--<h3 class="name">Platinum</h3>-->
								<!--<h4 class="price">$30,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>500</strong> Seats</li>-->
									<!--<li><strong>7 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->
						<!--</div>&lt;!&ndash;.pricing-table&ndash;&gt;-->
					<!--</div>&lt;!&ndash;.wrap&ndash;&gt;-->
					<!--</div>-->

						<!--<div class="col-sm-11  pricing-table visible-sm visible-xs">-->
					       <!--<div class="plan">-->
								<!--<h3 class="name">Silver</h3>-->
								<!--<h4 class="price">$10,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>100</strong> Seats</li>-->
									<!--<li><strong>3 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->
						<!--</div>	-->
						<!--<div class="col-sm-11  pricing-table visible-sm visible-xs">-->
					       <!--<div class="plan">-->
								<!--<h3 class="name">Gold</h3>-->
								<!--<h4 class="price">$20,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>100</strong> Seats</li>-->
									<!--<li><strong>5 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->
						<!--</div>-->
						<!--<div class="col-sm-11  pricing-table visible-sm visible-xs">-->

							<!--<div class="plan">-->
								<!--<h3 class="name">Platinum</h3>-->
								<!--<h4 class="price">$30,000<span>/Day</span></h4>-->

								<!--<ul class="details">-->
									<!--<li><strong>500</strong> Seats</li>-->
									<!--<li><strong>7 Star</strong> Hotel</li>-->
									<!--<li><strong>Gifts</strong></li>-->
								<!--</ul>-->

								<!--<h5 class="order"><a href="#">Order Now</a></h5>-->
							<!--</div>&lt;!&ndash;.plan&ndash;&gt;-->

						<!--</div>	-->
				<!--</section>-->
				<!--==========-->


				</div></div>
				<!--==========-->
				<!--==========-->
				<!--===============================-->
				<!--== Testimonial =============-->
				<!--===============================-->
		<section id="testimonial" class="testimonial-area">
            <div class="container">
                <div class="title-start col-md-4 col-md-offset-4">
					<h2 class="team-heading white">Testimonial</h2>
					<p class="sub-text text-center">What they say and see among us</p>
				</div>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div id="testimonial-container" class="col-xs-12">
                        <div class="testimonila-block">
                            <img src="images/testimonial.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Monir Hossain</strong>
                            <br>
                            <small>C.E.O</small>
                        </div>
                        <div class="testimonila-block">
                            <img src="images/testimonial2.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Nur Ul Hossain</strong>
                            <br>
                            <small>Project Manager</small>
                        </div>
                        <div class="testimonila-block">
                            <img src="images/testimonial3.jpg" alt="clients" class="selfshot">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem sed mollitia illum! Molestiae dignissimos, hic dolorem et eius ut nobis. Corrupti totam amet aperiam aut voluptate nobis dolor at soluta.</p>
                            <strong>Rub Elvi</strong>
                            <br>
                            <small>Developer</small>
                        </div>
                    </div>
                </div>
            </div><!-- container -->
        </section><!-- testimonial -->
				

		</div>
		 <!-- Contact Area -->

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
                                <p> Inscrivez-vous pour participer à notre concert privé !</p>
								<p> L'adresse de celui-ci vous sera communiqué sur votre boite mail.</p>
                                <!--<ul class="address">-->
                                    <!--<li><i class="pe-7s-map-marker"></i><span>1600 Pennsylvania Ave NW,<br>Washington, DC 20500,<br>United States</span></li>-->
                                    <!--<li><i class="pe-7s-mail"></i><span>example@gmail.com</span></li>-->
                                    <!--<li><i class="pe-7s-phone"></i><span>+1-202-555-0144</span></li>-->
                                    <!--<li><i class="pe-7s-global"></i><span><a href="#">www.themewagon.com</a></span></li>-->
                                <!--</ul>-->
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="con-title">Inscrivez-vous !</h2>
							<form method="POST" action="">

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
                                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required="true">
                              </div>
								<div class="form-group">
									<input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre adresse" required="true">
								</div>

                              <button type="submit" class="btn medium">Envoyer</button
								<br><br><br>
                            </form>
                        </div>
                    </div>
                </div><!-- container -->



            </div><!-- contact-area -->
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
                                <li class="social-icons"><a class="linkedin" href="#"></a></li>
                                <li class="social-icons"><a class="google-plus" href="#"></a></li>
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
                        <p class="copyright">© Copyright 2016</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="designed">By <a href="http://themewagon.com" target="_blank">Cheekyto</a></p>
                    </div>
                </div>
            </div>
        </footer>


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