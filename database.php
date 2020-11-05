<?php

function dbConnection(){
    
    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password ='';

    try{
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name. $db_user . $db_password);
        $db->setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXCEPTION);

    }catch(PDOException $errorMsg){
        echo $errorMsg;
    }

    return $db;
}



function getUserinformation(){
    $db = dbConnection();
    
    if(isset($_POST['connexion'])){
        if(!empty($user_mail) && !empty($password)){
            $query = $db->prepare("SELECT * FROM users WHERE user_mail=:user_mail");
            $query->execute([
                'user_mail'=> $user_mail
            ]);

            $result = $query->fetch(PDO::FETCH_ASSOC);
        }
    }
    $query->closeCursor();
    return $result;
}

// function getUserinformation($firstname,$lastname,$user_mail,$birth_date,$password){

// }





