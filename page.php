<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<?php
echo "<div id='menu'>";
include("index.php");
echo "</div>";

echo "<div id='entete'>";
if ($_GET["connexion"] == "true"):
    include("entete_connecte.php");
else:
    include("entete_deconnecte.php");
endif;
echo "</div>";
?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</html>