<!DOCTYPE html>


<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/login.css" />
</head>
<body>
    <?php include 'header.php'?>


    <div class="connexion">
       Page de connexion
    </div>

    <form method="post">
        <p>
            <label for="name">Identifiant :</label><br />
            <input class="box" type="mail" name="name" id="user_mail" required/>
        </p><br />

        <p> 
            <label for="password">Mot de passe :</label>
            <input class="box" type="password" name="password" id="user_password" required/>
        </p><br />

        <input type="submit" value="Se connecter !" id="login">
    </form>




    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>