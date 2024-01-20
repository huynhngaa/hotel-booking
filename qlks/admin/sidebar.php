<?php  
					
if (isset($_SESSION['admin'])){ 
	$admin= $_SESSION['admin'];
	if($admin['tk_level']==0){

	
	?>


<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
					
						<li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Bảng điều khiển</span></a> </li>
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Đơn đặt phòng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking.php"> Tất cả đơn đặt phòng </a></li>
								<li><a href="add-booking.php"> Thêm đơn đặt phòng </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-solid fa-user-group"></i> <span> Khách hàng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-customer.php"> Tất cả khách hàng </a></li>
								
								<li><a href="add-customer.php"> Thêm khách hàng </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-solid fa-house"></i> <span> Loại phòng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all_loaiphong.php">Tất cả loại phòng </a></li>
								<li><a href="add_loaiphong.php"> Thêm loại phòng </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-solid fa-house"></i> <span> Phòng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-room.php">Tất cả phòng </a></li>
								<li><a href="add-room.php"> Thêm phòng </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-sharp fa-solid fa-user-tie"></i><span> Nhân viên </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-staff.php">Tất cả nhân viên </a></li>
								
								<li><a href="add-staff.php"> Thêm nhân viên </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-solid fa-user-lock"></i> <span> Tài khoản</span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
				
								<li><a href="acc_nv.php">Tài khoản nhân viên </a></li>
								<li><a href="acc_kh.php">Tài khoản khách hàng </a></li>
								
							</ul>
						</li>
						<!-- <li class="submenu"> <a href="#"><i class="fa-solid fa-hotel"></i> <span> Khách sạn</span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.html">Xem thông tin </a></li>
								<li><a href="payments.html">Chỉnh sửa thông tin </a></li>
								
							</ul>
						</li> -->
						
						<!-- <li class="submenu"> <a href="#"><i class="fa-brands fa-blogger-b"></i> <span> Tin tức </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="blog.html">Tất cả tin tức</a></li>
								<li><a href="blog-details.html">Thêm tin tức </a></li>
							</ul>
						</li>
						
						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Cài đặt</span></a> </li>
						<li class="list-divider"></li> -->
						
					
					</ul>

				</div>
			</div>
		</div>


		
	<?php
} else { ?>
	<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<!-- <li> <a href="index.php"><i class="fas fa-tachometer-alt"></i> <span>Bảng điều khiển</span></a> </li> -->
						<li class="list-divider"></li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Đơn đặt phòng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-booking.php"> Tất cả đơn đặt phòng </a></li>
								<li><a href="add-booking.php"> Thêm đơn đặt phòng </a></li>
							</ul>
						</li>
						<li class="submenu"> <a href="#"><i class="fa-solid fa-user-group"></i> <span> Khách hàng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-customer.php"> Tất cả khách hàng </a></li>
								<li><a href="add-customer.php"> Thêm khách hàng </a></li>
							</ul>
						</li>
						 <li class="submenu"> <a href="#"><i class="fa-solid fa-house"></i> <span> Phòng </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-room.php">Tất cả phòng </a></li>
								<li><a href="all_loaiphong.php"> Tất cả loại phòng </a></li>
							</ul>
						</li> 
						 <li class=""> <a href="lich.php"><i class="fa-solid fa-house"></i> <span> Lịch làm việc </span> <span class="menu-arrow"></span></a>
							
						</li> 
						<!-- <li class="submenu"> <a href="#"><i class="fa-sharp fa-solid fa-user-tie"></i><span> Nhân viên </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="all-staff.php">Tất cả nhân viên </a></li>
								
								<li><a href="add-staff.php"> Thêm nhân viên </a></li>
							</ul>
						</li> -->
						<!-- <li class="submenu"> <a href="#"><i class="fa-solid fa-user-lock"></i> <span> Tài khoản</span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.html">Tài khoản nhân viên </a></li>
								<li><a href="payments.html">Tài khoản khách hàng </a></li>
								
							</ul>
						</li> -->
						<!-- <li class="submenu"> <a href="#"><i class="fa-solid fa-hotel"></i> <span> Khách sạn</span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="invoices.html">Xem thông tin </a></li>
								<li><a href="payments.html">Chỉnh sửa thông tin </a></li>
								
							</ul>
						</li> -->
						
						<li class="submenu"> <a href="#"><i class="fa-brands fa-blogger-b"></i> <span> Tin tức </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="blog.html">Tất cả tin tức</a></li>
								<li><a href="blog-details.html">Thêm tin tức </a></li>
							</ul>
						</li>
						
						<li> <a href="settings.html"><i class="fas fa-cog"></i> <span>Cài đặt</span></a> </li>
						<li class="list-divider"></li>
						
					
					</ul>

				</div>
			</div>
		</div>
<?php }}
?>