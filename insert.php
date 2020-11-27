<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'tangkabodee.mysql.database.azure.com', 'kakasoro11@tangkabodee', '0809009565Aa', 'exam', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['Name'];
$weight = $_POST['Weight'];
$height = $_POST['Height'];
$bmi = $_POST['Weight']/$_POST['Height'**2];


$sql = "INSERT INTO guestbook (name , weight , height , bmi) VALUES ('$name', '$weight', '$height', '$bmi')";


if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>