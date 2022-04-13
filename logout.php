<?php

session_start();
session_destroy();//destroy the session
//session_unset();//unset all the session variable//
header('location:login.php');

?>