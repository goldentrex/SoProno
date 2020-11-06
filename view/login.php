
<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="view/css/style.css" />
    <link rel="stylesheet" href="view/css/register.css" />
</head>
<body>
    <?php //include 'header.php'?>


    <div class="intro_account">
       Page de connexion, pas de compte ?
       <p><a href="index.php?page=register"> Inscrivez vous ici !</a> </p>
    </div>

    <?php if(isset($load_page['errMsg'])) echo 'Identifiant ou mot de passe non reconnus !';?>

    <form method="post" action="quizz.php">
        <p>
            <label for="name">Identifiant :</label><br />
            <input type="mail" name="name" id="user_mail" required/>
        </p><br />

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="user_password" required/>
        </p><br />

        <input type="submit" value="Se connecter !" id="login">
    </form>

    </section>



    <?php

    // dbConnection();
    // $query = $db->prepare('SELECT user_mail, password FROM users WHERE user_mail=:user_mail');
    // $query->execute(array(
    //     'user_mail'=>$user_mail
    // ));
    // $result = $query->fetch();

    // if($_POST['password'] == $result['password']){
    //     echo 'mot de passe incorrect';
    // }
    // else{
    //     session_start();
    //     $_SESSION['user_mail'] = $user_mail;
    //     echo 'vous êtes maintenant connecté !';
    //     //header('Location : quizz.php');
    // }

    




    // $datacompare = getUserinformation(['user_mail'],['password']);


    // if (!$datacompare){
    //     echo 'Vous ne semblez pas inscrits';
    // }

    // else{
    //     userConnexion();
    // }


    //  if(isset($_POST['login'])){
    //      extract($_POST);

    //      $db = dbConnection();
            
    //      $query = $db->prepare('SELECT * FROM users WHERE user_mail = :user_mail');
    //      $query->execute([
    //          'user_mail'=> $user_mail
    //         ]);
    //      $result = $query->fetch();

    //      if($result && $password == ['password']){
    //          echo ('vous êtes connecté');
    //      }


            
        //  }

        
    ?>

</body>
</html>