<?php include "ketnoi.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>
  <body>
<?php
if (isset($_POST['btn-ten'])){
  $id=$_POST['id'];
  $ten = $_POST['ten'];
  $sql = "UPDATE khachhang SET kh_ten='$ten' WHERE kh_id=$id";
	mysqli_query($conn, $sql);  
 }

 if (isset($_POST['btn-diachi'])){
  $id=$_POST['id'];
  $dc = $_POST['diachi'];
  $sql = "UPDATE khachhang SET kh_diachi='$dc' WHERE kh_id=$id";
	mysqli_query($conn, $sql);  
 }

 if (isset($_POST['btn-sdt'])){
  $id=$_POST['id'];
  $sdt = $_POST['sdt'];
  $sql = "UPDATE khachhang SET kh_sdt='$sdt' WHERE kh_id=$id";
	mysqli_query($conn, $sql);  
 }
 if (isset($_POST['btn-email'])){
  $id=$_POST['id'];
  $email = $_POST['email'];
  $sql = "UPDATE khachhang SET kh_email='$email' WHERE kh_id=$id";
	mysqli_query($conn, $sql);  
 }
 if (isset($_POST['btn-mk'])){
  $id=$_POST['id'];
  $mk = md5($_POST['mk']);
  $sql = "UPDATE taikhoan SET tk_password='$mk' WHERE kh_id=$id";
	mysqli_query($conn, $sql);  
 }
?>
  <?php include "nav.php";
  ?>
  

    <!-- END nav -->
    <div class="hero-wrap" style="height:110px; background-color:#2c6ebe">
      <!-- <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span><a href="room.php">Phòng</a></span></p>
	            <h1 class="mb-4 bread"><?php 
                // $this_id = $_GET["this_id"];
                // $sql ="SELECT * FROM phieudatphong WHERE pdp_id = '$this_id'";
                                
                //                      //thuc thi cau lenh sql va dua doi tuong vao $result
                //                      $result = mysqLi_query($conn, $sql);
                //                     $row = mysqli_fetch_array($result) ;
                //                       echo $row['p_ten'] ?>
                                    </h1>
            </div>
          </div>
        </div>
      </div> -->
    </div>
   
    <section  style="background-color: #E8E8E8" class="ftco-section">
      <div class="container ">
       
        <div class="row">

        <?php
// 		$this_id = $_GET["this_id"];
// $sql ="SELECT * FROM phong a, loaiphong b WHERE a.lp_id=b.lp_id and p_id = '$this_id'";
                  
//                      //thuc thi cau lenh sql va dua doi tuong vao $result
                    
					 
// $query =mysqli_query($conn, $sql);
// $row =mysqli_fetch_assoc($query);
                     ?>


