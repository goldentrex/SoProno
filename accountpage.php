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


    <?php 
        include ('accountpage.php, database.php');
        if(isset($_POST['inscription'])){
            extract($_POST);


            
            if($password == $password_confirmation){
                    
                $query = $db->prepare('INSERT INTO users(firstname,lastname,user_mail,birth_date,password) VALUES(:firstname, :lastname, :user_mail ,:birth_date,:password)');
                $query->execute([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'birth_date' => $birth_date,
                    'user_mail' => $user_mail,
                    'password' => $password
                ]);
                

                }else{
                    echo ('vos mots de passe ne correspondent pas !');
                }
                


            }
        
        
    ?>
    
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>