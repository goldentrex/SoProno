<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/view/style.css">
    <link rel="stylesheet" href="/view/style.css">
    <title>Quizz</title>
    <p class="intro_account"> Bienvenue sur la page de quizz ! </p>
</head>

<body>

    <p class = "introduction"> Bonjour, vous trouverez ici un quizz sur le foot !</p><br />

    <br />
    <hr>

    <form method="post" action="index.php">

      <div>
        <div class="question">
         <div class="question1"></div>
            <label for="prefered_player">Le nom du capitaine du Portugal ? </label><br />
         </div><br />
               <div class="blocrep">
                  <input type="text" name="question[]" id="capitainePortugal"/>
               </div>
      </div><br />

      <hr>


      <div><div class="question">
        <div class="question2">Quel club est le plus ancien d'Europe ?</div></div>
        <br />
         <div class="blocrep">
            <input type="checkbox" name="question[]" id="club" value="Real Madrid" ><label for="Real Madrid">Real Madrid</label><br />
            <input type="checkbox" name="question[]" id="club" value="PSG" ><label for="PSG">PSG</label><br />
            <input type="checkbox" name="question[]" id="club" value="Manchester United" ><label for="Manchester United">Manchester United</label><br />
            <input type="checkbox" name="question[]" id="club" value="Juventus Turin" ><label for="Juventus Turin">Juventus Turin</label>
         </div>
      </div>
      <br />

      <hr>

      <div><label for="pays"><div class="question">
        <div class="question3">Quel est le pays d'Europe qui a gagné le dernier Euro ?</div></div>
      </label><br />
         <div class="blocrep">
            <select name="question[]" id="pays">
               <option value="France">France</option>
               <option value="portugal">Portugal</option>
               <option value="espagne">Espagne</option>
            </select>
         </div>
      <br />

      <hr>


      <div><div class="question">
        <div class="question4"></div>
          <label>Combien de fois la France a t'elle remporté l'Euro</div></label><br />
         <div class ="blocrep">
            <input type="number" name ="question[]"/>s
         </div>
      </div><br />

      <hr>

      <div><div class="question"><div class ="question5"> Quel pays a remporté l'Euro en 2004 ?</div></div><br />
         <div class="blocrep">
           <label>
            <input type="checkbox" name="question[]" value="Allemagne" />Allemagne &nbsp;&nbsp;&nbsp;<br />
          </label>
          <label>
            <input type="checkbox" name="question[]" value="Grèce" /> Grèce&nbsp;&nbsp;&nbsp;<br />
          </label>
          <label>
            <input type="checkbox" name="question[]" value="Italie" /> Italie &nbsp;&nbsp;&nbsp;<br />
          </label>
         </div>
      </div><br />

      <hr>

      <div><div class="question"><div class="question6"> Quel est le joueur qui a marqué le but assasin en finale du dernier Euro:</div></div><br />
         <div class="blocrep">
           <label>
              <input type="checkbox" name="question[]" value ="Eder"/>Eder<br />
          </label>
          <label>
            <input type="checkbox" name="question[]" value ="Hazard"/>Hazard<br />
          </label>
            <input type="checkbox" name="question[]"value="Ronaldo"/>Ronaldo;<br />
          </label>
         </div>
      </div><br />

      <hr>

      <div class="respbutton">
         <input type="submit" value="Voir vos résultats !">
      </div>

   </form>

</body>

</html>
