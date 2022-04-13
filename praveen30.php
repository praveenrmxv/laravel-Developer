<?php

session_start();
if(isset( $_POST['user']))
{

$_SESSION['user'] = $_POST['user'];
echo $_SESSION['user'];
echo"<br>";
echo"<a href='home.php'> click here</a>";
}
else
{
    header("location:login.php");

}
?>