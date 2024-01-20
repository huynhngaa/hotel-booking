<?php include "ketnoi.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php" ?>
  <body>
<?php
// if (isset($_POST['datphong'])){
//  // $p_id = $_POST['p_id'];
//   $sq ="SELECT * FROM phong WHERE p_id  = '$_REQUEST[p_id]'";
//   $res = mysqLi_query($conn, $sq);
//   $ro = mysqli_fetch_array($res) ;

  
// }
?>
  <?php include "nav.php" ?>  
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
   
    <section  class="ftco-section">
      <div class="container">
        <form action="chitietphong.php" method="post">
        <div class="row">

        <?php
		$this_id = $_GET["this_id"];
$sql ="SELECT * FROM phong,loaiphong, phieudatphong,chitietphieudatphong where chitietphieudatphong.pdp_id=phieudatphong.pdp_id and phieudatphong.p_id=phong.p_id and loaiphong.lp_id=phong.lp_id and phieudatphong.pdp_id = '$this_id'";
                  
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                    
					 
$query =mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($query);
$checkin = $row['pdp_ngayden'];
$checkout = $row['pdp_ngaydi'];
$ngayden =  strtotime($checkin);
$ngaydi = strtotime($checkout);

$date=strtotime($checkin);
$date=date('d/m/Y',$date);
$date2=strtotime($checkout);
$date2=date('d/m/Y',$date2);
$giatri = abs($ngayden - $ngaydi);
$ngayo=floor($giatri / (60*60*24));
$date3= $row['pdp_ngaytao'];
$date3=strtotime($date3);
$date3=date('H:m:s - d/m/Y',$date3);
                     ?>
          <div class="border border-2 col-lg-3 ml-5 mr-3">
            <p><b style="color:black" > Chi tiết đặt phòng </b></p>
            <span>Thời gian đặt <b><?php echo $date3 ?></b></span>
          	<div class="row">
          		<div class="col-md-6 ftco-animate">
          		<span>Nhận phòng</span> <br>
          			<span><?php echo $date ?></span> <br>
                      
          		</div>
                  <div class="col-md-6 ftco-animate">
          		<span>Trả phòng</span> <br>
                <span><?php echo $date2 ?></span> <br>
              
          		</div>
                  <div class="col-md-6 ftco-animate">
          		<span>Người lớn  <?php echo $row['ctp_nguoilon'] ?></span> <br>
	
          		</div>
                  <div class="col-md-6 ftco-animate">
                  <span>Trẻ em  <?php echo $row['ctp_treem'] ?></span> <br>
          				
          		</div>
              </div> 
              <span>Tổng thời gian lưu trú <b><?php echo $ngayo ?> đêm</b> </span> <br>
              
              <span>Tổng tiền <b style="font-size: 20px;color:black">       <?php  echo number_format( $row['pdp_gia']); ?>  VND</b> </span>
              </div>
              


<div class="border border-2  col-lg-8 sidebar ftco-animate">
    <div class="row mt-4 ml-1" > 
<div class="col-sm-4 room-img" style="height: 200px;; background-image: url(admin/assets/img/product/<?php echo $row['p_hinhanh'] ?> );"></div>
          				
<!-- <div class="sidebar-box ftco-animate"> -->
  <div class="col-sm-8 categories">
<span>Tên phòng: <?php echo $row['p_ten'] ?> </span> <br>
<span>Loại phòng: <?php echo $row['lp_ten'] ?> </span> <br>
<span>Giá: <?php  echo number_format( $row['p_gia']); ?> đ/đêm </span> <br>

<span>Diện tích: <?php echo $row['p_dientich'] ?> m2</span> <br>
 <span>Sức chứa: <?php echo $row['p_succhua'] ?> người lớn 1 trẻ em </span> <br>
<span> <img style="width:1.5rem" src="https://cdn-icons-png.flaticon.com/512/63/63892.png" alt="">  <?php echo $row['p_dientich'] ?> giường</span>
	    						
                    
									<li><span>Hướng tầm nhìn: </span><?php echo $row['p_view'] ?></li>
									
									
  <!-- </div> --></div>
</div> 
</div>
</div>
  
    						
                </form>	
          		
      </div>
    </section> <!-- .section -->
   <?php include "footer.php" ?>
  </body>
</html>