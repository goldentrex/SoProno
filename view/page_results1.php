<html>
  <head>
    <title>SoProno</title>
    <link rel="stylesheet" href="./view/style.css"/>
    <link rel="stylesheet" href="./view/page_results1"/>
  </head>
  <body>

    <p>
       <h1 class="results"> Vos résultats </h1>

      <?php
      $score=Score(); 
      if($score>=5){
        echo "<h2>bravo, vous avez fait le score maximal ! </h2><br> Votre score :".$score;
      }elseif($score<4){
        echo "<h2>pas mal ! mais vous pouvez encore vous améliorer ! </h2></br>".$score;
      }
      
      ?>

    </p>

  </body>
</html>

