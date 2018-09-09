<html>
<html lang="th">
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<table class = "table table-hover">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Lastname</th>
				<th>Email</th>
				<th>Age</th>
				<th>Address</th>
				<th>Gender</th>
				<th>Size</th>
			</tr>	
		</thead>
	<tbody>
<?php
include("conn/mysqlconn.php");
$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
// output data of each row
	while ($row = mysqli_fetch_assoc($result))
	 {
	 	// echo"<tbody><tr><td>".$row["uerid"]."</td></tr>";
?>
	<tr>
		<td><?php echo $row["userid"];?></td>
		<td><?php echo $row["name"];?></td>
		<td><?php echo $row["Lastname"];?></td>
		<td><?php echo $row["email"];?></td>
		<td><?php echo $row["age"];?></td>
		<td><?php echo $row["address"];?></td>
		<td><?php echo $row["gender"];?></td>
		<td><?php echo $row["SIZE"];?></td>
	</tr>
<?php
	//	echo "userid: " . $row["userid"]."- Name:" .$row["name"]." "."LastName:" .$row["Lastname"]." ".$row["email"]." ".$row["age"]." ". $row["address"]." ".$row["gender"].$row["SIZE"]."<br>";
	}
}else{
	echo"0 results";
}?>
</tbody>
</table>
</body>
</html>