<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>


    <!--POLICE-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- CSS/JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body class="vh-100 overflow-hidden">

<nav class="navbar navbar-black navbar-expand-lg bg-transparent">
    <div class="container-fluid">
        <!--Nom-->
        <a class="navbar-brand" href="#">Cinema Claude Lelouch</a>
        <!--Acceuil-->
        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Menu-->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                <ul class="navbar-nav justify-content-center
                align-item-center fs-5 flex-grow-1 pe-3">
                    <li class="nav-item m-2">
                        <a class="nav-link" href="#">Acceuil</a>
                    </li>
                </ul>
                <!--Inscription/Connexion-->
                <div class="d-flex flex-column flex-lg-row justify-content-center
                     align-items-center gap-3">
                    <a href="../CONNEXION_INSCRIPTION/Page_connexion/Cinema.html" class="text-black" >Profil</a>
                    <a href="../CONNEXION_INSCRIPTION/Page_inscription/inscription.html" class="text-black
                      text-decoration-none px-3 py-1 rounded-4"
                       style="background-color: #ffeaa6ff">Deconnexion</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav>
    <div class="text-center">
        <img src="img/test.png" class="rounded img-thumbnail">
        <a type="button" class="btn btn-outline-warning" style="display: block;">Warning</a>
    </div>



</nav>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-lqAszqFRoHDpNS++fVp4jjLw6R/xFpKGJg3i8b5GoP8C5C3ISIJLMP6qA3s3iXJ" crossorigin="anonymous"></script>

</body>
</html>
