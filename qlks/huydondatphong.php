
<?php include "ketnoi.php" ;
if(isset($_POST['huy'])){
    $id = $_POST['id'];
    $pdp_id = $_POST['pdp_id'];
$s="UPDATE phong SET p_trangthai='0' where p_id = $id";
mysqli_query($conn,$s);
$sq="UPDATE chitietphieudatphong SET ctp_trangthai='0' where pdp_id = $pdp_id";
mysqli_query($conn,$sq);
header('location:lichsudatphong.php');
}

if(isset($_POST['xoa'])){
	$id = $_POST['id'];
    $pdp_id = $_POST['pdp_id'];
$s="UPDATE phong SET p_trangthai='3' where p_id = $id";
mysqli_query($conn,$s);
$sq="UPDATE chitietphieudatphong SET ctp_trangthai='3' where pdp_id = $pdp_id";
mysqli_query($conn,$sq);
header('location:lichsudatphong.php');
}
?> 
if (isset($_POST['luu'])) {
	$id = $_POST['id'];
	$name = $_POST['ten'];
	// $loaiphong = $_POST['loaiphong'];
	// $succhua = $_POST['succhua'];
	// $dientich = $_POST['dientich'];
	// $view = $_POST['view'];
	// $gia = $_POST['gia'];
	// $mota = $_POST['mota'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp_name = $_FILES['hinhanh']['tmp_name'];
	$sql = "UPDATE loaiphong SET lp_ten='$name', lp_hinhanh='$hinhanh' WHERE lp_id=$id";
	mysqli_query($conn, $sql);
	move_uploaded_file($hinhanh_tmp_name, 'assets/img/product/' . $hinhanh);
		header('location:all_loaiphong.php');
	
}
?>