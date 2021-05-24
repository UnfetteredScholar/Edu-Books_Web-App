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
        <title>Mathematics</title>
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
              <h1 class="mainHeading2">MATHEMATICS</h1>
          </div>
          <div>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=17F4Q0oLTMYw07VdY62WJ1rEMdhe1imMl"><img alt="LINK" src="BookCovers/M1.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1DfgAb9fzyqgr_ZtZxvDdbhoZH2MlntD_"><img alt="LINK" src="BookCovers/M2.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=160Z1v2irLvP7f8WCD-yX0Qu18tzE7HvF"><img alt="LINK" src="BookCovers/M3.jpg" width="300" height="400"></a>
          </div>
        <div>