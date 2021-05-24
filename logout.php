<?php
session_start();

if(isset($_POST['logout']))
{
    //IF LOGOUT IS SELECCTED DESTROY THE SESSION TO PREVENT OTHERS FROM ACCESSING THE MAIN PAGE WITHOT A SIGN IN
    session_destroy();
    header("Location: homepage.html");
}

?>
