<?php
include('database.php');

function isConnected() : bool {
    return !empty($_SESSION['connected']);
}

function userConnexion() {
 
    if(!empty($_POST["user_mail"]) && !empty($_POST["password"])){
        $data = getUserinformation($_POST["user_mail"]);

        //Comparaison des adresses :
        if(isset($data)){
            //si comparaison ok, comparaison des mdp
            if($_POST['password'] == $data[0]['password']){
                //si comparaison ok, connexion
                $_SESSION["connecter"]=1;
                header('Location: ../index.php?page=quizz ');
                exit();
            }
            //sinon connexion echoué
            else{
                echo 'connexion echouee - reessayer';
            }
            echo 'mail incorrect';
        }
    }
}
userConnexion();

?>