<?php include "ketnoi.php" ?>
<!DOCTYPE html>
<html lang="vn">
  <head>
   <?php include "header.php" ?>
  </head>
  <body>
  <?php include "nav.php" ?>

  <div class="hero-wrap" style="background-image: url('https://userscontent2.emaze.com/images/bae9a265-adcc-497e-92fc-528eea65f48b/95b05e943e88148535f443262b0b563f.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span><a href="room.php">Phòng</a></span></p>
	            <h1 class="mb-4 bread">TẤT CẢ PHÒNG</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-9">
		    		<div class="row">
					<?php
//  $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:4;
//  $current_page = !empty($_GET['page'])?$_GET['page']:1; //Trang hiện tại
//  $offset = ($current_page - 1) * $item_per_page;
//  $products = mysqli_query($con, "SELECT * FROM `phong` ORDER BY `p_id` ASC  LIMIT " . $item_per_page . " OFFSET " . $offset);
//  $totalRecords = mysqli_query($con, "SELECT * FROM `phong`");
//  $totalRecords = $totalRecords->num_rows;
//  $totalPages = ceil($totalRecords / $item_per_page);


                    
                     $sql = "SELECT * FROM phong,loaiphong  where phong.lp_id=loaiphong.lp_id ";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)) { ?>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    					<a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(admin/assets/img/product/<?php  echo $row['p_hinhanh']; ?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>"><?php  echo $row['p_ten']; ?></a></h3>
		    						<p><span class="price mr-2"><?php  echo number_format( $row['p_gia']); ?> VND</span> <br> <span class="per">một đêm</span></p>
		    						<ul class="list">
		    							<li><span>Số người:</span> <?php  echo $row['lp_succhua']; ?> Người</li>
		    							<li><span>Diện tích:</span> <?php  echo $row['p_dientich']; ?> m2</li>
		    							<li><span>Hướng tầm nhìn:</span> <?php  echo $row['p_view']; ?> </li>
		    						</ul>
		    						<hr>
                    <?php    if (isset($_SESSION['user'])){ 
	$user= $_SESSION['user'];?>
		    						<p  class="pt-1"><a  href="datphong.php?this_id=<?php  echo $row['p_id']; ?>" class="btn-custom">Đặt ngay <span class="icon-long-arrow-right"></span></a></p>
		    				<?php }else { ?>
                  		<p   style="cursor:pointer" class="pt-1"><a onclick="thongbao()"class="btn-custom">Đặt ngay <span class="icon-long-arrow-right"></span></a></p>
		    		
            <?php    } ?>			</div>
		    				</div>
		    			</div>
						<?php } ?>
		    			
		    		</div>
		    	</div>
		    	<div class="col-lg-3 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4 text-center">Lọc</h3>
	      			<form action="#">
	      				<div class="fields">
		              <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">Loại Phòng</option>
							<?php
                     $sql = "SELECT * FROM LOAIPHONG";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)) { ?>
	                    	<option value=""><?php  echo $row['lp_ten']; ?></option>
	                      
						  <?php } ?>
	                    </select>
	                  </div>
		              </div>
		              <div class="form-group"> 
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="" id="" class="form-control">
	                    	<option value="">0 người</option>
	                    	<option value="">1 người</option>	
	                      <option value="">2 người</option>
	                      <option value="">3 người</option>
	                      <option value="">4 người</option>
	                      <option value="">5 người</option>
	                      <option value="">6 người</option>
	                    </select>
	                  </div>
		              </div>
		            
		              <div class="form-group">
		              	<div class="range-slider">
		              		<span>
										    <input type="number" value="25000" min="0" max="120000"/>	-
										    <input type="number" value="50000" min="0" max="120000"/>
										  </span>
										</div>
		              </div>
		              <div class="form-group">
		                <input type="submit" value="Tìm Kiếm" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
	        </div>
		    </div>
    	</div>
    </section>


    <section class="instagram pt-5">
    <?php include "gioithieu.php" ?>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Deluxe Hotel</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
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
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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