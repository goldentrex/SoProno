<?php 

$page = $_GET['page'] ?? '404';
include './view/elements/header.php';


switch ($page) {
    case "home":
        include('view/homepage.php');
        break;
    case "quizz":
        include('view/quizz.php');
        break;
    case "quizz1":
        include('view/page_quizz1.php');
        break;
    case "quizz2":
        include('view/page_quizz2.php');
        break;
    case "results1":
        include('view/page_results1.php');
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