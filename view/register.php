<!DOCTYPE html>


<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="view/css/style.css"/>
    <link rel="stylesheet" href="view/css/register.css" />
</head>
<body>
    
    <div class="intro_account">
       Page d'inscription, déjà un compte ?
       <p> <a href="index.php?page=login"> Connectez vous ici !</a> </p>
    </div>

    <form method="post" action="index.php">
        <p>
            <label for="name">Votre nom :</label><br />
            <input type="text" name="lastname" id="lastname" placeholder="Nom" required/>
        </p><br />

        
        <p>
            <label for="prenom">Votre prénom :</label><br />
            <input type="text" name="firstname" id="firstname" placeholder="Prenom" required/>
        </p><br />

        
        <p>
            <label for="mail">Votre adresse mail :</label><br />
            <input type="mail" name="user_mail" id="user_mail" placeholder="Mail" required/>
        </p><br />

        <p> 
            <label for="birth_date">Votre date de naissance :</label><br />
            <input type="date" name="birth_date" id="birth_date" required/>
        </p><br />

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="password" placeholder="Mot de passe" required />
        </p><br />

        <p> 
            <label for="password">Confirmez votre mot de passe :</label><br />
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmer le mot de passe"/>
        </p><br />

        <p><input type="submit" name="inscription" value="inscription" id="inscription"></p>
    </form>
    

</body>
</html>