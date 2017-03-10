<?php 


ob_start();
require 'sof.php';
$output = ob_get_contents();

if ($output == 'Student')
{
	echo '<script>setTimeout(function(){window.location.href="sview.php"},1000)</script>';

}
ob_end_flush();


?>