<?php
/**
 * Created by PhpStorm.
 * User: Terry
 * Date: 15/11/2016
 * Time: 11:15
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
?>