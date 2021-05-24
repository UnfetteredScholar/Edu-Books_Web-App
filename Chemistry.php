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
        <title>Chemistry</title>
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
              <h1 class="mainHeading2">CHEMISTRY</h1>
          </div>
          <div>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1zwTTCXvkuj_FhUYdXNNXCyXXRkf8ypt0"><img alt="LINK" src="BookCovers/CH1.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=108eZR1PywG41Eul8wKnANEpbI3hhSJwG"><img alt="LINK" src="BookCovers/CH2.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=16QNzBexVpealEybjnwlyNlTBIcXP_4cj"><img alt="LINK" src="BookCovers/CH3.jpg" width="300" height="400"></a>
          </div>
        <div>