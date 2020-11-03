<!DOCTYPE html>


<html>
<head>
    <title>Inscription</title>
    <link rel="styleshett" href="style.css"/>
    <link rel="stylesheet" href="accountpage_style.css" />
</head>
<body>
    <?php include 'header.php'?>
    
    <div class="intro_account">
       Page d'inscription
    </div>

    <form method="post">
        <p>
            <label for="name">Votre nom :</label><br />
            <input type="text" name="mail_adress" id="name" placeholder="Nom"/>
        </p><br />

        
        <p>
            <label for="prenom">Votre prénom :</label><br />
            <input type="text" name="prenom" id="user_name" placeholder="Prenom"/>
        </p><br />

        
        <p>
            <label for="mail">Votre adresse mail :</label><br />
            <input type="mail" name="mail_adress" id="user_mail" placeholder="Mail"/>
        </p><br />

        <p> 
            <label for="birth_date">Votre date de naissance :</label><br />
            <input type="date" name="birth_date" id="user_birth"/>
        </p><br />

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="user_password" placeholder="Mot de passe" />
        </p><br />

        <p> 
            <label for="password">Confirmez votre mot de passe :</label><br />
            <input type="password" name="password2" id="password_confiramtion" placeholder="Confirmer le mot de passe"/>
        </p><br />

        <p><input type="submit" value="Inscription"></p>



    
    </form>
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>