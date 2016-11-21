<?php
/**
 * Created by PhpStorm.
 * User: Terry
 * Date: 15/11/2016
 * Time: 11:02
 */
session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('SELECT * FROM admin where login= ? AND mdp= ?');
$req->execute(array($_SESSION["login"], $_SESSION["mdp"]));

if(!$donnees = $req->fetch()){
    header('Location: login.php');
    exit();
}
?>


