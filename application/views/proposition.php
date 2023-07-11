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
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico'); ?>" />

</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container"><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive" style="padding-right: 0px;">
                <picture><img src="<?php echo base_url('assets/accueil_template/assets/img/default-removebg-preview.png'); ?>" style="margin-bottom: -190px;margin-top: -188px;padding-bottom: 0px;padding-right: 0px;margin-right: 0px;" width="336" height="309"></picture>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Login_C/traiteLogin"); ?>">Accueil</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link link-primary py-3 px-0 px-lg-3 rounded" href="<?php echo base_url("Admin_C/index"); ?>">Admin</a></li>
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
        <div class="container">
            <h3 class="text-uppercase text-center text-secondary" style="height: 12.5943px;">Notre Proposition</h3>
            <hr class="star-dark mb-5" style="height: 11.9764px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;font-family: Montserrat, sans-serif;font-size: 20px;border-radius: 22px;border-width: 4px;">Régime Alimentaire</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            
                                <tr>
                                    <th style="padding-right: 0px;padding-left: 0px;">Choix</th>
                                    <th style="font-family: Montserrat, sans-serif;">Aliments</th>
                                    <th style="font-family: Montserrat, sans-serif;">Quantité</th>
                                    <th style="font-family: Montserrat, sans-serif;">Durée</th>
                                    <th style="font-family: Montserrat, sans-serif;">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($result_regime as $valiny): ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->nom_regime; ?></td>
                                        <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->poids; ?> Kg</td>
                                        <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->calcule; ?></td>
                                        <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->depense; ?> Ar</td>
                                    </tr>
                                <?php endforeach ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="text-align: center;font-family: Montserrat, sans-serif;font-size: 20px;border-radius: 22px;border-width: 4px;">Activités Sportives</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Choix</th>
                                    <th style="font-family: Montserrat, sans-serif;">Sports</th>
                                    <th style="font-family: Montserrat, sans-serif;">Durée</th>
                                    <th style="font-family: Montserrat, sans-serif;">Frais</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resultat as $valiny): ?>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->nom_sport; ?></td>
                                    <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->duree; ?></td>
                                    <td style="font-family: Montserrat, sans-serif;"><?php echo $valiny->frais; ?></td>
                                </tr>
                                <?php endforeach ?>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="padding-top: 25px;">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: right;">Frais Total:</h3>
                </div>
                <div class="col-md-6">
                    <h6 class="display-6" style="text-align: left;font-size: 24px;padding-top: 6px;">$prix + $frais_sport</h6>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row" style="margin-left: 290px;margin-right: 290px;padding-top: 32px;">
            <div class="col-md-6" style="text-align: center;"><button class="btn btn-primary" type="button" onclick="accepterProposition()">Accepter Proposition</button></div>
            <div class="col-md-6" style="text-align: center;"><button class="btn btn-info" type="button" onclick="exporterPDF()">Exporter en PDF</button></div>
        </div>

        <script>
            function accepterProposition() {
                window.location.href = "URL_vers_la_page_d'acceptation";
            }

            function exporterPDF() {
                window.location.href = "URL_vers_la_page_d'export_PDF";
            }
        </script>

        </div>
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