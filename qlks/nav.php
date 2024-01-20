<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Huynh Nga</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Trang Chủ</a></li>
	          <li class="nav-item"><a href="room.php" class="nav-link">Phòng</a></li>
	          <!-- <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
			  <!-- <li class="nav-item"><a href="lienhe.php" class="nav-link">Liên Hệ</a></li> -->
			<?php  
			// session_start();
if (isset($_SESSION['user'])){ 
	$user= $_SESSION['user'];
		$sql = "SELECT * FROM khachhang where kh_id='".$user['kh_id']."'";
										//thuc thi cau lenh sql va dua doi tuong vao $result
										$result = mysqLi_query($conn, $sql);

										$row = mysqli_fetch_array($result) ?>
<div class="btn-group nav-item">
	
<a style="color:#E8BFFB; font-size: 17px;" href="login.php" type="button" class="btn nav-link dropdown-toggle"
   data-toggle="dropdown"
   aria-haspopup="true" aria-expanded="false"> <b >   <font face = "Verdana" size = "3"><?php echo $row['kh_ten']; ?> </font> </b></a><br /> 
<div class="dropdown-menu dropdown-menu-dark">
   <a  class="dropdown-item" href="taikhoan.php">Tài khoản</a>
   <a class="dropdown-item" href="lichsudatphong.php">Lịch sử</a>
   <div class="dropdown-divider"></div>
   <a class="dropdown-item" href="logout.php">Đăng xuất</a>
</div>

</div>


	<?php
} else {
?>

	          <li class="nav-item"><a href="login.php" class="nav-link">Đăng Nhập</a></li>
			  <?php
} 
?>
	        </ul>
	      </div>
	    </div>
	  </nav>



	  