<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon Porte Feuille</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/accueil_template/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url('assets/accueil_template/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico'); ?>" />

</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-right: 0px;">
                <picture><img src="<?php echo base_url('assets/accueil_template/assets/img/default-removebg-preview.png'); ?>" style="margin-bottom: -190px;margin-top: -188px;padding-bottom: 0px;padding-right: 0px;margin-right: 0px;" width="336" height="309"></picture>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Accueil_C/index"); ?>">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Admin_C/index"); ?>">Admin</a></li>
                </ul>
            </div>
            <a class="link-danger py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Login_C/logOut"); ?>" style="font-size: 16px;margin-left: -6px;padding-right: 0px;margin-right: -154px;">Se déconnecter</a>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container" style="padding-bottom: 0px;margin-bottom: -66px;padding-top: 0px;margin-top: -62px;padding-right: 12px;"><img class="img-fluid d-block mx-auto mb-5" src="<?php echo base_url('assets/accueil_template/assets/img/profil.png'); ?>" width="104" height="104">
            <h2><?php echo $user['nom']; ?> </h2>
           
        </div>
    </header>
    <section id="portfolio" class="portfolio">
        <div class="container" style="padding-bottom: 0px;">
            <h3 class="text-uppercase text-center text-secondary" style="height: 12.5943px;">Porte feuille</h3>
            <hr class="star-dark mb-5" style="height: 11.9764px;padding-bottom: 0px;">
        </div>
        <div class="container" style="padding-top: 0px;">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: right;">Votre solde:</h3>
                </div>
                <div class="col-md-6">
                    <?php foreach ($vola as $row): ?>
                    <h6 class="display-6" style="text-align: left;font-size: 24px;padding-top: 2px;"><?php echo $row['vola']; ?> Ariary</h6>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 25px;">
            <form id="rechargeForm" action="<?php echo base_url("Argent_C/traitement") ?>" method="post">
                <div class="row">
                    <div class="col-md-4">
                        <h1 class="display-6" style="font-size: 24px;text-align: right;margin-left: -44px;">Entrer votre code de recharge:</h1>
                    </div>
                    <div class="col-md-4 col-xxl-3">
                        <input id="codeRecharge" name="codeRecharge" type="number" style="font-family: Montserrat, sans-serif;width: 240.17px;padding-top: 9px;margin-bottom: -2px;height: 27.967px;margin-top: 1px;">
                    </div>
                    <input type = "hidden" name ="id" value ="<?php echo $user['id']; ?>"
                    <div class="col-md-4" style="padding-bottom: 0px;padding-top: 0px;margin-top: -10px;">
                        <button class="btn btn-secondary" data-bss-hover-animate="pulse" type="submit" style="font-family: Montserrat, sans-serif;width: 115.1132px;height: 32.9906px;margin-bottom: 9px;padding-bottom: 30px;">
                        Recharger</button>
                    </div>
                        <?php
                        // Afficher le message d'erreur s'il existe
                        if ($this->session->flashdata('error')) {
                            echo '<div class="error-message" style="color:red;">' . $this->session->flashdata('error') . '</div>';
                        }
                        ?>

                </div>
            </form>
        </div>

        <h3>Liste des codes de recharges</h3>
        <ul>
            <li>4256</li>
            <li>4257</li>
            <li>4258</li>
            <li>4259</li>
            <li style="color: red;">4260</li>
            <li>4261</li>
            <li>4262</li>
            <li>4263</li>
            <li>4264</li>
            <li>4265</li>
        </ul>
    </section>

    <footer class="text-center footer" style="padding-top: 20px;margin-bottom: -82px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xxl-12">
                    <h4 class="text-uppercase mb-4">Nous</h4>
                    <p class="lead mb-0"><span style="font-size: 14px;font-family: Montserrat, sans-serif;">RABESON Daly Valimbavaka Manasoa ETU001977<br>RAKOTONIAINA Henriel ETU002012&nbsp;<br>RANDRIAMANIVO Andriamahaleo Mpiahisoa ETU002036<br></span></p>
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