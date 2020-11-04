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
        <!-- <p>
            <label for="name">Votre nom :</label><br />
            <input type="text" name="mail_adress" id="name" placeholder="Nom"/>
        </p><br />

        
        <p>
            <label for="prenom">Votre prénom :</label><br />
            <input type="text" name="prenom" id="user_name" placeholder="Prenom"/>
        </p><br /> -->

        
        <p>
            <label for="mail">Votre adresse mail :</label><br />
            <input type="mail" name="user_mail" id="user_mail" placeholder="Mail"/>
        </p><br />

        <!-- <p> 
            <label for="birth_date">Votre date de naissance :</label><br />
            <input type="date" name="birth_date" id="user_birth"/>
        </p><br /> -->

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="password" placeholder="Mot de passe" required />
        </p><br />

        <p> 
            <label for="password">Confirmez votre mot de passe :</label><br />
            <input type="password" name="password2" id="password2" placeholder="Confirmer le mot de passe"/>
        </p><br />

        <p><input type="submit" name="inscription" value="inscription" id="inscription"></p>
    </form>


    <?php 
        if(isset($_POST['inscription'])){
            extract($_POST);
            if(!empty($user_mail)&&!empty($password)&&!empty($password2)){
                if($password == $password2){
                    include 'database.php';
                    global $db;

                    $query = $db->prepare("INSERT INTO users(user_mail,password) VALUES(:user_mail,:password)");
                    $query->execute([
                        'user_mail'=>$user_mail,
                        'password' => $password
                    ]);


                }

            }
        }
    ?>
    
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>