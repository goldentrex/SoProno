<?php

function dbConnection(){
    //Global $db;
    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password = '';

    try{
        //global $db;
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name, $db_user, $db_password);
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        

    }catch(PDOException $errorMsg){
        echo $errorMsg;
    }
    return $db;
}



function getUserinformation($user_mail){

    $db = dbConnection();

    $query=$db->prepare('SELECT * FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail
    ));
    $userInformations = $query->fetchAll();
    return $userInformations;
}

function getMail($user_mail){

    $db = dbConnection();

    $query=$db->prepare('SELECT * FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail
    ));
    $check = $query->fetchAll();
    return $check;
}

function setRegistration($firstname, $lastname, $user_mail, $birth_date, $hash){
   
    $db = dbConnection();

    $query = $db->prepare("INSERT INTO users(firstname, lastname, user_mail, birth_date, password) VALUES (:firstname, :lastname, :user_mail, :birth_date, :password)");
    $query->execute(array(
        'firstname' => $firstname,
        'lastname' => $lastname,
        'user_mail' => $user_mail,
        'birth_date' => $birth_date,
        'password' => $hash 
    ));   

}

// récupération des réponses

function getAnswers(){ 

    $db = dbConnection(); 

    $statement = $db->prepare("SELECT answer_text FROM answer WHERE is_valid_answer = 1"); 
    $statement->execute(); 

    $validAnswer = $statement->fetchAll(); 
    $total = array_column($validAnswer,'answer_text'); 

    return $total; 
     
} 


?>




