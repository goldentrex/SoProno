<!DOCTYPE html>
<html>
<?php include('header.php')?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="view/css/style.css">
    <title> So Prono Quizz 1 </title>
</head>

<body>

    <strong> Bonjour, vous trouverez ici une description du quizz ..... </strong><br />
    
    <br />
    <form method="post" action="./view/page_results2.php">

      <div>
       <label for="prefered_player">Quel est votre joueur préféré ? </label><br />
       <input type="text" name="prefered_player" id="prefered_player"/>
      </div><br />
      
      
      <div>Quel club est le plus ancien d'Europe ?<br />
       <input type="radio" name="Real Madrid" id="club" value="Real Madrid" ><label for="Real Madrid">Real Madrid</label><br />
       <input type="radio" name="PSG" id="club" value="PSG" ><label for="PSG">PSG</label><br />
       <input type="radio" name="Manchester United" id="club" value="Manchester United" ><label for="Manchester United">Manchester United</label><br />
       <input type="radio" name="Juventus Turin" id="club" value="Juventus Turin" ><label for="Juventus Turin">Juventus Turin</label>
      </div><br />

      <div><label for="pays">Quel est le pays d'Europe qui a gagné le dernier Euro ?</label><br />
       <select name="pays" id="pays">
           <option value="france">France</option>
           <option value="portugal">Portugal</option>
           <option value="espagne">Espagne</option>
       </select>
      </div><br />
      
      <div><label>Combien de fois la france a gagné l'Euro ?</label><br />
         <input type="number" id_number=""/>
      </div><br />

      <div> Quel est le joueur qui a marqué ... de buts pendant le dernier euro:<br />
       <input type="checkbox" name="player1" id="player1" /> <label for="player1">Joueur 1</label><br />
       <input type="checkbox" name="player2" id="player2" /> <label for="player2">Joueur 2</label><br />
       <input type="checkbox" name="player3" id="player3" /> <label for="player3">Joueur 3</label><br />
      </div><br />

      <div> Quel est le joueur qui a marqué ... de buts pendant le dernier euro:<br />
       <input type="checkbox" name="player1" id="player1" /> <label for="player1">Joueur 1</label><br />
       <input type="checkbox" name="player2" id="player2" /> <label for="player2">Joueur 2</label><br />
       <input type="checkbox" name="player3" id="player3" /> <label for="player3">Joueur 3</label><br />
    </div><br />

    

   </form>
   <br /><input type="submit" value="Envoyer" /><br />

    
</body>


<footer>
   <?php include('./view/footer.php')?>
</footer>

</html>