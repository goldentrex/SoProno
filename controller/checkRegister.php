<?php

// function isRegistered(){
//     if(isset($_POST['user_mail'])){
//         $checkmail = getMail($_POST['user_mail']);
//         if(!empty($checkmail)){
//             return 1;
//         }
//         else{
//             return 0;
//         }
//     }
// }

function userRegistration(){
    
    if(
    isset($_POST['lastname']) &&
    isset($_POST['firstname']) &&
    isset($_POST['user_mail']) &&
    isset($_POST['birth_date']) &&
    isset($_POST['password']) &&
    isset($_POST['password_confirmation'])){
        if($_POST['password']==$_POST['password_confirmation'] && $_POST["user_mail"]!=$data[0]['user_mail']){

// ------------------------ Fonction de hashage : source : manuel php : https://www.php.net/manual/fr/function.password-hash.php ------------------------
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $registercheck = setRegistration($_POST['lastname'],$_POST['firstname'],$_POST['user_mail'],$_POST['birth_date'],$hash);
            return(true);
            
        }
        else{
            return(false);
        }

    }
    else{
        return(false);
    }
 
}


//  && $_POST["user_mail"]==$data[0]['user_mail']
// Vérification pour l'inscription
// $h=isRegistered();
// var_dump($h);


if(isset($_POST['inscription'])){
    //if(isRegistered()==0){
    
        $userRegistration = userRegistration();
        if($userRegistration==false){
            header('Location: ./index.php?page=register');
            exit();
        } 
        elseif($userRegistration==true) {
            header('Location: ./index.php?page=login');
            exit();
    
        }

    // }else{
    //     echo('adresse deja utilisée');
    // }
   
}

?>