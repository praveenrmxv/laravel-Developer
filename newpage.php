<?php

$u= $_REQUEST['user'];
$p= $_REQUEST['pass'];



if($u== "abcd" && $p== "1234")
{

   //echo"  correct value";
   header("Location:praveen25.php");
}
else
{
    header("Location:praveen27.php ?f=1");

  //echo" Incorrect value...!!!";
}

?>
