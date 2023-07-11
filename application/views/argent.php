<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Votre solde:</h2>
    <form method="post" action ="<?php echo base_url("Argent_C/traitement"); ?>">
    <input type="texte" name ="code">
    <button>VAlIDER</button>
    <h2><?php echo $argent['vola'] ; ?></h2>

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
</body>
</html>