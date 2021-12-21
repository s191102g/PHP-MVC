<footer>
            <div class="f-top">
                  <div class="ft-left">
                    <i class="fas fa-envelope-open-text icon-mail"></i>
                    <span>Đăng kí nhận tin</span>
                    <input type="email" name="" id="">
                    <div class="ft-left-btn">
                        <button class="slide_from_left">ĐĂNG KÝ</button>
                    </div>
                  </div>
                  <div class="ft-right">
                    <i class="fas fa-phone-alt icon-phone"></i>
                     <span>Hỗ trợ / Mua hàng:</span>
                     <span style="color: tomato;"> 0966.769.639</span>
                  </div>
            </div>
            <div class="f-main">
                <div class="f-main1">
                    <h3>Giới thiệu</h3> <br>
                    <span>
                        VN CLO Vừa Là Shop Cũng Là Xưởng Chuyên Bỏ Sỉ Và Bán Lẻ Tất Cả Các Mặt Hàng Thời Trang UNISEX. Nhận Đặt May Cho Các Bạn Bán ONLINE, Áo Lớp, Áo Nhóm, Áo Công Ty Gía Tận Kho Xưởng. Bỏ Buôn Khách Hàng Lớn Bán Với Lợi Nhuận Dù 1K Vẫn Hợp Tác.
                    </span>

                </div>
                <div class="f-main2">
                    <h3>Chính Sách</h3> <br>
                
                    <ul>
                        <li>Chính Sách Bảo Mật</li>
                        <li>Chính Sách Hoàn Tiền</li>
                        <li> Thanh Toán Và Vận Chuyển</li>
                        <li>Chính Sách Bảo Hành-Đổi-Trả</li>
                    </ul>
                    
                </div>
                <div class="f-main3">
                    <h3>Liên hệ</h3> <br>
                    <ul>
                        <li>Địa Chỉ: Số 5, Đường Số 17, P.Linh Chiểu, Q.Thủ Đức,TP Hồ Chí Minh, VN</li>
                        <li>Hỗ trợ / Mua hàng: 0966.769.639</li>
                        <li>Mail: vnclo.shop@gmail.com</li>
                        
                    </ul>
                </div>
                <div class="f-main4">
                 <h3>Cộng đồng</h3> <br>
                 <div class="social">
                     <div class="social-item">
                         <img src="img/ft/facebook_ok.png" alt="">
                     </div>
                     <div class="social-itemA">
                         <img src="img/ft/insta.png" alt="">
                     </div>
                     <div class="social-itemA">
                         <img src="img/ft/shoppe_ok.png" alt="">
                     </div>
                     <div class="social-itemA">
                         <img src="img/ft/tiktok_ok.png" alt="">
                     </div>
                 </div>
                 <div class="vc">
                     <h3>Đơn vị vận chuyển</h3>
                     <img src="img/ft/listSocial_bottom_img.png" alt="">
                 </div>
                </div>
            </div>
            <div class="f-bottom"></div>
        </footer>
    </div>

</body>
<script src="library/slick/jquery-3.6.0.min.js"></script>
<script src="library/slick/slick.js"></script>
<script src="library/wow/wow.min.js"></script>
<script src="js/cart.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.slide').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
        });
    });
  new WOW().init();
  $('input.input-qty').each(function() {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function() {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
});


</script>

</html>