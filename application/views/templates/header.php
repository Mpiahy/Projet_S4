<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <title><?php echo $title; ?></title>
</head>
<body>
    <div class="wrap">
        <div id="header">
            <a href="/"><img src="/css/img/logo.png" alt="logo" /></a>
            <ul id="navigation">
                <li><?php echo anchor(base_url(), 'Accueil'); ?></li>
                <li><?php echo anchor('services', 'Services'); ?></li>
                <li><?php echo anchor('about', 'A propos'); ?></li>
                <li><?php echo anchor('contact', 'Contact'); ?></li>
            </ul>
        </div><!-- end header -->
    
</body>

</html>