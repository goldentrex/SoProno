<?php

function dbConnection(){

    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password = 'root';

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
<<<<<<< HEAD
function getAnswers(){
    $db = dbConnection();
    $statement = $db->prepare("SELECT answer_text FROM answer WHEN is_valid_answer == 1");
    $statement -> execute();
    $validAnswer = $statement->fetchAll();
    return validAnswer;

}





=======

// function getGoodAnswers(){
   
//     $db = dbConnection();

//     $query = $db->prepare("SELECT answer_text FROM answer WHERE is_valid_answer = 1");
//     $query->execute(array[]
//     ));


    

// }

function getAnswers(){
    $db = dbConnection();
    $statement = $db->prepare("SELECT answer_text FROM answer WHERE is_valid_answer = 1");
    $statement->execute();
    $validAnswer = $statement->fetchAll();
    $total = array_column($validAnswer,'answer_text');
    return $total;
    
}


<<<<<<< HEAD

=======
// function getAnswers(){
//     $db = dbConnection();
// ​    $query = $db->prepare("SELECT answer_text FROM answer WHEN is_valid_answer == 1");
//     $query -> execute();
//     $validAnswer = $query->fetchAll();
//     return $validAnswer;
// }​​​​
>>>>>>> php_v2
>>>>>>> php_v2

?>




