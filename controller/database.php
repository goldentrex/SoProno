<?php

function dbConnection(){

    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password = '';

    try{
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name, $db_user, $db_password);
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        // echo 'bdd connecté !';

    }catch(PDOException $errorMsg){
        echo $errorMsg;
    }

    return $db;
}


function getUserinformation($user_mail){

    $db = dbConnection();

    $query = $db->prepare('SELECT * FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail
    ));
    $userInformations = $query->fetchAll();
    return $userInformations;
}

// a finir pour étape suivante et inscription
function setRegistration($lastname, $firstname, $user_mail, $birth_date, $password){
    $db = dbConnection();

    $query = $db->prepare('INSERT INTO users( lastname, firstname, user_mail, birth_date, password) VALUES (:lastname, :firstname, :user_mail, :birth_date, :password' );
    $query->execute(array(
        'lastname' => $lastname,
        'firstname' => $firstname,
        'user_mail' => $user_mail,
        'bith_date' => $birth_date,
        'password' => $password
    ));

}



// récupération des réponses
function getGoodAnswers($idAnswers){
    $db = dbConnection();

    $query =$db->prepare('SELECT * FROM answers WHERE idAnswers=:id');
    $query->execute(array(
        'id'=>$idAnswers
    ));
    $goodAnswers = $query->fetchAll();
    return $goodAnswers;
}


?>

