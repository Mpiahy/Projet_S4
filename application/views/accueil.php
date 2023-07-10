<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/accueil_template/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url('assets/accueil_template/assets/fonts/font-awesome.min.css'); ?>">
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-right: 0px;">
                <picture><img src="<?php echo base_url('assets/accueil_template/assets/img/default-removebg-preview.png'); ?>" style="margin-bottom: -190px;margin-top: -188px;padding-bottom: 0px;padding-right: 0px;margin-right: 0px;" width="336" height="309"></picture>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="#admin">Admin</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="#Wallet">Porte Feuille</a></li>
                </ul>
            </div>
            <a class="link-danger py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Login_C/logOut"); ?>" style="font-size: 16px;margin-left: -6px;padding-right: 0px;margin-right: -154px;">Se déconnecter</a>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container" style="padding-bottom: 0px;margin-bottom: -66px;padding-top: 0px;margin-top: -62px;padding-right: 12px;"><img class="img-fluid d-block mx-auto mb-5" src="<?php echo base_url('assets/accueil_template/assets/img/profil.png'); ?>" width="104" height="104">
            <h2><?php echo $id['nom']; ?> </h2>
            <hr class="star-light" style="margin-bottom: -6px;">
            <h2 class="display-2 font-weight-light mb-0">Genre: <?php echo $id['genre'] ;?><br>Taille: <?php echo $id['taille'] ;?><br>Poids: <?php echo $id['poids']; ?></h2>
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container" style="padding-top: 0px;margin-top: -62px;margin-bottom: -70px;">
            <h3 class="text-uppercase text-center text-secondary">Votre objectif</h3>
            <hr class="star-dark mb-5">
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xxl-6"><a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-bs-toggle="modal"></a>
                    <h3 class="text-center">Votre poids: <?php echo $id['poids']; ?> Kg</h3>
                </div>
 
            </div>
            <form method="post" action="<?php echo base_url("Accueil_C/traitement");?>">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xxl-6 offset-xxl-0">
                        <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-5" data-bs-toggle="modal"></a>
                        <h3 class="text-center">Poids </h3>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xxl-6">
                        <a class="d-block mx-auto portfolio-item" href="#portfolio-modal-6" data-bs-toggle="modal"></a>
                        <input type="text" name ="poids">
                    <div class="col">
                        <button class="btn btn-secondary btn-lg" type="submit" style="text-align: center;margin-top: 32px;margin-right: 166px;padding-right: 30px;padding-left: 30px;padding-top: 10px;padding-bottom: 10px;font-size: 20px;font-family: Montserrat, sans-serif;">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer class="text-center footer" style="padding-top: 20px;margin-bottom: -82px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xxl-12">
                    <h4 class="text-uppercase mb-4">Nous</h4>
                    <p class="lead mb-0"><span style="font-size: 16px;font-family: Montserrat, sans-serif;">RABESON Daly Valimbavaka Manasoa ETU001977<br>RAKOTONIAINA Henriel ETU002012&nbsp;<br>RANDRIAMANIVO Andriamahaleo Mpiahisoa ETU002036<br></span></p>
                </div>
            </div>
        </div>
    </footer>
    <div class="text-center text-white copyright py-4" style="margin-top: 3px;">
        <div class="container"><small>Copyright ©&nbsp;Sakafonao 2023</small></div>
    </div>
    
    <script src="<?php echo base_url('assets/accueil_template/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/accueil_template/assets/js/freelancer.js'); ?>"></script>
</body>

</html>