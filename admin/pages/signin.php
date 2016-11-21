<?php
/**
 * Created by PhpStorm.
 * User: Terry
 * Date: 15/11/2016
 * Time: 12:36
 */
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
		header("Location: login.php");
	}
	
	


    }else echo "Rien envoyé";


?>