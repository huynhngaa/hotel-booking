<?php include

"ketnoi.php";
 ?>
 
<!DOCTYPE html>
<html lang="vn">
    <?php include "header.php" ?>
  <body>
    <?php include "nav.php" ?>
	<?php include "bg.php" ?>

	<?php include "formtimkiem.php" ?>

	

    <section class="ftco-section bg-light">
    	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Ưu đãi đặc biệt từ KHÁCH SẠN HUYNH NGA</h2>
          </div>
        </div>    		
    		<div class="row">
			<?php
                     $sql = "SELECT * FROM LOAIPHONG";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);

                    while($row = mysqli_fetch_array($result)) { ?>
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="room">
						
    					<a href="chitietloaiphong.php?this_id=<?php  echo $row['lp_id']; ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(admin/assets/img/product/<?php  echo $row['lp_hinhanh']; ?>);">
    						<div class="icon d-flex justify-content-center align-items-center">
    							<span class="icon-search2"></span>
    						</div>
    					</a>
    					<div class="text p-3 text-center">
    					 <!-- 	<h3 class="mb-3"><a href="rooms.html">NÂNG HẠNG NGHỈ DƯỠNG</a></h3> -->
    						<p><span class="price mr-2"> <?php  echo $row['lp_ten']; ?></a> </span> </p>
    						<hr>
    						<p class="pt-1"><a href="chitietloaiphong.php?this_id=<?php  echo $row['lp_id']; ?>" class="btn-custom">Xem Chi Tiết <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>
    <section class="instagram">
      <?php include "gioithieu.php" ?>
    </section>
      <?php include "footer.php" ?>
  </body>
</html>