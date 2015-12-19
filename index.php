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
    if ($connexion === 2): ?>
        <ul>
            <li><a href="#" onclick="document.getElementById('connexion').style.display = 'block';">Connexion</a>
            </li>
            <li style="display: none" id="connexion">
                <form action="connexion.php" method="get">
                    <ul>
                        <li>Mail :</li>
                        <li><input type="text" name="mail"></li>
                        <br>
                        <li>Mot de passe :</li>
                        <li><input type="password" name="mdp"></li>
                        <br>
                        <li><input type="submit"></li>
                    </ul>
                </form>
            </li>
            <li><a href="inscription.php">Inscription</a></li>
        </ul>
    <?php else: ?>
        <ul>
            <li><a href="#">Deconnexion</a></li>
        </ul>
    <?php endif ?>
</div>

<div id="menu">
    <p>
        Bienvenue bonhomme, t'as envie de parier avec tes pote, tu te trouves au bon endroit
    </p>
</div>
</body>
</html>