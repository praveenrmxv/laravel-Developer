<?php
session_start();
if(isset( $_SESSION['user']))
{

echo $_SESSION['user'];
echo"<br>";
echo"<a href='logout.php'> LOGOUT</a>";
}
else
{
    header("location:login.php");
}

?>