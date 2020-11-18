<?php
include('database.php');


function isRegistered(){

}

function userRegistration(){
    
    if(
    isset($_POST['lastname']) &&
    isset($_POST['firstname']) &&
    isset($_POST['user_mail']) &&
    isset($_POST['birth_date']) &&
    isset($_POST['password']) &&
    isset($_POST['password_confirmation'])){
        if($_POST['password']==$_POST['password_confirmation']){

// ------------------------ Fonction de hashage : source : manuel php : https://www.php.net/manual/fr/function.password-hash.php ------------------------
            $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $registercheck = setRegistration($_POST['lastname'],$_POST['firstname'],$_POST['user_mail'],$_POST['birth_date'],$hash);
            
        }
        else{
            return('les mots de passe ne correspondent pas');
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
    } 
    else {
        header('Location: ./index.php?page=home');
    }
}

function userDisconnect(){
    $_SESSION=array();
}


function isConnected() {
    if(isset($_SESSION["connected"])){
        return 1;
    }
    else{
        return 0;
    }
}

function userConnexion() {
    userDisconnect();
    $data = getUserinformation($_POST["user_mail"]);
    if($_POST["user_mail"]==$data[0]['user_mail']){
        
        if(isset($data)){            
            if (password_verify($_POST['password'],$data[0]['password'])){
                $_SESSION["connected"]=1;               
            }
                //sinon connexion echoué
            else{
                return ('Le mot de passe est incorrect');
            }            
        }   
    }else{
       return('Le mail est incorrect');
    } 
}

// Vérification de connexion -- redirection si erreur
if(isConnected()==0){
    if(isset($_POST["user_mail"])){
        $result=userConnexion();
        echo($result);
        if( userConnexion()=='Le mot de passe est incorrect'|| userConnexion()=='Le mail est incorrect'){
            header('Location: ./index.php?page=login');
            exit();
        }else{
            header('Location: ./index.php?page=home');
            exit();
        }
    }
}

// Vérification pour la déconnexion
if(isset($_POST['deconnexion'])){
    userDisconnect();
    header('Location: ./index.php?page=login');
}

?>