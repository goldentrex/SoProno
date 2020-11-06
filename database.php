<?php

function dbConnection(){
    
    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password = '';

    try{
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name, $db_user, $db_password);
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);
        echo('connection success');

    }catch(PDOException $errorMsg){
        echo 'non connecté' ;
    }
    return $db;
}



function getUserinformation($user_mail,$password){

    $db = dbConnection();
 
    $query = $db->prepare('SELECT * FROM users WHERE user_mail=:user_mail');
    $query->execute(array(
        'user_mail'=>$user_mail,
    ));
    $userInformations = $query->fetchAll();
    return $userInformations;
    echo $userInformations ;
}







// function getUserinformation($user_mail, $password){
//     $db = dbConnection();
    
//     if(isset($_POST['login'])){
//         if(!empty($user_mail) && !empty($password)){
//             $query = $db->prepare("SELECT user_mail, password FROM users WHERE user_mail=:user_mail");
//             $query->execute(array(
//                 'user_mail'=> $user_mail
//             ));

//             $data = $query->fetch(PDO::FETCH_ASSOC);
//         }
//     }
//     $query->closeCursor();
//     return $data;
// }



