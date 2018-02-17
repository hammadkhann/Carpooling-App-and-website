<?php


require("conn.php");




function Driver_details($id)
{
global $con; 
//$id=$_SESSION['user_id'];
$array = array();
$query= "SELECT name,gender,u.email,contactno,image,address,rides_completed,model,rate FROM driver d,user_info u, rating r where  d.Driver_id=$id and r.Driver_id = d.Driver_id and u.user_id = d.user_id";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
$array['name']=$row3['name'];
$array['gender']=$row3['gender'];
$array['email']=$row3['email'];
$array['contactno']=$row3['contactno'];
$array['image']=$row3['image'];
$array['address']=$row3['address'];
$array['rides_completed']=$row3['rides_completed'];
$array['model']=$row3['model'];
$array['rate']=$row3['rate'];
}

return $array;
}

function Rider_details($id)
{
	
	global $con; 
//$id=$_SESSION['user_id'];
$array = array();
$query= "SELECT name,gender,u.email,contactno,image,u.address,rides_completed FROM rider r,user_info u where  r.Rider_id=$id and u.user_id = r.user_id";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
$array['name']=$row3['name'];
$array['gender']=$row3['gender'];
$array['email']=$row3['email'];
$array['contactno']=$row3['contactno'];
$array['image']=$row3['image'];
$array['address']=$row3['address'];
$array['rides_completed']=$row3['rides_completed'];

}

return $array;
}

function get_feed_back($id)
{
	global $con; 
//$id=$_SESSION['user_id'];
$array = array();
$query= "SELECT x.feedback,u.image,u.name FROM rating x, rider r ,user_info u, driver d where x.Rider_id = r.Rider_id and x.Driver_id = d.Driver_id and r.User_id = u.User_id and d.Driver_id=$id";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
 $array['name']=$row3['name'];
 $array['feedback']=$row3['feedback'];
 $array['image']=$row3['image'];
}

return $array;
}




?>