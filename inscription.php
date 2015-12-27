<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="connexion.php" method="post" id="inscriptionform">
    <ul>
        <li><h1>Inscription :</h1></li>
        <br>
        <li>Nom :</li>
        <li><input type="text" name="surname"></li>
        <br>
        <li>Prenom :</li>
        <li><input type="text" name="name"></li>
        <br>
        <li>Age :</li>
        <li><input type="text" name="age"></li>
        <br>
        <li>Pseudo :</li>
        <li><input type="text" name="pseudo"></li>
        <br>
        <li>e-mail</li>
        <li><input type="email" name="mail"></li>
        <br>
        <li>Mot de passe :</li>
        <li><input type="password" name="mdp1"></li>
        <br>
        <li>Vérification du mot de passe :</li>
        <li><input type="password" name="mdp2"></li>
        <br>
        <li><input type="submit"></li>
    </ul>
</form>
<?php
session_start();
if (isset($_SESSION["erreur"])) {
    $st = strtok($_SESSION["erreur"], "-");
    while ($st !== false) {
        switch ($st) {
            case "1":
                echo "Nom manquant";
                break;
            case "2":
                echo "Prenom manquant";
                break;
            case "3":
                echo "Age manquant";
                break;
            case "4":
                echo "Pseudo manquant";
                break;
            case "5":
                echo "Mail manquant";
                break;
            case "6":
                echo "Mot de passe manquant";
                break;
            case "7":
                echo "Deuxième mot de passe manquant";
                break;
            case "71":
                echo "Le deuxième mot de passe ne correspond pas au premier";
                break;
        $st = strtok("-");
        }
    }
}
unset($_SESSION["erreur"]);
?>
</body>
</html>
