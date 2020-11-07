<?php

function dbConnection(){

    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password = 'root';

    try{
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name, $db_user, $db_password);
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        echo 'bdd connecté !';

    }catch(PDOException $errorMsg){
        echo $errorMsg;
    }

    return $db;
}


function getUserinformation($user_mail){

    $db = dbConnection();
<<<<<<< Updated upstream:controller/database.php
 
    $query = $db->prepare('SELECT * FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail,
    ));
    $userInformations = $query->fetchAll();
    return $userInformations;
}

?>





=======

    if(isset($_POST['login'])){
        if(!empty($user_mail) && !empty($password)){
            $query = $db->prepare("SELECT * FROM users WHERE user_mail=:user_mail");
            $query->execute(array(
                'user_mail'=> $user_mail
            ));

            $data = $query->fetch(PDO::FETCH_ASSOC);
        }
    }
    $query->closeCursor();
    return $data;
}


// function getUserinformation(){
//     require ('login.php');

//     dbConnection();

//     $query = $db->prepare('SELECT user_mail, password FROM users WHERE user_mail=:user_mail');
//     $query->execute(array(
//         'user_mail'=>$user_mail
//     ));
//     $result = $query->fetch();

//     if($_POST['password'] == $result['password']){
//         echo 'mot de passe incorrect';
//     }
//     else{
//         session_start();
//         $_SESSION['user_mail'] = $user_mail;
//         echo 'vous êtes maintenant connecté !';
//         header('Location : quizz.php');
//     }
// }
>>>>>>> Stashed changes:model/database.php
