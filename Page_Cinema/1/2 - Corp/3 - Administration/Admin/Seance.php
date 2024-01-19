<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ADMIN</title>
</head>
<body>
<form method="post" action="">
    <table>
        <tr>
            <td>
                Salle de projection :
            </td>
            <td>
                <?php
                //VARIABLES
                $bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');
                //CODE
                $requete = $bdd ->prepare('SELECT nom_salle,id_salle FROM salle_projection');
                $requete -> execute();
                $result = $requete->fetchAll();
                ?>
                <select name="salle">
                    <?php
                    foreach ($result as $el){
                        echo '<option value ='.$el['id_salle'].'/>'.$el['nom_salle'].'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                Film :
            </td>
            <td>
                <?php
                //VARIABLES
                $bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');
                //CODE
                $requete = $bdd ->prepare('SELECT nom,id_film FROM film');
                $requete -> execute();
                $result = $requete->fetchAll();
                ?>
                <select name="film">
                    <?php
                    foreach ($result as $el){
                        echo '<option value ='.$el['id_film'].'/>'.$el['nom'].'</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Attribuer">
            </td>
        </tr>
    </table>

</form>
</body>
</html>

<?php
//VARIABLES
$bdd = new PDO('mysql:host=localhost:3306;dbname=vsa_cinema;charset=utf8', 'root', '');
$film = $_POST['film'];
$salle = $_POST['salle'];

//CODE
$requete = $bdd -> prepare('INSERT INTO seance (ref_film,ref_salle) VALUES (:film, :salle)');
$requete -> execute(array(
    'film' => $film,
    'salle' => $salle,
));
