<?php

//function Compare()

if(isset($_POST['Voir vos résultats !'])){
  $test = getAnswers();
  var_dump($test);
}






?>



<!-- 

  function Compare($id){
  $Score = 0;
  // getAnswer1 :
  $answerQ1 = $_POST['capitainePortugal'];
    echo '<li>'.$answerQ1.'</li>';
    
    $query1 = $db->query("SELECT Rep1 FROM 'quizz');
    $resultQ1 = $query1->fetchAll();
    $resultQ1->closeCursor();
    
    if($resultQ1 == $answerQ1)
    {
    $score++;
    }

  -- // fonction pour récuper les réponses d'un QCM de type checkbox :
  function getQcmAnswer($qcmName,$answerQ){

    foreach($_POST[$qcmName] as $answerQ){
        echo '<li>'.$answerQ.'</li>';

    }
    return $answerQ;
  }
  // getAnswer2 :
  $Q2name = 'answerQ2';
  $answerQ2 = getQcmAnswer($Q2name,$answerQ6);
  $query2 = $db->query(SELECT Rep2 FROM 'quizz');
  $resultQ2 = $query->fetchAll();
  if($resultQ2 == $answerQ2)
  {
  $score++;
  }

  // get Answer3 :
  $answerQ3 = $_POST[answerQ3];
    echo '<li>'.$answerQ3.'</li>';
    $query3 = $db->query(SELECT Rep3 FROM 'quizz');
    $resultQ3 = $query-> fetchAll();
    if($resultQ3 == $answerQ3)
    {
    $score++;
    }

  //get Answer 4 :
  $answerQ4 = $_POST[answerQ4];
  echo '<li>'.$answerQ4.'</li>';
  $query4 = $db->query(SELECT Rep4 FROM 'quizz');
  $resultQ4 = $query-> fetchAll();
  if($resultQ4 == $answerQ4)
  {
  $score++;
  }
  // get Answer 5 :
  $Q5name = 'answerQ5';
  $answerQ5 = getQcmAnswer($Q5name,$answerQ6);
  $query5 = $db->query(SELECT Rep5 FROM 'quizz');
  $resultQ5 = $query-> fetchAll();
  if($resultQ5 == $answerQ5)
  {
  $score++;
  }
  // get Answer 6 :
    $Q6name = 'answerQ6';
    $answerQ6 = getQcmAnswer($Q6name,$answerQ6);
    $query6 = $db->query(SELECT Rep6 FROM 'quizz');
    $resultQ6 = $query-> fetchAll();
    if($resultQ6 == $answerQ6)
    {
    $score++;
    }
?> -->