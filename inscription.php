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
    <title>Inscription</title>
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

<in
    </div>
    <!-- Contact Area -->

    <section id="contact" class="mapWrap">
        <div id="googleMap" style="width:100%;"></div>
        <div id="contact-area">
            <div class="container">
                <br>
                <h2 class="block_title">Cheekyto</h2>
                <div class="row">
                    <div class="col-xs-12">
                    </div>
                    <div class="col-sm-6">
                        <div class="moreDetails">
                            <h2 class="con-title">Inscription</h2>
                            <p> Inscrivez-vous pour participer à notre concert privé !</p>
                            <p> et vivre une expérience musicale sans précédent</p>
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
            <br>

            <?php include "footer.php"; ?>



</body>
</html>