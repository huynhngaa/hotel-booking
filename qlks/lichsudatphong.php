<?php
include "ketnoi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include "header.php" ?>
  </head>
  <body>

  <?php include "nav.php" ?>


    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('https://userscontent2.emaze.com/images/bae9a265-adcc-497e-92fc-528eea65f48b/95b05e943e88148535f443262b0b563f.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
            <!-- <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span><a href="room.php">Phòng</a></span></p> -->
	            <h1 class="mb-4 bread">LỊCH SỬ ĐẶT PHÒNG</h1>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section contact-section bg-light">
      <div class="container">
       
      <div class="col-md-12 mb-4">
            <h2 style="font-family: 'Readex Pro', sans-serif;" class="h3">Lịch Sử Đặt Phòng</h2>
          </div>
         <?php $sql = "SELECT * FROM phieudatphong a, phong b,chitietphieudatphong c  where a.pdp_id=c.pdp_id and a.p_id =b.p_id and ctp_trangthai<>3 and kh_id = '".$user['kh_id']."' ORDER BY a.pdp_id DESC";
         
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)){  $date = $row['pdp_ngayden'];
                      $date2 =  $row['pdp_ngaydi'];
                      $date=strtotime($date);
                      $date=date('d/m/Y',$date);
                      $date2=strtotime($date2);
                      $date2=date('d/m/Y',$date2); ?>
      
     <div style="box-shadow: 0px 0px 7px 2px #bababa; background-color:white" class="border row d-flex mb-5 ">
          
          <div class="w-100"  > </div>
         
          <div  class="col-md-2 d-flex">
          	<div class=" bg-white p-2 mt-3 mb-3  ;" >
              <img style="box-shadow: 0px 0px 5px 1px #888888" class="rounded" width="120px" src="admin/assets/img/product/<?php echo $row['p_hinhanh']?>" alt="">
	           
	          </div>
          </div>
       
      <a  href="chitietbook.php?this_id=<?php  echo $row['pdp_id']; ?>">  <div class="col-md-6 d-flex">
          	<div style="line-height:1" class=" bg-white  mt-3 mb-3 ">
	           <a  style="color:#444444 ;" href="chitietbook.php?this_id=<?php  echo $row['pdp_id']; ?>">   <h5 style="font-family: 'Readex Pro', sans-serif;" > <b> <?php echo $row['p_ten'] ?></h5></b> </a>
           
              <a style="color: #666666 "; href="chitietbook.php?this_id=<?php  echo $row['pdp_id']; ?>"> <p><span> <?php   echo $date ?> - <?php echo $date2 ?> </span></p></a>
              <a style="color: #666666 "> <p><span> <?php  $tt= $row['ctp_trangthai']; if($tt == 1) $tt='Đặt thành công'; if($tt == 0) $tt='Đã huỷ'  ; if($tt == 2) $tt='Hoàn thành';  echo $tt ?> </span></p></a>
           
	          </div>
          </div>
          </a> 
          <div class="col-md-3 d-flex">
          	<div class=" bg-white p-4">
	            <h3 style="font-family: 'Readex Pro', sans-serif;color: #666666 "><?php echo number_format( $row['pdp_gia']); ?> đ </h3>
              
	          </div>
          </div>
          <form action="huydondatphong.php" method="post">
          <div style="padding-top:140%"  class="col-md-1"> 
													<div class=""> <a href="#"  data-toggle="dropdown" aria-expanded="false"><i style="font-size: 1.5rem" class="fas fa-ellipsis-v ellipse_color"></i></a>
														<div class="dropdown-menu dropdown-menu-right"> 
                              <a type="button" class="dropdown-item" href="chitietbook.php?this_id=<?php  echo $row['pdp_id']; ?>"><i class="fas fa-pencil-alt m-r-5"></i> Xem chi tiết</a>
                            <input type="hidden" name="id" value=<?php echo $row['p_id'] ?>> 
                            <input type="hidden" name="pdp_id" value=<?php echo $row['pdp_id'] ?>> 
                             <!-- <a name="xoa" class="dropdown-item" href="#"  data-toggle="modal" data-target="#delete_asset"><i class="fas fa-trash-alt m-r-5"></i> Huỷ đặt phòng</a> -->
                             <button  class="dropdown-item" type="submit"  name="huy" class="btn btn-primary py-3 px-5" ><i class="fa-solid fa-ban"></i> Huỷ phòng</button>
                             <button class="dropdown-item" type="submit"  name="xoa" class="btn btn-primary py-3 px-5" ><i class="fa-solid fa-trash-can"></i>  Xoá đơn đặt phòng</button>
                            </div>
													</div>
												</div></form>
                        
        </div> <?php }
