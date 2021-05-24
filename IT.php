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
        <title>IT</title>
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
              <h1 class="mainHeading2">INFORMATION TECHNOLOGY</h1>
          </div>
          <div>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1vODoRqZ4Stv2rAx2_pT5ZIDcepae9JG4"><img alt="LINK" src="BookCovers/IT1.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1F2q_LPEB3NMD9WJ17tXYpf0u4v3W_ZP7"><img alt="LINK" src="BookCovers/IT2.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1PXlZbpDU0j-XIS4EXQf8WvuTeg87xcbC"><img alt="LINK" src="BookCovers/IT3.jpg" width="300" height="400"></a>
        </div>
        <div>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1OAQIUAS0EoT2SHuXRCFMehIlv20uPmWO"><img alt="LINK" src="BookCovers/IT4.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1YgXlJ7Zc884ssu87DVUJNGySQSrniAdW"><img alt="LINK" src="BookCovers/IT5.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1xb7noFms0U0JUsZ4QTFuKVru54eZUfdW"><img alt="LINK" src="BookCovers/IT6.jpg" width="300" height="400"></a>
        </div>
        <div>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1ywSO8Cy8wv0KaPyP1elaDjF-kqd8mibE"><img alt="LINK" src="BookCovers/IT7.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=12Rz3C3ygsbOnPRuUaEalLIqepdT1kQ5D"><img alt="LINK" src="BookCovers/IT8.jpg" width="300" height="400"></a>
            <a class="bookC" href="https://drive.google.com/uc?export=download&id=1xFLX5k_SA5GzFFrHWm9gri37eFV31KNR"><img alt="LINK" src="BookCovers/IT9.jpg" width="300" height="400"></a>
        </div>
  


