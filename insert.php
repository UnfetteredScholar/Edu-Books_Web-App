<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$username= $_POST['username'];
$email= $_POST['email'];
$password1= $_POST['password1'];
$password2= $_POST['password2'];

$host='localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= 'edu-books';


if(isset($_POST['register']))
{
    //connect to database
    $connection= new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //check connection
    if($connection->connect_error)
    {
        die("Connection Failed: ". $connection->connect_error);
    }

    echo "Successful connection";

    //write query
    $query= "INSERT INTO users(firstName, lastName, email, username, password) VALUES('$firstname', '$lastname', '$email', '$username', '$password1')";

    //checks if the query was successful
    $check= mysqli_query($connection, $query);

    if($check==1)
    {
        echo "Rgistration Successful";
        echo "<br> <a href='login.html' > Click here to Login</a> ";
    }
    else
    {
        echo "<br> Error". "<br> Unable to complete Registration";
    }


    $connection->close();
    

}

?>
