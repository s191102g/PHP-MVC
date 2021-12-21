

<div class="view-prd">
    
            <div class="src">
                <em>Trang chủ / <span><?= $ct['name_prd']?></span></em>
            </div>
            <form action="index.php?p=add" method="POST">
            <div class="box">
                <div class="box-left">
                    <img src="<?= $ct['img']?>" alt="">
                </div>
                <div class="box-between">
                    <div class="name-prd">
                        <span><?= $ct['name_prd']?></span>
                    </div>
                    <div class="price-prd">
                        <span><?= $ct['price']?></span> vnđ
                    </div>
                    <div class="size">
                        <div class="c-size">
                            <input type="radio" name="size" id="" value="M">
                            <input type="radio" name="size" id="" value="L">
                            <input type="radio" name="size" id="" value="XL">
                        </div>

                        <div class="name-size">
                            <div class="size-item">M</div>
                            <div class="size-item">L</div>
                            <div class="size-item">XL</div>
                        </div>
                    </div>
                    <div class="num">
                        <div class="buttons_added">
                            <input class="minus is-form" type="button" value="-">
                            <input aria-label="quantity" class="input-qty" min="1" max="100" name="quantity" type="number"
                                value="1">
                            <input class="plus is-form" type="button" value="+">
                        </div>
                    </div>
                    <div class="add-prd">
                        
                   
                    <input type="hidden" name="id" value="<?= $ct['id']?>">
                        <input type="hidden" name="img" value="<?= $ct['img']?>">
                        <input type="hidden" name="name" value="<?= $ct['name_prd']?>">
                        <input type="hidden" name="price" value="<?= $ct['price']?>">
                          <input type="submit" name="add" value="Thêm">
                   
                    </div>
                    <a href="">Hướng dẫn chọn size</a>
                </div>
                 </form>
                <div class="box-right">
                    <div class="br-top">
                        <h3>THỜI GIAN GIAO HÀNG</h3> <br>
                        <span>Từ 2-5 ngày làm việc</span>
                    </div>
                    <div class="br-list">
                        <h4> MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</h4>
                        <span>Cho đơn hàng từ 299,000 vnđ</span>
                    </div>
                    <div class="br-list">
                        <h4> CHÍNH SÁCH ĐỔI TRẢ</h4>
                        <span>Dễ dàng, nhanh chóng</span>
                    </div>
                    <div class="br-list">
                        <h4> 
                            THANH TOÁN TIỆN LỢI</h4>
                        <span>Nhiều hình thức thanh toán</span>
                    </div>
                    <div class="br-list">
                        <h4>
                            HOTLINE TƯ VẤN</h4>
                        <span>0966.769.639</span>
                    </div>
                    <div class="br-list">
                        <h4>
                            ĐỊA CHỈ</h4>
                        <span>Số 5, Đường Số 17, P.Linh Chiểu, Q.Thủ Đức,TP Hồ Chí Minh</span>
                    </div>
                </div>
            </div>

        </div>