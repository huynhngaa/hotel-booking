
<?php include "ketnoi.php" ;
$this_id = $_GET['this_id'];
$sql ="DELETE FROM loaiphong WHERE lp_id ='$this_id'";
mysqli_query($conn, $sql);
header('location:all_loaiphong.php');
?>