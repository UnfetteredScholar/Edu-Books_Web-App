<?php

$title= $_POST['title'];
$author= $_POST['author'];
$publisher= $_POST['publisher'];

$host='localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= 'edu-books';


if(isset($_POST['sub']))
{
    //connect to database
    $con= new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //check connection
    if($con->connect_error)
    {
        die("Unable to send request". $con->connect_error);
    }
    else
    {
         //write query
        $query= "INSERT INTO requests(b_author, b_title, b_publisher) VALUES('$author', '$title', '$publisher')";

        //checks if the query was successful
        $check= mysqli_query($con, $query);

        if($check==true)
        {
            echo "Request Sent Successfully";
        }
        else
        {
            echo "<br> Error". "<br> Unable to Complete Request";
        }
    }

}


?>