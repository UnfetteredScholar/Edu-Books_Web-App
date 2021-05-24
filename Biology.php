<?php

    session_start();
    
    $signedin= $_SESSION['logged_in'];

    if($signedin!=1)
    {
        header("Location: homepage.html");
    }

?>
<html>
    <head>
        <title>Biology</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body class="body1">
    <div class="topnav">
            <a href="mainpage.php">Home</a>
            <a href="#account">Account</a>
            <a href="requestBooks.php">Request Books</a> 
            <form action="logout.php" method="POST">
                <button type="submit" name="logout" id="navLO">Log Out</button>
            </form>
    </div> 
          <div>
              <h1 class="mainHeading2">BIOLOGY</h1>
          </div>
          <div>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1xc6T2Wgr_SaDwY3YY-X68INayNKvdo6I"><img alt="LINK" src="BookCovers/B1.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1AMBS2QohkxP3RUMtMgtUw56nEpmAsNRk"><img alt="LINK" src="BookCovers/B2.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1YEIl-zAXlHemKC2JQcTBfZJgaVE7Qna9"><img alt="LINK" src="BookCovers/B3.jpg" width="300" height="400"></a>
          </div>
    

</html>