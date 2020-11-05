
<!DOCTYPE html>

<?php 

session_start();

require('database.php');
require('checkUser.php');


if (isset($_GET['view'])){
    
    
}
        // tests 

        // méthode fonctionnelle ci dessous pour une inscription


        // if(isset($_POST['inscription'])){
        //     extract($_POST);


            
        //     if($password == $password_confirmation){
                    
        //         $query = $bdd->prepare('INSERT INTO users(firstname,lastname,user_mail,birth_date,password) VALUES(:firstname, :lastname, :user_mail ,:birth_date,:password)');
        //         $query->execute([
        //             'firstname' => $firstname,
        //             'lastname' => $lastname,
        //             'birth_date' => $birth_date,
        //             'user_mail' => $user_mail,
        //             'password' => $password
        //         ]);
                

        //         }
        //         else {
        //             echo ('vos mots de passe ne correspondent pas !');
        //         }
        //     }


        // méthode de connexion (pas tout à fait fonctionnelle - il faudra changer et mettre dans controller)
        

        //     if(isset($_POST['login'])){
        //         extract($_POST);
                        
        //         $query = $bdd->prepare('SELECT * FROM users WHERE user_mail = :user_mail');
        //         $query->execute(['user_mail'=> $user_mail ]);
        //         $result = $q->fetch();
        //         }

        //         if($result){
        //             echo ('Vous êtes bien connecté !')
        //         }
        
    ?>
    