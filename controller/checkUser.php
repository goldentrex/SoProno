<?php

// include('/model/database.php');

function isConnected() : bool {
    return !empty($_SESSION['connected']);
}
// function userConnexion(){

//     $data = getUserinformation(['user_mail'],['password']);
//     if($_POST['password'] != $data['password']){
//         echo 'mot de passe incorrect';
//     }
//     else{
//         $_SESSION['user_mail'] = $data;
//     }
    
//     header('Location: quizz.php');
//     exit();
// }
 
    





?>