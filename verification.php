<?php
session_start();

$username= $_POST['username'];
$password1= $_POST['password1'];

$host='localhost';
$dbUsername= 'root';
$dbPassword= '';
$dbName= 'edu-books';



if(isset($_POST['login']))
{
    //connect to database
    $connection= new mysqli($host, $dbUsername, $dbPassword, $dbName);

    //check connection
    if($connection->connect_error)
    {
        die("Connection Failed: ". $connection->connect_error);
    }

    //write query
    $query= "SELECT * FROM users WHERE username='$username' AND password= '$password1' ";

    //checks if the query was successful
    $result= mysqli_query($connection, $query);

    $rnum= mysqli_num_rows($result);

    if($rnum==1)
    {
       echo "Login Successful";
       $_SESSION['logged_in']= 1;
       header("Location: mainpage.php");
    }
    else
    {
        echo "Error" . "<br> Invalid Username or Password" ;
    }

   $connection->close();
    

}

?>
