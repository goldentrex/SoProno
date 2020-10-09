<!DOCTYPE html>
<html>
<?php include('header.php')?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title> Quizz 1 </title>
</head>

<body>

    <p class = "introduction"> Bonjour, vous trouverez ici un quizz concernant l'euro précédent. Il n'y a pas de meilleur préparation pour le prochain ! </p><br />
   
    <br />
    <hr>

    <form>
       
      <div>
         <div class="question">
            <label for="prefered_player">Quel est votre joueur préféré ? </label><br />
         </div><br />
               <div class="blocrep">
                  <input type="text" name="prefered_player" id="prefered_player"/>
               </div>
      </div><br />
      
      <hr>


      <div><div class="question">Quel club est le plus ancien d'Europe ?</div><br />
         <div class="blocrep">
            <input type="radio" name="Real Madrid" id="club" value="Real Madrid" ><label for="Real Madrid">Real Madrid</label><br />
            <input type="radio" name="PSG" id="club" value="PSG" ><label for="PSG">PSG</label><br />
            <input type="radio" name="Manchester United" id="club" value="Manchester United" ><label for="Manchester United">Manchester United</label><br />
            <input type="radio" name="Juventus Turin" id="club" value="Juventus Turin" ><label for="Juventus Turin">Juventus Turin</label>
         </div>
      </div>
      <br />

      <hr>

      <div><label for="pays"><div class="question">Quel est le pays d'Europe qui a gagné le dernier Euro ?</div></label><br />
         <div class="blocrep">
            <select name="pays" id="pays">
               <option value="france">France</option>
               <option value="portugal">Portugal</option>
               <option value="espagne">Espagne</option>
            </select>
         </div>
      <br />
      
      <hr>


      <div><div class="question"><label>Combien de fois la france a gagné l'Euro ?</div></label><br />
         <div class ="blocrep">
            <input type="number" id_number=""/>
         </div>
      </div><br />

      <hr>

      <div><div class ="question"> Quel est le joueur qui a marqué ... de buts pendant le dernier euro:</div><br />
         <div class="blocrep">
            <input type="checkbox" name="player1" id="player1" /> <label for="player1">Joueur 1</label><br />
            <input type="checkbox" name="player2" id="player2" /> <label for="player2">Joueur 2</label><br />
            <input type="checkbox" name="player3" id="player3" /> <label for="player3">Joueur 3</label><br />
         </div>
      </div><br />

      <hr>

      <div><div class="question"> Quel est le joueur qui a marqué ... de buts pendant le dernier euro:</div><br />
         <div class="blocrep">
            <input type="checkbox" name="player1" id="player1" /> <label for="player1">Joueur 1</label><br />
            <input type="checkbox" name="player2" id="player2" /> <label for="player2">Joueur 2</label><br />
            <input type="checkbox" name="player3" id="player3" /> <label for="player3">Joueur 3</label><br />
         </div>
      </div><br />

      <hr>

      <div class="respbutton">
         <input type="submit" value="Voir vos résultats !">
      </div>

   </form>

</body>


<footer>
   <?php include('footer.php')?>
</footer>

</html>