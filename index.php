

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>SoProno</title>
    <link rel="stylesheet" href="/view/css/style.css" />
    <link rel="stylesheet" href="/view/css/home_page_style.css" />
</head>
<body>
    
<?php 
include 'database.php';

$page = $_GET['page'] ?? '404';

if ($page === 'home'){
	include 'homepage.php';
}



if(!isset($_GET['page'])){
    $page=' ';
    include('homepage.php');
}
else{
    $page = $_GET['page'];
}

switch ($page) {
    case "home":
        include('homepage.php');
        break;
    case "quizz":
        include('quizz.php');
        break;
    case "quizz1":
        include('page_quizz1.php');
        break;
    case "quizz2":
        include('page_quizz2.php');
        break;
    case "results1":
        include('page_results1.php');
        break;
    case "results2":
        include('page_results2.php');
        break;
    case "login":
        include('login.php');
        break;
    case("register"):
        include('register.php');
        break;
    case "matchs":
        include('matchs.php');
        break;
    case("prono"):
        include('prono.php');
        break;
    }


include('footer.php');


?>

</body>
</html>
