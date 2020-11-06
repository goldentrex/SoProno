<?php

function is_Connected() : bool {
    return !empty($_SESSION['connected']);
}

function userConnexion() {
    $error ='';
    $userInformations = getUserinformation($_POST['user_mail'],$_POST['password']);

    if(!empty($_POST)){

        if(!empty($_POST['user_mail'])){
            $error = 'veuillez entrer votre mail';
        }

    

        if(!empty($_POST['user_mail'])) != $userInformations['user_mail']){
            echo "l'adresse mail n'existe pas";
        }
        
    }

   
   
    else{
        $_SESSION['user_mail'] = $userInformations;
    }
    header('Location: quizz.php');
    
}

?>