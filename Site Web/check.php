<?php

if(isSet($_POST['mail']))
{
    $email = $_POST['mail'];

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=cheekyto;charset=utf8', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('SELECT email FROM inscriptions WHERE email = ?');
    $req->execute(array($email));


    if($donnees = $req->fetch())
    {
        echo '<div class="bg-danger">Adresse email <b>'.$email.'</b> est déjà utilisé.</div>';
    }
    else
    {
        echo 'OK';
    }

}

?>