<?php if (isset($_SESSION['user'])){ 
	$user=$_SESSION['user'];
	?>
  <?php
  $sql = "SELECT * FROM khachhang  where kh_id = '".$user['kh_id']."'";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                   $r = mysqli_fetch_assoc($result); ?>
          <div style="background-color: white"  class="col-lg-3 p-2 ml-5">
          	<div  class="row">
          		<div  class="col-md-12 ftco-animate">
          		
          			<img width="100%" src="admin/assets/img/profiles/<?php echo $r['kh_hinhanh']; ?> " alt="">
                      <div class="categories">

                      <li  style="margin-bottom: 0px;padding-bottom: 1px;margin-top: 10px;padding-top: 10px;">   
                      <p> <a href="lichsudatphong.php">Lịch sử đặt phòng</a>  </p>
                    </li>	
                      <li  style="margin-bottom: 0px;padding-bottom: 1px;margin-top: 10px;padding-top: 10px;">  
                       <p> <a href="logout.php">  Đăng xuất </a></p>
                      </li>
                      		
                      </div>
          		</div>
              </div>
            
              </div>
              


<div  style="background-color: white" class=" col-lg-7 ml-3  sidebar ftco-animate">
<h5 class="card-title d-flex justify-content-between">
									<span><b> THÔNG TIN CÁ NHÂN </b></span>
								
								</h5>
<!-- <div class="sidebar-box ftco-animate"> -->
  <div class="categories">
  
 <?php
  $sql = "SELECT * FROM khachhang  where kh_id = '".$user['kh_id']."'";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                   $r = mysqli_fetch_assoc($result); ?>
<li></li>
<div class="row"> 
<p class=" col-lg-10" >Họ và tên: <?php echo $r['kh_ten'] ?> </p>
<span  style="cursor:pointer" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Chỉnh sửa
</span>
</div>
<div class="collapse" id="collapseExample">
<form action="taikhoan.php" method="post">
<div  class="row"> 
<div class="col-lg-10">
    <input  type="text" class="form-control" placeholder="Nhập họ và tên " name="ten" required>
  </div>
  <input  type="hidden" class="form-control" value="<?php echo $user['kh_id'] ?>" placeholder="Nhập họ và tên " name="id" required>
 
  <button name="btn-ten"   style="  border-radius: 6px;"  class="btn btn-info col-lg-1">Lưu</button>
  </div>
  </form>		       
</div> 

<div class="row"> 
<p class=" col-lg-10" >Số điện thoại: <?php echo $r['kh_sdt'] ?> </p>
<span  style="cursor:pointer" data-toggle="collapse" data-target="#collapseExampl" aria-expanded="false" aria-controls="collapseExampl">
    Chỉnh sửa
</span>
</div>
<div class="collapse" id="collapseExampl">
<form action="taikhoan.php" method="post">
  <div  class="row"> 
<div class="col-lg-10">
    <input  type="text"  pattern="[0-9]{10}" title="Số điện thoại không hợp lệ!"  class="form-control" placeholder="Nhập số điện thoại " name="sdt" required>
  </div>
  <input  type="hidden" class="form-control" value="<?php echo $user['kh_id'] ?>" placeholder="Nhập họ và tên " name="id" required>
 
  <button name="btn-sdt"  style="border-radius: 6px;"  class="btn btn-info col-lg-1">Lưu</button>
  </div>
</form>
</div> 

<div class="row"> 
<p class=" col-lg-10" >Email: <?php echo $r['kh_email'] ?> </p>
<span  style="cursor:pointer" data-toggle="collapse" data-target="#collapseExamp" aria-expanded="false" aria-controls="collapseExamp">
    Chỉnh sửa
</span>
</div>
<div class="collapse" id="collapseExamp">
<form action="taikhoan.php" method="post">
<div  class="row"> 
<div class="col-lg-10">
    <input  type="text" class="form-control" placeholder="Nhập email" name="email" required>
  </div>
  <input  type="hidden" class="form-control" value="<?php echo $user['kh_id'] ?>" placeholder="Nhập họ và tên " name="id" required>
  <button name="btn-email"  style="  border-radius: 6px;"  class="btn btn-info col-lg-1">Lưu</button>
  </div>
</form>
</div> 
<?php
                     $sql = "SELECT * FROM taikhoan where kh_id = '".$user['kh_id']."'";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                   $ro = mysqli_fetch_assoc($result); ?>


	    						
                    
<div class="row"> 
<p class=" col-lg-10" >Mật khẩu: Thay đổi mật khẩu mới<?php //echo $ro['tk_password'] ?> </p>
<span  style="cursor:pointer" data-toggle="collapse" data-target="#collapseExa" aria-expanded="false" aria-controls="collapseExa">
    Chỉnh sửa
</span>
</div>
<div class="collapse" id="collapseExa">
<form action="taikhoan.php" method="post">
<div  class="row"> 
<div class="col-lg-10">
    <input  type="text" class="form-control" placeholder="Nhập mật khẩu mớI " name="mk" required>
  </div>
  <input  type="hidden" class="form-control" value="<?php echo $user['kh_id'] ?>" placeholder="Nhập họ và tên " name="id" required>
  <button name="btn-mk"  style="  border-radius: 6px;"  class="btn btn-info col-lg-1">Lưu</button>
  </div>
  </form>
</div> 
<div class="row"> 
<p class=" col-lg-10" >Địa chỉ: <?php echo $r['kh_diachi'] ?> </p>
<span  style="cursor:pointer" data-toggle="collapse" data-target="#collapseEx" aria-expanded="false" aria-controls="collapseEx">
    Chỉnh sửa
</span>
</div>
<div class="collapse" id="collapseEx">
<form action="taikhoan.php" method="post">
  <div  class="row"> 
<div class="col-lg-10">
    <input  type="text" class="form-control" placeholder="Cập nhật địa chỉ " name="diachi" required>
  </div>
  <input  type="hidden" class="form-control" value="<?php echo $user['kh_id'] ?>" placeholder="Nhập họ và tên " name="id" required>
 
  <button name="btn-diachi"  style="  border-radius: 6px;"  class="btn btn-info col-lg-1">Lưu</button>
  </div>
</form>
</div> 
				
									
  <!-- </div> -->
</div> </div>
</div>



                <?php } ?>
          		
      </div>
    </section> <!-- .section -->
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Thông Tin Liên Hệ</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Blog</a></li>
                <li><a href="#" class="py-2 d-block">Rooms</a></li>
                <li><a href="#" class="py-2 d-block">Amenities</a></li>
                <li><a href="#" class="py-2 d-block">Gift Card</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Career</a></li>
                <li><a href="#" class="py-2 d-block">Về Chúng Tôi</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Dịch Vụ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Liên Hệ</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">DHCT, Xuân Khánh, Ninh Kiều, Cần Thơ</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">094594536</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">huynhnga@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>