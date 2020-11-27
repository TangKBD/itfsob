<?php
//$ID = $_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'tangkabodee.mysql.database.azure.com', 'kakasoro11@tangkabodee', '0809009565Aa', 'tangkabodee', 3306);
if (mysqli_connect_errno($conn)) {
  die('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$name = $_POST['name'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$bmi = $weight / ($height / 100) ** 2;
$calc = round($bmi, 2);


$sql = "INSERT INTO exam (Name , weight , height, bmi) VALUES ('$name', '$weight', '$height', '$calc')";

if (mysqli_query($conn, $sql)) {
  echo "<script type='text/javascript'>";
  //echo "New record created successfully";
  echo "window.location = 'show.php'; ";
  echo "</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
