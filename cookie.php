<?php


if(isset($_POST['user']))
{
    setcookie("user",$_POST['user'],time() + 3600);
    echo $_COOKIE['user'];
    echo"<br>";
    echo "<a href = 'home1.php'> click here</a>";
}
else
{
    header("location:praveen31.php");
}
?>