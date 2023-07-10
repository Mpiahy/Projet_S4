<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/animsition/css/animsition.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/main.css'); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo base_url('assets/login_template/images/bg-01.jpg'); ?>')">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-20 p-b-54">
                <form class="login100-form validate-form"  method="post" action ="<?php echo base_url("Login_C/insertUsers") ?>">
                    <span class="login100-form-title p-b-20">
                        S'inscrire
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Nom d'utilisateur requis">
                        <span class="label-input100">Nom d'utilisateur</span>
                        <input class="input100" type="text" name="username" placeholder="Votre Nom d'utilisateur">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email requis">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Votre Email">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Genre requis">
                        <span class="label-input100">Genre</span>
                        <select class="input100" name="gender">
                            <option value="0">Votre Genre</option>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>


                    <div class="wrap-input100 validate-input m-b-23" data-validate="Taille requis">
                        <span class="label-input100">Taille</span>
                        <input class="input100" type="number" name="height" placeholder="Votre Taille en cm">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Poids requis">
                        <span class="label-input100">Poids</span>
                        <input class="input100" type="number" name="weight" placeholder="Votre Poids en Kg">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Mot de passe requis">
                        <span class="label-input100">Mot de passe</span>
                        <input class="input100" type="password" name="pass" placeholder="Votre Mot de passe">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Mot de passe requis">
                        <span class="label-input100">Confirmer votre Mot de passe</span>
                        <input class="input100" type="password" name="pass" placeholder="Confirmer votre Mot de passe">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                S'inscrire
                            </button>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Vous avez déjà un compte?
                        </span>
                    </div>
                    <div class="flex-col-c p-t-15">
                        <a href="<?php echo base_url('index.php/Login_C/index'); ?>" class="txt2">
                            Se connecter
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/animsition/js/animsition.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login_template/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/select2/select2.min.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/vendor/countdowntime/countdowntime.js'); ?>"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login_template/js/main.js'); ?>"></script>

</body>

</html>