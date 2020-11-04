
<!DOCTYPE html>

<?php 

require_once('footer.php');
require_once('header.php');
require_once('homepage.php');
require_once('login.php');


        include ('accountpage.php');
        include ('database.php');


        if(isset($_POST['inscription'])){
            extract($_POST);


            
            if($password == $password_confirmation){
                    
                $query = $db->prepare('INSERT INTO users(firstname,lastname,user_mail,birth_date,password) VALUES(:firstname, :lastname, :user_mail ,:birth_date,:password)');
                $query->execute([
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'birth_date' => $birth_date,
                    'user_mail' => $user_mail,
                    'password' => $password
                ]);
                

                }
                else {
                    echo ('vos mots de passe ne correspondent pas !');
                }
            }
        

            if(isset($_POST['login'])){
                extract($_POST);
                        
                $query = $db->prepare('SELECT FROM users(user_mail,password) VALUES(:user_mail ,:password)');
                $query->execute([
                    'user_mail' => $user_mail,
                    'password' => $password
                ]);
                
                }
        
    ?>
    