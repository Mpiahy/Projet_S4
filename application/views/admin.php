<!DOCTYPE html>
<html lang="en">

<head>
<title>
        <?php echo $title; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
        href="<?php echo base_url('assets/admin_template/assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;display=swap">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic&amp;display=swap">
    <link rel="stylesheet" href="<?php echo base_url('assets/admin_template/assets/fonts/font-awesome.min.css'); ?>">
    <link rel="icon" type="image/png"
        href="<?php echo base_url('assets/login_template/images/icons/favicon.ico'); ?>" />
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="72">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-secondary text-uppercase" id="mainNav">
        <div class="container">
            <picture><img style="text-align: left;padding-bottom: 0px;margin-bottom: -70px;margin-top: -70px;" src="<?php echo base_url('assets/admin_template/assets/img/default-removebg-preview.png'); ?>" width="174" height="176"></picture>
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>

                    <div id="navbarResponsive" class="collapse navbar-collapse">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#dashboard">Tableau de Bord</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#crud">Crud</a></li>
                            <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#code">Valider Code</a></li>
                            <li class="nav-item"><a class="nav-link py-3 px-0 px-lg-3 rounded link-danger" data-bss-hover-animate="flash" href="<?php echo base_url("Login_C/logOut"); ?>" style="margin-left: 35px;">Se déconnecter</a></li>
                        </ul>
                    </div>
                </div>
            </nav><button class="navbar-toggler text-white bg-primary navbar-toggler-right text-uppercase rounded" data-bs-toggle="collapse" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" data-bs-target="#navbarResponsive"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    <header class="text-center text-white bg-primary masthead">
        <div class="container" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: -75px;margin-top: -65px;"><img class="img-fluid d-block mx-auto mb-5" src="<?php echo base_url('assets/admin_template/assets/img/admin.png'); ?>" width="118" height="118">
            <h1 style="font-size: 28px;">Administrateur</h1>
            <hr class="star-light" style="margin-top: -7px;margin-bottom: -14px;">
            <h2 class="font-weight-light mb-0">Ici, c'est vous le patron</h2>
        </div>
    </header>

    <section id="dashboard" class="dashboard">
        <div class="container" style="padding-bottom: 0px;">
            <h3 class="text-uppercase text-center text-secondary" style="height: 12.5943px;">Tableau de bord</h3>
            <hr class="star-dark mb-5" style="height: 11.9764px;padding-bottom: 0px;">
        </div>
    </section>

    <section class="text-white bg-primary mb-0" id="crud">
        <h3 class="text-uppercase text-center text-secondary" style="height: 12.5943px;">Crud</h3>
        <div class="container">
            <hr class="star-light mb-5">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="padding-left: 0px;padding-bottom: 32px;">
                    <h3 class="text-center" style="color: var(--bs-white);font-family: Montserrat, sans-serif;"><img src="<?php echo base_url('assets/admin_template/assets/img/food.png'); ?>" width="42" height="40" style="margin-right: 13px;margin-top: -6px;">Régime Alimentaire</h3>
                </div>
                <div class="col-md-6">
                    <h3 class="text-center" style="color: var(--bs-white);font-family: Montserrat, sans-serif;"><img src="<?php echo base_url('assets/admin_template/assets/img/sport.png'); ?>" width="42" height="40" style="margin-right: 13px;margin-top: -6px;">Activité Sportive</h3>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Aliments</th>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Durée</th>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$nom_regime</td>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$durée jours</td>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$prix ariary</td>
                                    <td style="text-align: center;"><button class="btn btn-info" data-bss-hover-animate="flash" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;">Modifier</button></td>
                                    <td style="text-align: center;"><button class="btn btn-danger" data-bss-hover-animate="flash" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;">Supprimer</button></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Sports</th>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Durée</th>
                                    <th style="color: var(--bs-white);font-family: Montserrat, sans-serif;">Frais</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$nom_sport</td>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$durée jours</td>
                                    <td style="color: var(--bs-white);font-family: Montserrat, sans-serif;">$frais ariary</td>
                                    <td style="text-align: center;"><button class="btn btn-info" data-bss-hover-animate="flash" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;">Modifier</button></td>
                                    <td style="text-align: center;"><button class="btn btn-danger" data-bss-hover-animate="flash" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;">Supprimer</button></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="text-align: center;margin-top: 24px;"><button class="btn btn-secondary" data-bss-hover-animate="pulse" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;"><img src="<?php echo base_url('assets/admin_template/assets/img/plus.png'); ?>" width="30" height="23" style="margin-right: 13px;margin-top: 0px;">Ajouter un aliment</button></div>
                <div class="col-md-6" style="text-align: center;margin-top: 24px;"><button class="btn btn-secondary" data-bss-hover-animate="pulse" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;"><img src="<?php echo base_url('assets/admin_template/assets/img/plus.png'); ?>" width="30" height="23" style="margin-right: 13px;margin-top: 0px;">Ajouter un sport</button></div>
            </div>
        </div>
    </section>

    <br>
    <br>

    <section id="code">
        <div class="container">
            <h3 class="text-uppercase text-center text-secondary mb-0">Validation code de recharge</h3>
            <hr class="star-dark mb-5" style="margin-top: 24px;margin-bottom: 38px;padding-bottom: 0px;padding-top: 0px;">
        </div>
        <div class="container" style="margin-top: -45px;">
            <div class="row">
                <div class="col-md-4 col-xxl-2">
                    <h4 class="text-center">Utilisateur</h4>
                </div>
                <div class="col-md-4 col-xxl-3 text-center">
                    <h4 class="text-end">Code</h4>
                </div>
                <div class="col-md-4 col-xxl-3">
                    <h4 class="text-end">Valeur</h4>
                </div>
                <div class="col-xxl-4">
                    <h4 class="text-center">Opération</h4>
                </div>
                <div class="w-100"></div>
                <div class="w-100"></div>
                <div class="w-100"></div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xxl-2">
                    <h6 class="display-6 text-center" style="font-size: 22px;">$user</h6>
                </div>
                <div class="col-md-4 col-xxl-3">
                    <h6 class="display-6 text-end" style="font-size: 22px;"><?php echo $vola['id']; ?></h6>
                </div>
                <div class="col-md-4 col-xxl-3">
                    <h6 class="display-6 text-end" style="font-size: 22px;">$valeur Ar</h6>
                </div>
                <div class="col" style="text-align: center;"><button class="btn btn-primary" data-bss-hover-animate="pulse" type="button" style="font-family: Montserrat, sans-serif;font-size: 14px;">Accepter</button><button class="btn btn-danger" data-bss-hover-animate="flash" type="button" style="margin-left: 30px;font-family: Montserrat, sans-serif;font-size: 14px;">Refuser</button></div>
            </div>
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
    
    <script src="<?php echo base_url('assets/admin_template/assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin_template/assets/js/freelancer.js'); ?>"></script>
</body>

</html>