
  <?php
               $servername = 'localhost:3308';
               $username = 'root';
               $password = 'root';

               //On établit la connexion
               $conn = mysqli_connect($servername, $username, $password);
              $bdd = mysqli_connect('bddprono.sql');
               //On vérifie la connexion


               $connection = new PDO("mysql:host=$servername;dbname=bddprono",$username,$password);

                              if(!$connection)
                              {
                                  die('Erreur : ' .mysqli_connect_error());
                              }
                              echo 'Connexion réussie';
               if(!$conn){
                   die('Erreur : ' .mysqli_connect_error());
               }
               echo 'Connexion réussie';
               if(!$bdd){
                 die('Errer : '.mysqli_connect_error());
               }
               echo 'bdd trouvé';
 ?>
