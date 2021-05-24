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
        <title>Physics</title>
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
              <h1 class="mainHeading2">PHYSICS</h1>
          </div>
          <div>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1AU5m99sOyXiCfOqwuIMvJbY_xam9il1h"><img alt="LINK" src="BookCovers/PH1.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=1gaY6CtiTOaJX4NFZK_oZi44syZzluNQE"><img alt="LINK" src="BookCovers/PH2.jpg" width="300" height="400"></a>
           <a class="bookC" href="https://drive.google.com/uc?export=download&id=15r6JLxuJB_npZh8i7KQP04LgDfWvfIax"><img alt="LINK" src="BookCovers/PH3.jpg" width="300" height="400"></a>
          </div>
        <div>