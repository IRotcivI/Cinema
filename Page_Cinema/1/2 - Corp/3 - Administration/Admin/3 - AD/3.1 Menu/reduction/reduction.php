<?php
var_dump($_POST);
//VARIABLES
$code = $_POST['code'];
$date_exp = $_POST['date_exp'];
$pourcentage = $_POST['pourcentage'];
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');

//CODE

$requete = $bdd->prepare('INSERT INTO reduction (code,date_exp,pourcentage) VALUES (:code,:date_exp,:pourcentage)');
$requete->execute(array(
    'code' => $code,
    'date_exp' => $date_exp,
    'pourcentage' => $pourcentage,
    ));
header("Location: creation_reussi.html");
?>