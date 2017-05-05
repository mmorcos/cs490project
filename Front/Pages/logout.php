<?php

session_start();

session_unset();

session_destroy();

if($_SESSION['user'] == "")
{
  header("Location: index.php");
  
}


?>