?>
        <!-- <div style="box-shadow: 0px 0px 7px 2px #bababa; background-color:white" class=" border row d-flex mb-5 contact-info">
          
          <div class="w-100"  > </div>
         
          <div  class="col-md-2 d-flex">
          	<div class="info bg-white p-2 mt-3 mb-3  ;" >
              <img style="box-shadow: 0px 0px 5px 1px #888888" class="rounded" width="120px" src="https://w0.peakpx.com/wallpaper/240/377/HD-wallpaper-bedroom-hotel-room-light-design-modern-apartment-interior-idea-modern-design.jpg" alt="">
	           
	          </div>
          </div>
          
          <div class="col-md-7 d-flex">
          	<div style="line-height:1" class="info bg-white  mt-3 mb-3 ">
	           <a  style="color:#444444 ; " href="tel://1234567920">   <h5 style="font-family: 'Readex Pro', sans-serif;" > <b> Giường đôi</h5></b> </a>
           
              <a style="color: #666666 ;" href="tel://1234567920"><p><span> 10 Tháng 11 - 11 Tháng 11 Năm 2022</span></p></a>
             <a style="color:#666666 ;" href="tel://1234567920"><p>Đã hoàn thành</p></a>
	          </div>
          </div>
         
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <h3 style="font-family: 'Readex Pro', sans-serif;color: #666666 ">200,000 đ </h3>
              
	          </div>
          </div>
        </div> -->
        <!-- <div style="box-shadow: 0px 0px 7px 2px #bababa; background-color:white" class=" border row d-flex mb-5 contact-info">
          
          <div class="w-100"  > </div>
         
          <div  class="col-md-2 d-flex">
          	<div class="info bg-white p-2 mt-3 mb-3  ;" >
              <img style="box-shadow: 0px 0px 5px 1px #888888" class="rounded" width="120px" src="https://w0.peakpx.com/wallpaper/240/377/HD-wallpaper-bedroom-hotel-room-light-design-modern-apartment-interior-idea-modern-design.jpg" alt="">
	           
	          </div>
          </div>
          
          <div class="col-md-7 d-flex">
          	<div style="line-height:1" class="info bg-white  mt-3 mb-3 ">
	           <a  style="color:#444444 ; " href="tel://1234567920">   <h5 style="font-family: 'Readex Pro', sans-serif;" > <b> Giường đôi</h5></b> </a>
           
              <a style="color: #666666 ;" href="tel://1234567920"><p><span> 10 Tháng 11 - 11 Tháng 11 Năm 2022</span></p></a>
             <a style="color:#666666 ;" href="tel://1234567920"><p>Đã hoàn thành</p></a>
	          </div>
          </div>
         
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <h3 style="font-family: 'Readex Pro', sans-serif;color: #666666 ">200,000 đ </h3>
              
	          </div>
          </div>
        </div> -->
        <!-- <div style="box-shadow: 0px 0px 7px 2px #bababa; background-color:white" class=" border row d-flex mb-5 contact-info">
          
          <div class="w-100"  > </div>
         
          <div  class="col-md-2 d-flex">
          	<div class="info bg-white p-2 mt-3 mb-3  ;" >
              <img style="box-shadow: 0px 0px 5px 1px #888888" class="rounded" width="120px" src="https://w0.peakpx.com/wallpaper/240/377/HD-wallpaper-bedroom-hotel-room-light-design-modern-apartment-interior-idea-modern-design.jpg" alt="">
	           
	          </div>
          </div>
          
          <div class="col-md-7 d-flex">
          	<div style="line-height:1" class="info bg-white  mt-3 mb-3 ">
	           <a  style="color:#444444 ; " href="tel://1234567920">   <h5 style="font-family: 'Readex Pro', sans-serif;" > <b> Giường đôi</h5></b> </a>
           
              <a style="color: #666666 ;" href="tel://1234567920"><p><span> 10 Tháng 11 - 11 Tháng 11 Năm 2022</span></p></a>
             <a style="color:#666666 ;" href="tel://1234567920"><p>Đã hoàn thành</p></a>
	          </div>
          </div>
         
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <h3 style="font-family: 'Readex Pro', sans-serif;color: #666666 ">200,000 đ </h3>
              
	          </div>
          </div>
        </div> -->


        
      </div>
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
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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