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
    <div class="hero-wrap" style="background-image: url('https://userscontent2.emaze.com/images/bae9a265-adcc-497e-92fc-528eea65f48b/95b05e943e88148535f443262b0b563f.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.php">Trang chủ</a></span>/ <span><a href="room.php">Phòng</a></span></p>
	            <h1 class="mb-4 bread"><?php 
                $this_id = $_GET["this_id"];
                $sql ="SELECT * FROM phong WHERE p_id = '$this_id'";
                                
                                     //thuc thi cau lenh sql va dua doi tuong vao $result
                                     $result = mysqLi_query($conn, $sql);
                                    $row = mysqli_fetch_array($result) ;
                                      echo $row['p_ten'] ?>
                                    </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
   
    <section class="ftco-section">
      <div class="container">
        <!-- <form action="chitietphong.php" method="post"> -->
        <div class="row">

        <?php
		$this_id = $_GET["this_id"];
$sql ="SELECT * FROM phong a, loaiphong b WHERE a.lp_id=b.lp_id and p_id = '$this_id'";
                  
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                    
					 
$query =mysqli_query($conn, $sql);
$row =mysqli_fetch_assoc($query);
                     ?>



          <div class="col-lg-7">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          		
          			
          					<div class="room-img" style="background-image: url(admin/assets/img/product/<?php echo $row['p_hinhanh'] ?> );"></div>
          				
          		</div>
              </div>
            
              </div>
              


<div class="col-lg-5 sidebar ftco-animate">
<!-- <div class="sidebar-box ftco-animate"> -->
  <div class="categories">
  <h2 > <?php echo $row['p_ten'] ?> </h2>
  
  
 <b>Giá:             <span class="price mr-2ext-danger" style="font-size:2rem; color:#e77348 ">    <?php  echo number_format( $row['p_gia']); ?> đ</span></b> <br>    
<li></li>
<p>Loại phòng: <?php echo $row['lp_ten'] ?> </p>
<p>Diện tích: <?php echo $row['p_dientich'] ?> m2</p>
 <p>Sức chứa: <?php echo $row['lp_succhua'] ?> người </p>
<p> <img style="width:1.5rem" src="https://cdn-icons-png.flaticon.com/512/63/63892.png" alt="">  <?php echo $row['p_dientich'] ?> giường</p>
	    						
                    
									<li><span>Hướng tầm nhìn: </span><?php echo $row['p_view'] ?></li>
               
									<div class="form-group">
                  <?php    if (isset($_SESSION['user'])){ 
	$user= $_SESSION['user'];?>
		    				<a href="datphong.php?this_id=<?php  echo $row['p_id']; ?>"  >
		                 <button name="datphong" type="button"  class="btn btn-primary py-2 px-5"> Đặt phòng </button> </a>
                         				<?php }else { ?>
                  <a onclick="thongbao()"  >
		                 <button name="datphong" type="button"  class="btn btn-primary py-2 px-5"> Đặt phòng </button> </a>
            <?php    } ?>	
                  
		              </div>
									
  <!-- </div> -->
</div> </div>
</div>
  
    						<p>Phòng nghỉ tại đây rộng rãi và được trang trí trang nhã. Các phòng có máy điều hòa, khu vực ghế ngồi, TV màn hình phẳng và két an toàn. Chỗ ở cũng được bố trí tủ lạnh và ấm đun nước điện. Du khách có thể ngắm nhìn quang cảnh thành phố từ một số phòng. Phòng tắm riêng có vòi sen/bồn tắm, máy sấy tóc và đồ vệ sinh cá nhân miễn phí.	 </p>
    						
                <!-- </form>	 -->
          		<?php include "roomkhac.php" ?>
      </div>
    </section> <!-- .section -->
   <?php include "footer.php" ?>
  </body>
</html>