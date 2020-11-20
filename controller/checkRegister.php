<?php

function isRegistered(){
}

function userRegistration(){
    $data = getUserinformation($_POST["user_mail"]);
    if(
    isset($_POST['lastname']) &&
    isset($_POST['firstname']) &&
    isset($_POST['user_mail']) &&
    isset($_POST['birth_date']) &&
    isset($_POST['password']) &&
    isset($_POST['password_confirmation'])){
        if($_POST['password']==$_POST['password_confirmation']){
            // && ($_POST["user_mail"]==$data[0]['user_mail']

// ------------------------ Fonction de hashage : source : manuel php : https://www.php.net/manual/fr/function.password-hash.php ------------------------
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $registercheck = setRegistration($_POST['lastname'],$_POST['firstname'],$_POST['user_mail'],$_POST['birth_date'],$hash);
            
        }
        else{
            echo('adresse déjà utiliser les mots de passe ne correspondent pas');
            return('adresse déjà utiliser les mots de passe ne correspondent pas');
        }
    }
    else{
        return('informations érronées');
    }
 
}

// Vérification pour l'inscription

if(isset($_POST['inscription'])){
    $userRegistration = userRegistration();
    if($userRegistration=="les mots de passe ne correspondent pas" || $userRegistration=="informations érronées"){
        header('Location: ./index.php?page=register');
        exit();
    } 
    else {
        header('Location: ./index.php?page=login');
        exit();

    }
}

?>