<header>
    <link rel="stylesheet" href="./view/css/style.css">
    <title> SoProno </title>
    <div id='header'>
        <h1 id="headerTitle">
            <a class="link" href="index.php?page=home">
                <img src="./img/soprono_logo.png" alt="SoProno">      
            </a>  
            
        </h1>
        
        <?php 
            if(isConnected()==1){
                echo ('<p><form method="post" action="index.php"><input type="submit" class="cleLogin" value="déconnexion" name="deconnexion"></form></p><br>');
            }else{
                echo('<br><a class="cleLogin" href="index.php?page=login">Login</a><br><br>');
            }
            ?>
            <a class="account" href="index.php?page=register">Créer son compte</a>
            
        <br/>

        <a class="link" href="index.php?page=home"> Home Page </a>
        <a class="link" href="index.php?page=matchs"> Matchs à venir </a>
        <a class="link" href="index.php?page=prono"> Nos pronos</a>
        <a class="link" href="index.php?page=quizz"> Quizz</a>
        <?php if(isConnected()==1){ 
            echo ('<a class="link" href="index.php?page=results1"> Resultats </a> ');} ?>
    
    </div>
</header>

