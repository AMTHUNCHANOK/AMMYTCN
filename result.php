<?php
include("conn/mysqlconn.php");
// define variables and set to empty values
$name = $Laastname =  $email = $gender = $comment = $address = $SIZE = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $Lastname = test_input($_POST["Lastname"]);
  //$name = trim($_POST["name"]);
  $email = test_input($_POST["email"]);
  $age = test_input($_POST["age"]);
  $address = test_input($_POST["address"]);
  $gender = test_input($_POST["gender"]);
  $SIZE = test_input($_POST["SIZE"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $name."<br>".$Lastname."<br>".$email."<br>".$age."<br>".$address."<br>".$gender."<br>".$SIZE."<br>";

//insert data
$sql = "INSERT INTO userprofile (name, Lastname, email, age, address, gender, SIZE) 
VALUES ('$name', '$Lastname', '$email', '$age', '$address', '$gender', 'SIZE')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
<br>
<a href="report.php" target="_blank">ดูรายชื่อผู้สมัคร</a>