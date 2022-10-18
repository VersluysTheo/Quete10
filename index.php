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

    $manager = new Manager;
    $learner = new Learner;

    ?>
    <!-- Navbar -->
    <div class="container-fluid">
        <nav class="row justify-content-center navbar navbar-expand-lg Navbarbg">
            <a class="navbar-brand" href="https://www.reddit.com/r/wallstreetbets/" target="blank"><img src="img/Stonks.jpg" alt="" height="90px" width="90px"></a>
            <a class="navbar-brand" href="https://deltarune.com/" target="blank"><img src="img/Ralsei.png" alt="" height="90px" width="90px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form action="index.php" method="POST">
                <input type="submit" class="btn-inline-white btn-secondary" name="createtable" value="Creer une Table">
                <input type="submit" class="btn-inline-white btn-secondary" name="lirelatable" value="Lire la Table">
                <input type="submit" class="btn-inline-white btn-secondary" name="viderlatable" value="Vider la Table">
                <input type="submit" class="btn-inline-white btn-secondary" name="deletetable" value="Supprimer la Table">
                <a class="navbar-brand" href=""><img src="img/personne.png" alt="" height="90px" width="90px"></a>
                <input type="submit" class="btn-inline-white btn-secondary" name="creerdonnees" value="Creer les champions">
                <input type="submit" class="btn-inline-white btn-secondary" name="randomread" value="Random">
                <input type="submit" class="btn-inline-white btn-secondary" name="hulk" value="Hulk">
                <input type="submit" class="btn-inline-white btn-secondary" name="randomsupp" value="Random delete">
                <input type="submit" class="btn-inline-white btn-secondary" name="orderbydesc" value="Order by Desc">
            </form>
        </nav>
    </div>
    <div class="container mx-auto mt-4">
        <div class="row justify-content-center">


            <?php
            // Function en Rapport avec la Table 
            if (isset($_POST['createtable'])) {
                $manager->createTable(); ?>
                <div class="alert alert-success text-center" role="alert">
                    Votre Table a bien été Crée.
                </div>
            <?php }

            if (isset($_POST['deletetable'])) {
                $manager->deleteTable(); ?>
                <div class="alert alert-danger text-center" role="alert">
                    Votre Table a bien été Supprimé.
                </div>
            <?php }

            if (isset($_POST['creerdonnees'])) {
                $manager->creerlesDonnees(); ?>
                <div class="alert alert-success text-center" role="alert">
                    Vos champions on été crées.
                </div>
            <?php }

            if (isset($_POST['viderlatable'])) {
                $manager->ctrlaltSupp(); ?>
                <div class="alert alert-danger text-center" role="alert">
                    Votre Table a été vidée.
                </div>
            <?php }

            if (isset($_POST['lirelatable'])) { ?>
                <?php
                $championread = $manager->lirelaTable();
                foreach ($championread as $valeur) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/268351/pexels-photo-268351.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nom : <?php echo $valeur['champion'] ?></h5>
                                <h6 class="card-text">Age : <?php echo $valeur['age'] ?> ans</h6>
                                <h6 class="card-text">Taille : <?php echo $valeur['size'] ?>m</h6>
                                <p class="card-text">Description : <?php echo $valeur['description'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

            <?php
            // ORDER BY DESC
            if (isset($_POST['orderbydesc'])) { ?>
                <?php $orderby = $manager->orderbyDesc();
                foreach ($orderby as $valeur) { ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="https://images.pexels.com/photos/268351/pexels-photo-268351.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Nom : <?php echo $valeur['champion'] ?></h5>
                                <h6 class="card-text">Age : <?php echo $valeur['age'] ?> ans</h6>
                                <h6 class="card-text">Taille : <?php echo $valeur['size'] ?>m</h6>
                                <p class="card-text">Description : <?php echo $valeur['description'] ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>

            <?php
            // HULK
            if (isset($_POST['hulk'])) {
                $hulk = $manager->updateHulk();
                $manager->hulkChanger($hulk['id']); ?>
                <div class="alert alert-success text-center" role="alert">
                    BUUUUUUUUUUULIIIIIIIIIIIAAAAAAAAAAAAAAAA !!!
                </div>
                <?php // echo $hulk['id'];
            }
            // Random Delete
            if (isset($_POST['randomsupp'])) {
                $list = $manager->lirelaTable();
                $manager->ctrlaltSupprand($list); ?>
                <div class="alert alert-primary text-center" role="alert">
                    Un Champion aléatoire a été Supprimé.
                </div>
            <?php }

            // Random Read
            if (isset($_POST['randomread'])) {
                $list = $manager->lirelaTable();
                $lirerandom = $manager->lireRandom($list);
                // echo $lirerandom[0]['champion']; 
            ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="https://images.pexels.com/photos/268351/pexels-photo-268351.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nom : <?php echo $lirerandom[0]['champion'] ?></h5>
                            <h6 class="card-text">Age : <?php echo $lirerandom[0]['age'] ?> ans</h6>
                            <h6 class="card-text">Taille : <?php echo $lirerandom[0]['size'] ?>m</h6>
                            <p class="card-text">Description : <?php echo $lirerandom[0]['description'] ?></p>
                        </div>
                    </div>
                </div>
            <?php }
            ?>

        </div>
    </div>
    <footer class="bottom">
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