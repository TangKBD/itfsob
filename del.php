  
<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'tangkabodee.mysql.database.azure.com', 'kakasoro11@tangkabodee', '0809009565a', 'tangkabodee', 3306);
$sql="DELETE FROM guestbook WHERE ID='$id'";
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
if (mysqli_query($conn, $sql)) {
    header("Location: show.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);
?>
