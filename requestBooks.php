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
        <title>Request Books</title>
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

       <form action="sendRequest.php" method="POST" class="infoBlockR" >
        <div>
            <h1>Request Book</h1>
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Enter Book Title" required>
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" placeholder="Enter Author's Name" required>
        </div>
        <div>
            <label for="publisher">Publisher</label>
            <input type="text" name="publisher" id="publisher" placeholder="Enter Book Publisher" required>
        </div>
        <div>
            <button type="submit" name="sub" class="select2">Submit</button>
        </div>
       </form>



    </body>



</html>