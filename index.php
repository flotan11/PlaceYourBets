<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="entete">
    <?php
    $connexion = 2;
    if ($connexion === 2) { ?>
        <ul>
            <li><a href="#">Connexion</a></li>
            <li><a href="inscription.php">Inscription</a></li>
        </ul>
    <?php } else { ?>
        <ul>
            <li><a href="#">Deconnexion</a></li>
        </ul>
    <?php } ?>
</div>

<div id="menu">
    <p>
        Bienvenue bonhomme, t'as envie de parier avec tes pote, tu te trouves au bon endroit
    </p>
</div>
</body>
</html>