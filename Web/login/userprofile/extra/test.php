<?php


require("conn.php");


//$id=$_SESSION['SESS_DRIVER_ID'];
$array = array();
$query= "SELECT feedback, image, name FROM rating x, rider r ,user_info u, driver d where x.Rider_id = r.Rider_id and x.Driver_id = d.Driver_id and r.User_id = u.User_id and d.Driver_id=1";
$result3 = mysqli_query($con,$query);
while($row3 = mysqli_fetch_assoc($result3))
{ 
$array1['name']=$row3['name'];
$array2['feedback']=$row3['feedback'];
$array3['image']=$row3['image'];
}


  echo $array1.'  ';

//echo $array2.'  ';

//echo $array3.'  ';






?>
