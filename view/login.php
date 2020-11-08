<!DOCTYPE html>

<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="view/css/style.css" />
    <link rel="stylesheet" href="view/css/register.css" />
</head>
<body>
    <div class="intro_account">
       Page de connexion, pas de compte ?
       <p><a href="index.php?page=register"> Inscrivez vous ici !</a> </p>
    </div>

    <form method="post" action="index.php">
        <p>
            <label for="name">Identifiant :</label><br />
            <input type="mail" name="user_mail" id="user_mail" required/>
        </p><br />

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="user_password" required/>
        </p><br />

        <input type="submit" value="Se connecter !" id="login">

        
    </form>

</body>
</html>