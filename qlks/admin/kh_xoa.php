
<?php include "ketnoi.php" ;
$this_id = $_GET['this_id'];
$sl="DELETE FROM taikhoan where kh_id ='$this_id'";
mysqli_query($conn,$sl);
$sql ="DELETE FROM khachhang WHERE kh_id ='$this_id'";
mysqli_query($conn, $sql);
header('location:all-customer.php');

?>