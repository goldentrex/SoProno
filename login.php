<?php session_start();?>


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

    <?php 
     include ('database.php');

     if(isset($_POST['login'])){
         extract($_POST);
                 
         $query = $bdd->prepare('SELECT * FROM users WHERE user_mail = :user_mail and password = :password');
         $query->execute([
             'user_mail'=> $user_mail,
             'password' => $password
            ]);
         $result = $q->fetch();
         }

         if($result){
             echo ('Vous êtes bien connecté !');
         }
    ?>




    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>