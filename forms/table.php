<?php 
require_once('php1/connection.php');
$sql="select * from `routes` ";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/time.css">
	<title>
		Time Table
	</title>
</head>
<body>   

	<div>
		<img src="images/logo1.jpg" class="img1">
		<p class="ltext">EUROPE BUS MODERN<br>Europe Journey Schedule 2022 </p>
    </div>
   
 <div class="time">
 	<table >
 		<tr>
 			<th>Bus</th>
 			<th>From</th>
 			<th>To</th>
 			<th>Departure Time</th>
 			<th>Arrival Time</th>
 			<th>Travelling Days</th>
 			<th>Price $</th>

 		</tr>
 		
 <?php 
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr class="row1">
 			<td><?php echo $rows['bus_type'] ?></td>
 			<td><?php echo $rows['departure_town'] ?></td>
 			<td><?php echo $rows['arrival_town'] ?></td>
 			<td class="red"><?php echo $rows['departure_time'] ?></td>
 			<td class="green"><?php echo $rows['arrival_time'] ?></td>
 			<td><?php echo $rows['travelling_days'] ?></td>
 			<td><?php echo $rows['price']?></td>
 </tr>
 <?php 
}
?>

</table>

 </div>


</body>
</html>