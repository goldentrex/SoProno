<?php 

$page = $_GET['page'] ?? '404';
include 'view/header.php'
if ($page === 'home'){
	include 'view/homepage.php'
}
include 'view/footer.php'

?>















<!--
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>SoProno</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="home_page_style.css" />
</head>
<body>
    
<?php 


$page = $_GET['page'] ?? '404';
include '/view/header.php'
if ($page === 'home'){
	include 'view/homepage.php'
}



if(!isset($_GET['page'])){
    $page=' ';
    include('/view/homepage.php');
}
else{
    $page = $_GET['page'];
}

switch ($page) {
    case "home":
        include('/view/homepage.php');
        break;
    case "quizz":
        include('/view/quizz.php');
        break;
    case "quizz1":
        include('/view/page_quizz1.php');
        break;
    case "quizz2":
        include('/view/page_quizz2.php');
        break;
    case "results1":
        include('/view/page_results1.php');
        break;
    case "results2":
        include('/view/page_results2.php');
        break;
    case "login":
        include('/view/login.php');
        break;
    case("register"):
        include('/view/register.php');
        break;
    case "matchs":
        include('/view/matchs.php');
        break;
    case("prono"):
        include('/view/prono.php');
        break;
        
    default:
        include('/view/main.php');
    break;
    
    }
include('/view/footer.php')
?>

</body>
</html>


-->