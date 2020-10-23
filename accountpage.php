<!DOCTYPE html>


<html>
<head>
    <title>Inscription</title>
    <link rel="stylesheet" href="accountpage_style.css" />
</head>
<body>
    <?php include 'header.php'?>
    
    <div class="intro_account">
       Page d'inscription
    </div>

    <form method="post" >


    <div>
        <div>
            <label for="name">Votre nom</label><br />
            <input type="text" name="name" id="name"/>
        </div><br />

        <div>
         <div>
            <label for="prenom">Votre prénom</label><br />
            <input type="text" name="prenom" id="prenom"/>
        </div><br />

        <div>
         <div>
            <label for="mail">Votre adresse mail</label><br />
            <input type="mail" name="mail_adress" id="mail"/>
        </div><br />

        <div> 
            <label for="birth_date">Votre date de naissance :</label>
            <input type="date" name="birth_date" id="birth" />
        </div><br />

        <div> 
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" />
        </div><br />

        <div> 
            <label for="password">Confirmez votre mot de passe</label>
            <input type="password" name="password2" id="password_confiramtion" />
        </div><br />

    </div>

    
    </form>
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>