<?php
include('database.php');

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

function userRegistration(){
    
    if(
    isset($_POST['lastname']) &&
    isset($_POST['firstname']) &&
    isset($_POST['user_mail']) &&
    isset($_POST['birth_date']) &&
    isset($_POST['password']) &&
    isset($_POST['password2'])){
        if($_POST['password']==$_POST['password2']){
            setRegistration($_POST['lastname'],$_POST['firstname'],$_POST['user_mail'],$_POST['birth_date'],$_POST['password']);
            header('Location : ./index.php?page=login');
            exit();
        }
        else{
            echo 'les mots de passe ne correspondent pas';
        }
    }
    
}

function userConnexion() {
    userDisconnect();
    $data = getUserinformation($_POST["user_mail"]);
    if($_POST["user_mail"]==$data[0]['user_mail']){
        
        if(isset($data)){            
            if($_POST['password'] == $data[0]['password']){
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

if(isset($_POST['deconnexion'])){
    userDisconnect();
    header('Location: ./index.php?page=login');
}

if(isset($_POST['inscription'])){
    userRegistration();
}

?>