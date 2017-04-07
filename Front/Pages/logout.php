<?php

session_start();

session_unset();

session_destroy();

if($_SESSION['user'] == "")
{
  echo "Successfully logged out";
  echo "<script>setTimeout(\"location.href = 'https://web.njit.edu/~mm723/Front/Pages/index.php';\",1500);</script>";
  
}


?>