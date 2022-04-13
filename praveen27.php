
<?php
if(isset ($_REQUEST['f']))
{
    echo "<center><u><font color='red' size='5px'>login Incorrect...!!!</font></u></center>";
}
?>

<html>

<body>

<form action ="newpage.php" method="POST">
Username-:<input type="text" name="user"><br><br>
Password  -:<input type="password" name="pass"><br><br>
         <input type="submit" name="Login"><br><br>
         
</form>

</body>
</html>