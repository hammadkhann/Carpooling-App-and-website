<?php
require'connect.inc.php';
require 'core.inc.php';
if(loggedin())
{
	echo 'You\'re logged in. <a href="logout.php">log out</a>'; 
}
else
{
include 'login_form.inc.php';
}


?>

