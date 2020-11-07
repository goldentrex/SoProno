<html>
<head>
    <title>SoProno</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="page_results1"/>
</head>
<body>
    <?php include 'header.php'?>

    <section>
       <h1 class="results"> Vos résultats </h1>
    </section>

</body>
</html>

<?php

include 'database.php';
$db = dbConnection();



$Score =0;
// getAnswer1 :
$answerQ1 = $_POST['capitainePortugal'];
  echo '<li>'.$answerQ1.'</li>';

// fonction pour récuper les réponses d'un QCM de type checkbox :
function getQcmAnswer($qcmName,$answerQ)
{
  foreach($_POST[$qcmName] as $answerQ){
      echo '<li>'.$answerQ.'</li>';

  }
  return $answerQ;
}
// getAnswer2 :
$Q2name = "answerQ2";
$answerQ2 = getQcmAnswer($Q2name,$answerQ6);


// get Answer3 :
$answerQ3 = $_POST['answerQ3'];
  echo '<li>'.$answerQ3.'</li>';


//get Answer 4 :
$answerQ4 = $_POST['answerQ4'];
echo '<li>'.$answerQ4.'</li>';

// get Answer 5 :
$Q5name = "answerQ5";
$answerQ5 = getQcmAnswer($Q5name,$answerQ6);

// get Answer 6 :
  $Q6name = "answerQ6";
  $answerQ6 = getQcmAnswer($Q6name,$answerQ6);

?>
