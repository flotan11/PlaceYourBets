<ul>
    <div onmouseover="$('#connexion').show()" onmouseout="$('#connexion').hide()">
        <li class="li_entete">
            <a href="#">Connexion</a>
        </li>
        <li id="connexion">
            <form action=" connexion.php" method="get">
                <ul>
                    <li>
                        Mail :
                    </li>
                    <li>
                        <input type="text" name="mail">
                    </li>
                    <br>
                    <li>
                        Mot de passe :
                    </li>
                    <li>
                        <input type="password" name="mdp">
                    </li>
                    <br>
                    <li>
                        <input type="submit">
                    </li>
                </ul>
            </form>
        </li>
    </div>
    <li class="li_entete">
        <a href="inscription.php">Inscription</a>
    </li>
</ul>