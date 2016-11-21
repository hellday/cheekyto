<?php
session_start();


    if ((isset($_POST['login']) && !empty($_POST['login'])) ) {
  

        $login = $_POST['login'];
        $mdp = $_POST['mdp'];


        try {
            $bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $reponse = $bdd->prepare('SELECT * FROM admin where login = ? AND mdp = ? ');
        $reponse->execute(array($_POST['login'], $_POST['mdp']));


        
		
		if($donnees = $reponse->fetch())
	{
			$_SESSION["login"] = $login;
            $_SESSION["mdp"] = $mdp;
			header("Location: index.php");
	}else {
		$erreur = "Mauvais identifiants.";

	}
	
	


    }
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cheekyto Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Administration Cheekyto</h3>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="">

                                <div class="form-group">
                                    <input class="form-control" placeholder="Login" name="login" type="login" required autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mot de passe" name="mdp" type="password" required value="">
                                </div>

                                <input type="submit" name="connexion" value="Connexion" class="btn btn-success btn-block" />
                                <?php
                                if(isset($erreur)){ ?>
								<div class="alert alert-danger">
									
                                    <?php echo $erreur; ?>
								</div> <?php	
                                }
                                ?>

                                
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
