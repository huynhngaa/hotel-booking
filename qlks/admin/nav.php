<div class="header">
			<div class="header-left">
				<a href="admintohome.php" class="logo"> <img src="assets/img/logo.png" width="50" height="70" alt="logo"> <span class="logoclass">HOTEL</span> </a>
				<a href="admintohome.php" class="logo logo-small"> <img src="assets/img/logo.png" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="https://technewsdaily.vn/uploads/2022/03/07/turning-red-2.jpg" width="31" alt="nga"></span> </a>
					<div class="dropdown-menu">
					<?php  session_start();
if (isset($_SESSION['admin'])){ 
	$admin= $_SESSION['admin'];?>
	<div class="user-header">
							<!-- <div class="avatar avatar-sm"> <img src="https://technewsdaily.vn/uploads/2022/03/07/turning-red-2.jpg" alt="User Image" class="avatar-img rounded-circle"> </div> -->
							<div class="user-text">
								<h6><?php echo $admin['nv_ten']; ?></h6>
								
							</div>
						</div> <a class="dropdown-item" href="profile.html">Hồ sơ</a>  <a class="dropdown-item" href="logout.php">Đăng xuất</a> </div>
	<?php
} else { header('location:login.php'); 
}
?>
						
				</li>
			</ul>
		</div>