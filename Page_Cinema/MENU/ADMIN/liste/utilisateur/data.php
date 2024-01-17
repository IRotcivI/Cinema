<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Utilisateur</title>

    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <!--DataTable-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

</head>
<body>

<table id="myTable" class="display">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Email</th>
        <th>MDP</th>
        <th>Tel</th>
        <th>Rue</th>
        <th>Ville</th>
        <th>Code Postal</th>
    </tr>
    </thead>
    <tbody>
            <?php
            //VARIABLES
            $bdd = new PDO('mysql:host=localhost:3307;dbname=vsa_cinema;charset=utf8', 'root', '');

            //CODES
            $requete = $bdd -> prepare("SELECT nom,prenom,age,email,mdp,tel,rue,ville,cp FROM utilisateur");
            $requete -> execute();
            $aff = $requete -> fetchAll();
            foreach ($aff as $uti){
                echo '<tr>';
                echo '<td>'.$uti['nom'].'</td>';
                echo '<td>'.$uti['prenom'].'</td>';
                echo '<td>'.$uti['age'].'</td>';
                echo '<td>'.$uti['email'].'</td>';
                echo '<td>'.$uti['mdp'].'</td>';
                echo '<td>'.$uti['tel'].'</td>';
                echo '<td>'.$uti['rue'].'</td>';
                echo '<td>'.$uti['ville'].'</td>';
                echo '<td>'.$uti['cp'].'</td>';
                echo '</tr>';
            }
            ?>
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script >

</body>
</html>