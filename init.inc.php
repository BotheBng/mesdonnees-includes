<?php
//--------- BDD
$mysqli = new mysqli("localhost", "root", "", "projetesi2021");
if ($mysqli->connect_error) die('Un problème est survenu lors de la tentative de connexion à la BDD : ' . $mysqli->connect_error);
// $mysqli->set_charset("utf8");
//--------- SESSION
session_start();
//--------- CHEMIN
define("RACINE_SITE","/projetesi2021/");
//--------- VARIABLES
$contenu = '';
//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
//--------- DEFINITION DE LA DATE
date_default_timezone_set('UTC');
?>