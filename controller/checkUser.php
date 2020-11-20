<?php



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