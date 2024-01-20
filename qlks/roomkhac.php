

<div class="col-md-12 room-single ftco-animate">
          			<h4 class="mb-6">Phòng Khác</h4>
          			<div class="row">
                      <?php
                   $sql = "SELECT * FROM PHONG where p_id <5";
                     //thuc thi cau lenh sql va dua doi tuong vao $result
                     $result = mysqLi_query($conn, $sql);
                    while($row = mysqli_fetch_array($result)) { ?>
          				<div class="col-sm col-md-3 ftco-animate">
				    				<div class="room">
				    					<a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url(admin/assets/img/product/<?php  echo $row['p_hinhanh']; ?>);">
				    						<div class="icon d-flex justify-content-center align-items-center">
				    							<span class="icon-search2"></span>
				    						</div>
				    					</a>
				    					<div class="text p-3 text-center">
				    						<h3 class="mb-3"><a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>"><?php  echo $row['p_ten']; ?></a></h3>
				    						<p><span class="price mr-2"><?php  echo number_format( $row['p_gia']); ?> VND</span></p>
				    						<hr>
				    						<p class="pt-1"><a href="chitietphong.php?this_id=<?php  echo $row['p_id']; ?>" class="btn-custom">Xem chi tiết <span class="icon-long-arrow-right"></span></a></p>
				    					</div>
				    				</div>
				    			</div>
                               <?php }?>
          			</div>
          		</div>