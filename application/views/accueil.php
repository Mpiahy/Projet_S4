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
        <form action="#" method="post">
            <div class="container">
                <h2 class="text-center text-secondary">Votre Objectif</h2>
                <hr class="star-dark mb-5" />
                <div class="row">
                    <div class="col" style="padding-left: 0px;">
                        <h6 class="display-6" style="text-align: right;font-size: 20px;font-weight: bold;">Votre poids:</h6>
                    </div>
                    <div class="col" style="padding-left: 0px;text-align: left;margin-bottom: 9px;padding-bottom: 0px;">
                        <h6 class="display-6" style="text-align: left;font-size: 20px;margin-bottom: 0px;padding-left: 25px;"><?php echo $id['poids']; ?> Kg</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-2 offset-xl-3" style="padding-left: 0px;padding-right: 0px;padding-top: 22px;padding-bottom: 25px;">
                        <select style="padding-bottom: 7px;padding-top: 7px;">
                            <option value="1" selected>Choisir l'opération</option>
                            <option value="2">Augmenter</option>
                            <option value="3">Diminuer</option>
                        </select>
                    </div>
                    <div class="col-xl-2 offset-xl-0" style="padding-left: 0px;padding-top: 22px;padding-bottom: 25px;padding-right: 35px;">
                        <h6 class="display-6" style="text-align: center;font-size: 16px;font-style: italic;margin-left: 67px;padding-top: 7px;">de</h6>
                    </div>
                    <div class="col-xl-2 offset-xl-0" style="padding-left: 0px;padding-right: 0px;padding-top: 22px;padding-bottom: 25px;margin-left: 0px;">
                        <input type="number" />
                    </div>
                    <div class="col-xl-2 offset-xl-0" style="padding-left: 0px;padding-right: 0px;padding-top: 22px;padding-bottom: 25px;">
                        <h6 class="display-6" style="text-align: left;font-size: 16px;margin-left: 6px;padding-top: 5px;font-style: italic;">Kg</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col offset-xl-9" style="padding-left: 0px;">
            <button class="btn btn-info" type="submit" style="margin-top: 23px;">Valider</button>
        </div>
        </form>
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