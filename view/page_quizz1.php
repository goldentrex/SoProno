<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/view/style.css">
    <title>Quizz1</title>
    <h1> So Prono Quizz 1 </h1>
</head>

<body>

    <p class = "introduction"> Bonjour, vous trouverez ici un quizz concernant l'euro précédent. Il n'y a pas de meilleur préparation pour le prochain ! </p><br />

    <br />
    <hr>

    <form method="post" action="index.php?page=page_results1.php">

      <div>
         <div class="question1">
            <label for="prefered_player">Le nom du capitaine du Portugal ? </label><br />
         </div><br />
               <div class="blocrep">
                  <input type="text" name="capitainePortugal" id="capitainePortugal"/>
               </div>
      </div><br />

      <hr>


      <div><div class="question2">Quel club est le plus ancien d'Europe ?</div><br />
         <div class="blocrep">
            <input type="radio" name="answerQ2[]" id="club" value="Real Madrid" ><label for="Real Madrid">Real Madrid</label><br />
            <input type="radio" name="answerQ2[]" id="club" value="PSG" ><label for="PSG">PSG</label><br />
            <input type="radio" name="answerQ2[]" id="club" value="Manchester United" ><label for="Manchester United">Manchester United</label><br />
            <input type="radio" name="answerQ2[]" id="club" value="Juventus Turin" ><label for="Juventus Turin">Juventus Turin</label>
         </div>
      </div>
      <br />

      <hr>

      <div><label for="pays"><div class="question3">Quel est le pays d'Europe qui a gagné le dernier Euro ?</div></label><br />
         <div class="blocrep">
            <select name="answerQ3" id="pays">
               <option value="France">France</option>
               <option value="portugal">Portugal</option>
               <option value="espagne">Espagne</option>
            </select>
         </div>
      <br />

      <hr>


      <div><div class="question4"><label>Combien de fois la France a t'elle remporté l'Euro</div></label><br />
         <div class ="blocrep">
            <input type="number" name ="answerQ4"/>s
         </div>
      </div><br />

      <hr>

      <div><div class ="question5"> Quel pays a remporté l'Euro en 2004 ?</div><br />
         <div class="blocrep">
           <label>
            <input type="radio" name="answerQ5[]" value="Allemagne" />Allemagne &nbsp;&nbsp;&nbsp;<br />
          </label>
          <label>
            <input type="radio" name="answerQ5[]" value="Grèce" /> Grèce&nbsp;&nbsp;&nbsp;<br />
          </label>
          <label>
            <input type="radio" name="answerQ5[]" value="Italie" /> Italie &nbsp;&nbsp;&nbsp;<br />
          </label>
         </div>
      </div><br />

      <hr>

      <div><div class="question6"> Quel est le joueur qui a marqué le but assasin en finale du dernier Euro:</div><br />
         <div class="blocrep">
           <label>
              <input type="radio" name="answerQ6[]" value ="Eder"/>Eder &nbsp;&nbsp;&nbsp;<br />
          </label>
          <label>
            <input type="radio" name="answerQ6[]" value ="Hazard"/>Hazard &nbsp;&nbsp;&nbsp;<br />
          </label>
            <input type="radio" name="answerQ6[]"value="Ronaldo"/>Ronaldo &nbsp;&nbsp;&nbsp;<br />
          </label>
         </div>
      </div><br />

      <hr>

      <div class="respbutton">
         <input type="submit" value="Voir vos résultats !">
      </div>

   </form>

</body>

<footer>
   
</footer>

</html>
