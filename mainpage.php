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
        <title>Main Page</title>
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

        </div>


        <a href="Biology.php" id="r1c1"><img alt="Biology" src="images/Biology.png" width="220" height="200"></a>

        <a href="Chemistry.php" id="r1c2"><img alt="Chemistry" src="images/Chemistry.jpg" width="220" height="200"></a>

        <a href="Physics.php" id="r1c3"><img alt="Physics" src="images/Physics2.jpg" width="220" height="200"></a>


        <a href="IT.php" id="r2c1"><img alt="Information Technology" src="images/IT.jpg" width="220" height="200"></a>

        <a href="Mathematics.php" id="r2c2"><img alt="Mathematics" src="images/Math.jpg" width="220" height="200"></a>

        <a href="History.php" id="r2c3"><img alt="History" src="images/History.jpg" width="220" height="200"></a>




    </body>


</html>