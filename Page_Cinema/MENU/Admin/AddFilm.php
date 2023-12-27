<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Film</title>
</head>
<body>
<form method="post" action="">
    <table>
        <tr>
            <td>
                Nom du film :
            </td>
            <td>
                <input type="text" name="nom" required>
        </tr>

        <tr>
            <td>
                Description :
            </td>
            <td>
                <textarea id="description" name="desc" rows="2" cols="20"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                Affiche :
            </td>
            <td>
                <textarea id="affiche" name="aff" rows="2" cols="20"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                Réalisateur :
            </td>
            <td>
                <input type="text" name="rea" required>
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Ajouter">
            </td>
        </tr>

    </table>
</form>
</body>
</html>

<?php
//VARIABLES
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');
$nom = $_POST['nom'];
$desc = $_POST['desc'];
$affiche = $_POST['aff'];
$rea = $_POST['rea'];


//CODE
$requete = $bdd -> prepare('INSERT INTO film (nom,description,affiche,realisateur) VALUES (:nom, :description, :affiche, :realisateur)');
$requete -> execute(array(
    'nom' => $nom,
    'description' => $desc,
    'affiche' => $affiche,
    'realisateur' => $rea,
));