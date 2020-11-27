<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'tangkabodee.mysql.database.azure.com', 'kakasoro11@tangkabodee', '0809009565Aa', 'exam', 3306);
$name=$_POST['Name'];
$weight=$_POST['Weight'];
$height=$_POST['Height'];
$bmi = $_POST['Weight/Height**2'];
$sql="UPDATE guestbook SET Name='$name',Weight='$weight',Height='$height',bmi='$total'  WHERE ID='$id'";
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
