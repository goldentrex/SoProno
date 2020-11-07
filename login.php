<!DOCTYPE html>


<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <?php include 'header.php'?>


    <div class="connexion">
       Page de connexion
    </div>

    <form method="post">
        <p>
            <label for="name">Identifiant :</label><br />
            <input class="box" type="mail" name="name" id="user_mail"/>
        </p><br />

        <p>
            <label for="password">Mot de passe :</label>
            <input class="box" type="password" name="password" id="user_password" />
        </p><br />

        <input type="submit" value="Se connecter !">
    </form>




    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>
