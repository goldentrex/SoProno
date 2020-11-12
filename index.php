<?php 
session_start();

include('controller/checkUser.php');

$page = $_GET['page'] ?? '404';
include './view/elements/header.php';


$errorMsg = "";


switch ($page) {
    case "home":
        include('view/homepage.php');
        break;
    case "quizz":
        if (isConnected()==1){
            include('view/quizz.php');
        }
        else{
            $errorMsg .= '<a href="'."index.php?page=login".'">'."Veuillez vous connecter pour accéder aux questions".'</a>';
            echo $errorMsg;
        }
        break;
    case "quizz1":
        include('view/page_quizz1.php');
        break;
    case "results1":
        include('./controller/page_results.php');
        break;
    case "login":
        include('view/login.php');
        break;
    case("register"):
        include('view/register.php');
        break;
    case "matchs":
        include('view/matchs.php');
        break;
    case("prono"):
        include('view/prono.php');
        break;
    }

include './view/elements/footer.php' ;
?>