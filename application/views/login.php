<!DOCTYPE html>
<html lang="fr">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login_template/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/bootstrap/css/bootstrap.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/fonts/iconic/css/material-design-iconic-font.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/animate/animate.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/css-hamburgers/hamburgers.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/animsition/css/animsition.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/select2/select2.min.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?php echo base_url('assets/login_template/vendor/daterangepicker/daterangepicker.css'); ?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/util.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login_template/css/main.css'); ?>">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo base_url('assets/login_template/images/bg-01.jpg'); ?>')">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form"  method="post" action ="<?php echo base_url("Login_C/traiteLogin") ?>">
                    <span class="login100-form-title p-b-49">
                        Se connecter
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate="Email ou Nom D'utilisateur requis">
                        <span class="label-input100">Email </span>
                        <input class="input100" type="text" name="email"
                            placeholder="Votre Email ...">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Mot de passe requis">
                        <span class="label-input100">Mot de passe</span>
                        <input class="input100" type="password" name="password" placeholder="Votre Mot de passe">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <div class="text-right p-t-8 p-b-31">
                        <a href="#">
                            Mot de passe oublié?
                        </a>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Se connecter
                            </button>
                        </div>
                    </div>

                    <div class="txt1 text-center p-t-54 p-b-20">
                        <span>
                            Ou
                        </span>
                    </div>
                    <div class="flex-col-c p-t-15">
                        <a href="<?php echo base_url('index.php/Login_C/signup'); ?>" class="txt2">
                            S'inscrire
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