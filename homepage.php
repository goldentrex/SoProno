<html>
<head>
    <title>SoProno</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="home_page_style.css" />
</head>
<body>
    <?php include 'header.php'?>
    
    <section>
       <br/>
    </section>

    <news>
    	<div class="newsTitle"> News EURO 2020</div><br />
         <div class="newsContent">
            <img class ="imgnews" src="./img/news/ballon.jpg" alt="ballon">
            Le nouveau ballon est plus beau que jamais !
            <br />
            <img class ="imgnews" src="./img/news/mbappe.jpg" alt="mbappe">
            Mais quelle vitesse extraordinaire pour le jeune joueur français !
            <br />
            <img class ="imgnews" src="./img/news/terrain.jpg" alt="terrain">
            Le terrain est tout vert cette année, comme d'habitude...
            <br />
         </div>

      </div><br />
    </news>


    <nextMatch>
        <div class="newsTitle"> Le dernier match</div><br />
         <div class="newsContent">
            <table id=lastMatch>
              <tr>
                <th>REAL VS PSG</th>
              </tr>
              <tr>
                <td>1</td>
                <td>0</td>
              </tr>

            </table> 
         </div>

      </div><br />

    </nextMatch>
    <footer>
        <?php include 'footer.php'?>
    </footer>
</body>
</html>