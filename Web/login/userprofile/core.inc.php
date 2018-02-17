<?php

ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER'])){
$http_referer =	$_SERVER['HTTP_REFERER'];
}
 

function loggedin()
    {
		
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}
	
	else{
		return false;
	}
}
 
 /*function getuserfield($field = '') { 
  
  global $conn;
  global $username;
  global $password_hash;
  
  $x = $_SESSION['user_id']; 
  
  $query = "SELECT `$field` FROM `users` WHERE `id` = '$x'";
  $query_run = mysqli_query($conn, $query);
   while ($row = @mysqli_fetch_assoc($query_run)) {
   foreach ($row as $key => $val) {
    return $val;
   }
  }
 }*/

?>






