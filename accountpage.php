<!DOCTYPE html>


<html>
<head>
    <title>Inscription</title>
    <link rel="styleshett" href="style.css"/>
    <link rel="stylesheet" href="accountpage_style.css" />
</head>
<body>
    <?php include 'header.php'?>

    <div class="intro_account">
       Page d'inscription
    </div>

    <form method="post">
        <p>
            <label for="name">Votre nom :</label><br />
            <input type="text" name="lastname" id="lastname" placeholder="Nom" required/>
        </p><br />

<form method="POST" action = "accountpage.php">
    <div>
        <div>
            <label for="name">Votre nom</label><br />
            <input type="text" name="name" id="name"/>
        </div><br />

        <!-- <p> 
            <label for="birth_date">Votre date de naissance :</label><br />
            <input type="date" name="birth_date" id="birth_date" required/>
        </p><br /> -->

        <p> 
            <label for="password">Mot de passe :</label><br />
            <input type="password" name="password" id="password" placeholder="Mot de passe" required />
        </p><br />

        <div>
            <label for="birth_date">Votre date de naissance :</label>
            <input type="date" name="birth_date" id="birth" />
        </div><br />

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" />
        </div><br />

        <div>
            <label for="password">Confirmez votre mot de passe</label>
            <input type="password" name="password2" id="password_confirmation" />
        </div><br />
        <div>
          <input type="submit" value ="S'inscrire" name ="submit"/>
        </div><br />

    <?php 
        if(isset($_POST['inscription'])){
            extract($_POST);


    </form>

</body>
</html>
 <?php
if(isset($_POST['submit']))
{
  $name = htmlentities(trim($_POST['name']));
  $prenom = htmlentities(trim($_POST['prenom']));
  $birth = htmlentities(trim($_POST['birth']));
  $password = htmlentities(trim($_POST['password']);
  $password_confirmation = htmlentities(trim($_POST['$password_confirmation']));
if($name&&prenom&&$birth&&$password&&$password_confirmation)
{
  if($password == $password_confirmation)
  {
    $connection or die('Error');

     $pdoStat =  $connection->prepare('SELECT * FROM user');
     $executeIsOk = $pdoStat -> execute();
     $contacts = $pdoStat->fetchAll();
  }else echo "Les deux mots de passe doivent être identiques";
}
}
?>
