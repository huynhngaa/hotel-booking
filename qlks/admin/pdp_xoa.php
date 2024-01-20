
<?php include "ketnoi.php" ;
$this_id = $_GET['this_id'];
$sql ="DELETE FROM chitietphieudatphong WHERE pdp_id ='$this_id'";
mysqli_query($conn, $sql);
$sq ="DELETE FROM phieudatphong WHERE pdp_id ='$this_id'";
mysqli_query($conn, $sq);
header('location:index.php');
?>