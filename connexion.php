<?php
/*
$nom = mysql_real_escape_string($_POST["surname"]);
$prenom = mysql_real_escape_string($_POST["name"]);
$age = mysql_real_escape_string($_POST["age"]);
$pseudo = mysql_real_escape_string($_POST["pseudo"]);
$mail = mysql_real_escape_string($_POST["mail"]);
$mdp1 = mysql_real_escape_string($_POST["mdp1"]);
$mdp2 = mysql_real_escape_string($_POST["mdp2"]);
 */
$nom = $_POST["surname"];
$prenom = $_POST["name"];
$age = $_POST["age"];
$pseudo = $_POST["pseudo"];
$mail = $_POST["mail"];
$mdp1 = $_POST["mdp1"];
$mdp2 = $_POST["mdp2"];

session_start();


if ($nom == "") {
    $_SESSION["erreur"] += "-1";
    header("Location:inscription.php");
}
if ($prenom == "") {
    $_SESSION["erreur"] += "-2";
    header("Location:inscription.php");
}
if ($age == "") {
    $_SESSION["erreur"] += "-3";
    header("Location:inscription.php");
}
if ($pseudo == "") {
    $_SESSION["erreur"] += "-4";
    header("Location:inscription.php");
}
if ($mail == "") {
    $_SESSION["erreur"] += "-5";
    header("Location:inscription.php");
}
if ($mdp1 == "") {
    $_SESSION["erreur"] += "-6";
    header("Location:inscription.php");
}
if ($mdp2 == "") {
    $_SESSION["erreur"] += "-7";
    header("Location:inscription.php");
}
if ($mdp2 != $mdp1) {
    $_SESSION["erreur"] += "-71";
    header("Location:inscription.php");
}

echo $nom;
echo $prenom;
echo $age;
echo $pseudo;
echo $mail;
echo $mdp1;
echo $mdp2;
?>