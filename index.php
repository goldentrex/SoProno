<?php 
session_start();

include('controller/checkUser.php');

$page = $_GET['page'] ?? '404';
include './view/elements/header.php';


switch ($page) {
    case "home":
        include('view/homepage.php');
        break;
    case "quizz":
        if (isConnected()==1){
            include('view/quizz.php');
        }
        else{
            echo ('<p> Vous ne pouvez pas accéder aux quizz sans être connecté ! </p>');
        }
        break;
    case "quizz1":
        include('view/page_quizz1.php');
        break;
    case "quizz2":
        include('view/page_quizz2.php');
        break;
    case "results1":
        include('./controller/page_results1.php');
        break;
    case "results2":
        include('view/page_results2.php');
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