
<div class="wraper_cart">
  
        <div class="user_cart">
            <?php
            $i = 0;
            $tong = 0;
       
            ?>
            <?php  foreach ($_SESSION['mycart'] as $cart) {
            $xoa = '<a href="index.php?p=del&idcart='.$i.'"><input type="button" value="Xóa"></a>' ;   
            
            $tong+=$cart[5];  
            ?>
          
            <div class="prd_added">
                <div class="prd_added-img">
                    <img src="<?= $cart[2] ?>" alt="">
                </div>
                <div class="prd_added-name">
                
                    <span><?= $cart[1] ?></span>
                </div>
                <div class="prd_added-price">
                <span>Đơn Giá</span> <br> <br> <br>
                    <span><?= $cart[3] ?></span> VNĐ
                </div>
                <div class="prd_added-num">
                <span>Số Lượng</span> <br> <br> <br>
                    <span><?= $cart[4] ?></span>
                </div>
               
                <div class="prd_added-total-price">
                    <span>Tổng Giá</span> <br> <br> <br>
                    <span><?= $cart[5] ?></span>.000 VNĐ
                </div>
                <div class="prd_added-delete">
                    <?= $xoa?>
                </div>
            </div>
         <?php $i +=1; 
        }  ?>
        <?php if($_SESSION['mycart'] == []){
            echo '
            <div class="total-cart">
             <span>Không có sản phẩm nào trong Giỏ Hàng </span>
               
         </div>  ';
        }else{
            echo '
            <div class="total-cart">
             <span>Tổng tiền  cần thanh toán: </span>
             <span> '.$tong.'</span>.000 VNĐ
         
            
         </div>';
        } ?>
        </div>
        <div class="user-infor">
            <h4>Thông Tin Thanh Toán</h4>
            
            <form action="" method="post">
                <?php if (isset($_SESSION['user'])) { $if= infor($_SESSION['user']['idUser']); ?>
                  
                    
                <span>Tên Người Nhận</span> 
                <input type="text" name="" id="" value="<?= $if['name_user'] ?>"  disabled>
                <span>Số Điện Thoại</span>
                <input type="email" name="" id=""  value= " <?= $if['phone_user'] ?>" disabled>
                <span>Email</span>
                <input type="text" name="" id=""  value="<?= $if['email'] ?>" disabled>
                <span>Địa chỉ</span>
                <input type="text" name="" id=""   value="<?= $if['location_user'] ?>" disabled>
                <?php  }  else {?>
                    <span>Tên Người Nhận</span> 
                <input type="text" name="" id="" value=""  >
                <span>Số Điện Thoại</span>
                <input type="email" name="" id=""  value= " "  >
                <span>Email</span>
                <input type="text" name="" id=""  value="" >
                <span>Địa chỉ</span>
                <input type="text" name="" id=""   value="" >
                    <?php } ?>
              <input id="sm" type="submit" name="pay" value="Thanh Toán Ngay" onclick="myFunction()">
            </form>
        </div>
        <div class="thong-bao">
        <i class="fas fa-check"></i>
        <span>Bạn đã đặt hàng thành công!</span>
        </div>
        <script>
          
          function  myFunction(){
              setTimeout(function(){
                document.querySelector('.thong-bao').style.display = 'block';
              },500)
              setTimeout(function(){
                document.querySelector('.thong-bao').style.display = 'none';
              },5500)
             
            } 
</script>   
    </div>