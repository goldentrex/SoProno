<?php 
session_start();


include('controller/database.php');
include('controller/check_answer.php');
include('controller/checkRegister.php');
include('controller/checkUser.php');

$db = dbConnection();


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
            $errorMsg .= '<a class="intro_account" href="'."index.php?page=login".'">'."Veuillez vous connecter pour accéder aux questions".'</a>';
            echo $errorMsg;
            echo '<h1>
            <img src="./img/quizz.png" alt="quizz" class="centrer" height="600" width="540">
        </h1>';
        }
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