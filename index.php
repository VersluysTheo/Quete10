<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Quete 10</title>
    <link rel="icon" href="img/crabe.png">
</head>

<body>
    <!-- Require -->
    <?php

    require_once 'config/Database.php';
    require_once 'class/Learner.php';
    require_once 'class/Manager.php';

    ?>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg Navbarbg">
        <a class="navbar-brand" href="https://www.reddit.com/r/wallstreetbets/" target="blank"><img src="img/Stonks.jpg" alt="" height="90px" width="90px"></a>
        <a class="navbar-brand" href="https://deltarune.com/" target="blank"><img src="img/Ralsei.png" alt="" height="90px" width="90px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="flex-row justify-content-start">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active ">
                            <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Creer une Table</button></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Lire la Table</button></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Vider la Table</button></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Supprimer la Base de données</button></a>
                        </li>
                        <li class="nav-item active">
                            <a class="navbar-brand" href=""><img src="img/personne.png" alt="" height="90px" width="90px"></a>
                        </li>
                    </ul>
                </div>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="navbar-brand" href=""><img src="img/epee.png" alt="" height="90px" width="90px"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Lire un Champion Random</button></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><button type="button" class="btn-inline-white btn-secondary">Transformation d'une personne en Hulk</button></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><button type="button" class="btn-inline-white btn-secondary">Supprimer un Champion Random </button></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><button type="button" class="btn-inline-white btn-secondary">Lire la Table dans l'ordre d'âges Décroissant </button></a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </nav>
    <footer>
        <div class="container-fluid">
            <div class="row justify-content-around align-items-center Backgroundfooter">
                <a href="https://github.com/VersluysTheo" target="blank"><img src="img/github.png" alt="" height="90px" width="90px"></a>
                <p>© Nyugga</p>
                <a href="https://www.boulanger.com/c/trottinette" target="blank"><img src="img/trottinette.png" alt="" height="90px" width="90px"></a>
            </div>
        </div>
    </footer>
</body>

</html>