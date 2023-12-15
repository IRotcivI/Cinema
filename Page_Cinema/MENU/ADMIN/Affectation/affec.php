<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Affectation</title>
</head>
<body>
<form method="post" action="affectation.php">
    <table>
        <tr>
            <td>
                Nom de la salle :
            </td>
            <td>
                <input name="salle" type="text">
            </td>
        </tr>

        <tr>
            <td>
                Nombre de place :
            </td>
            <td>
                <input name="place" type="number">
            </td>
        </tr>

        <tr>
            <td>
                Dimension :
            </td>
            <td>
                <label>
                    <select name="dimension">
                        <option value="2D">2D</option>
                        <option value="3D">3D</option>
                    </select>
                </label>
            </td>
        </tr>

        <tr>
            <td>
                Film :
            </td>
            <td>

                        <?php

                        //VARIABLES
                        $cdd = new PDO('mysql:host=localhost:3307;dbname=vsa_cinema;charset=utf8', 'root', '');

                        //CODE
                        $afficher_film = $cdd->prepare("SELECT nom FROM film ");
                        $afficher_film->execute();
                        $res = $afficher_film->fetchAll();

                        foreach ($res as $element){
                            echo '<select name="film"> <option value=' . $element['nom'] . '></option>';
                        }



                        ?>

            </td>
        </tr>

        <tr>
            <td>
                <input type="submit" value="Valider">
            </td>
        </tr>

    </table>
</form>
</body>
</html>
