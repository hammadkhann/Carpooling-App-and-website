<?php
SESSION_START();

?>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Trips</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="table-title">
<h3>FASTPOOL</h3>
</div>
<!--<table class="table-fill" id="myTable">
<thead>
<tr>
<th class="text-left">Date</th>
<th class="text-left">Driver</th>
<th class="text-left">Car</th>
<th class="text-left">Fare</th>
</tr>
</thead>
<tbody class="table-hover">

<br>
-->


<script>
function myFunction() {
    var table = document.getElementById("myTable");
    var row = table.insertRow(1);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(2);
	var cell6 = row.insertCell(3);
    cell1.innerHTML = "<?php echo $row["trip_date"];?>";
    cell2.innerHTML = "<?php echo $row["D_name"];?>";
	cell3.innerHTML = "<?php echo $row["Model"];?>";
	cell4.innerHTML = "<?php echo $row["C_no"];?>";
	cell5.innerHTML = "<?php echo $row["Start_time"];?>";
	cell6.innerHTML = "<?php echo $row["End_time"];?>";
}
</script>

<?php
	
	include("conn.php");
		if(isset($_SESSION['user_id'])) {
				$rid = $_SESSION['user_id'];	
				}

   //$sql="SELECT model, carno, Start_time, End_time, trip_date FROM  driver NATURAL JOIN trip_info where Rider_id =$rid";
   $sql="SELECT model, carno, Start_time, End_time, trip_date FROM  tripinfo where Rider_id =$rid";
   
	$result = mysqli_query($con,$sql);
	

	echo "<table class='table-fill' id='myTable'>
	<thead>
	<tr>
	<th class='text-left'>Date</th>
	<th class='text-left'>Car</th>
	<th class='text-left'>Car no</th>
	<th class='text-left'>Start time</th>
	<th class='text-left'>End time</th>
	</tr>
	</thead>
	<tbody class='table-hover'>";


	
	// output data of each row
	while($row = mysqli_fetch_array($result)) {
		
		
		echo "<tr>";
		echo "<td>". $row['trip_date']."</td>";
		echo "<td>". $row['model'] ."</td>";
		echo "<td>". $row['carno'] ."</td>";
		echo "<td>". $row['Start_time'] ."</td>";
		echo "<td>". $row['End_time'] ."</td>";
		echo "</tr>";

		
	}		
	
	
	echo "</table>";


?>

  </body>