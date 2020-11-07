<?php

    define('HOST','localhost');
    define('DB_Name', 'soprono');
    define('USER', 'root');
    define('Password', '');



    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_Name, USER, Password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "connexion successful !";
    } catch(PDOException $e){
        echo $e;
    }
