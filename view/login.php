
<?php session_start(); ?>

<!DOCTYPE html>

<section id="login">

<?php 
include ('database.php');
// require ('checkUser.php');
?>

<html>
<head>
    <title>Connexion</title>
    <link rel="stylesheet" href="view/css/style.css" />
    <link rel="stylesheet" href="view/css/login.css" />
</head>
<body>
    <?php //include 'header.php'?>


    <div class="connexion">
       Page de connexion, pas de compte ?
       <p href="register.php"> Créez votre compte ici ! </p>
    </div>

    <?php if(isset($load_page['errMsg'])) echo 'Identifiant ou mot de passe non reconnus !';?>

    <form method="post" action="quizz.php">
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

    </section>



    <?php

    dbConnection();
    $query = $db->prepare('SELECT user_mail, password FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail
    ));
    $result = $query->fetch();

    if($_POST['password'] == $result['password']){
        echo 'mot de passe incorrect';
    }
    else{
        session_start();
        $_SESSION['user_mail'] = $user_mail;
        echo 'vous êtes maintenant connecté !';
        //header('Location : quizz.php');
    }

    




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




    <footer>
        <?php //include 'footer.php'?>
    </footer>
</body>
</html>