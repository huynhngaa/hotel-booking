
<?php include "ketnoi.php" ;
$this_id = $_GET['this_id'];
$sql ="DELETE FROM phong WHERE p_id ='$this_id'";
mysqli_query($conn, $sql);
header('location:all-room.php');
?>