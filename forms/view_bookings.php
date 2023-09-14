<?php 
require_once('../php1/connection.php');
$sql="select * from `bookings` ";
$result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/table.css">
	<script src="https://use.fontawesome.com/b9d79ea055.js"></script>
	<title>
		Time Table
	</title>
</head>
<body>   
    <a href="../admin_dash.html"><li class="back"><i class="fa fa-chevron-circle-left  fa-3x" ></i></li></a>
	<div>
		<p><h1 class="ltext1">Journey Bookings</h1></p>
    </div>
   
 <div class="time">
 	<table >
 		<tr>
 			<th>User</th>
 			<th>No of passengers</th>
 			<th>Departure-Town</th>
 			<th>Arrival Town</th>
 			<th>Bus Type</th>
 			<th>Date</th>
 			<th>Payment Method</th>

 		</tr>
 		
 <?php 
while($rows=mysqli_fetch_assoc($result))
{
?>
<tr class="row1">
 			<td><?php echo $rows['name'] ?></td>
 			<td><?php echo $rows['no_of_passenger'] ?></td>
 			<td><?php echo $rows['from'] ?></td>
 			<td class="red"><?php echo $rows['to'] ?></td>
 			<td class="green"><?php echo $rows['bus_type'] ?></td>
 			<td><?php echo $rows['date'] ?></td>
 			<td><?php echo $rows['payment'] ?></td>
 </tr>
 <?php 
}
?>

</table>

 </div>


</body>
</html>