<?php

//function Compare()

// if(isset($_POST['Voir vos résultats !'])){
//   // $test = getAnswers();
//   // var_dump($test);
//   if(isset($_POST['question[]'])){
//     var_dump($_POST['question[]']);
//   }
// }
// function Score(){

// }

function Score(){
    if(isset($_POST['question'])){
      $question = $_POST['question'];
      
    $validAnswer = getAnswers();
    var_dump($validAnswer);
    
    $score = 0;
    for($i=0; $i<count($question); $i++){
      if ($question[$i] == $validAnswer[$i]){
        $score++;
      }
    }
    return $score;
  }
  return 'testechoue';
}


$test = Score();
var_dump($test);





// if(isset($_POST['question'])){
//   var_dump($_POST['question']);
// }

// if(isset($_POST['answerQ3'])){
//   var_dump($_POST['answerQ3']);
// }

// if(isset($_POST['answerQ4'])){
//   var_dump($_POST['answerQ4']);
// }

// if(isset($_POST['answerQ5'])){
//   var_dump($_POST['answerQ5']);
// }


// function compare($question_id, $nom_question){
  
//   if(isset($_POST['answerQ4'])){
//     var_dump($_POST['answerQ4']);
//   }
// }



// $test2 = compare();
// var_dump($test2);



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