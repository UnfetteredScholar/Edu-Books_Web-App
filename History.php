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
        <title>History</title>
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
              <h1 class="mainHeading2">HISTORY</h1>
          </div>
          <div>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1hWD-WxqHvrjX-G8wUr2QR3JOsAYP8Yew"><img alt="LINK" src="BookCovers/H1.png" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1boNr-NRm5wU6zEjV2xpx5KrpNc_JAE9z"><img alt="LINK" src="BookCovers/H2.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1vcWVZ5hSk7qHsa9ZMXACiv6vD8ty8iaB"><img alt="LINK" src="BookCovers/H3.jpg" width="300" height="400"></a>
          </div>
        <div>