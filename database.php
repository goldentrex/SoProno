<?php

function dbConnection(){
    
    $db_host='localhost';
    $db_user='root';
    $db_name ='soprono';
    $db_password ='';
    $errorMsg = array(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    
  
    $db = new PDO("mysql:host=" . $db_host . ";dbname=" .$db_name. "charset=utf8", $db_user , $db_password, $errorMsg); 
    
}
   

}