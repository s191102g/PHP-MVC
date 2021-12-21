<main>
            <section class="m-top ">
                <div class="banner">
                    <img class="" src="img/banner.jpg" alt="">
                </div>
                <div class="type_prd">
                    <div class="slide">
                        <div class="type">
                            <img src="img/ao/ak1.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/ao/as1.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/ao/at1.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/quan/qj1.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/quan/qk2.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/quan/qs3.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/pk/pk1.jpg" alt="">
                        </div>
                        <div class="type">
                            <img src="img/ao/ak3.jpg" alt="">
                        </div>
                    </div>
                    
                </div>
            </section>
            <section class="m-main">
                <div class="new-prd">
                    <div class="nd-top wow bounceInUp">
                          <span class="">Sản Phẩm Mới</span>
                          <div class="hr"></div>
                          <a href=""><span>Xem Thêm</span></a>
                    </div>
                    <div class="nd-between wow bounceInUp">
                       
                        <?php
                        foreach ($spm as $item) { ?>
                         
                    
                        <div class="prd">
                            <div class="prd-img">
                             <a href="index.php?p=sp&id=<?=$item['id']?>">  <img src="<?= $item['img']?>" alt=""></a> 
                            </div>
                            <div class="prd-name">
                              <a href="index.php?p=sp&id=<?=$item['id']?>"> <?= $item['name_prd']?></a> 
                            </div>
                            <div class="prd-price">
                                <span><?= $item['price']?></span> vnđ
                            </div>
                        </div>
                        <?php   } ?>
                        
                    </div>
                    
                    <div class="nd-bottom wow bounceInU">
                        <div class="other-prd">
                            <img src="img/ao/ak4.jpg" alt="">
                            <div class="button-hover">
                                <button class="slide_from_left">Xem Ngay</button>
                            </div>
                        </div>
                        <div class="other-prd">
                            <img src="img/quan/qs3.jpg" alt="">
                            <div class="button-hover2">
                                <button class="slide_from_left">Xem Ngay</button>
                            </div>
                        </div>
                        <div class="other-prd">
                            <img src="img/ao/at8.jpg" alt="">
                            <div class="button-hover3">
                                <button class="slide_from_left">Xem Ngay</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mostView-prd">
                    
                    <div class="vd-top">
                        <div class="vd-top wow bounceInUp">
                            <span class="">Sản Phẩm Hot</span>
                            <div class="hr"></div>
                            <a href=""><span>Xem Thêm</span></a>
                      </div>
                    </div>
                    <div class="vd-main wow bounceInUp">
                        <?php foreach ($spxn as $item) { ?>                      
                        <div class="prd2">
                            <div class="prd-img2">
                              <a href="index.php?p=sp&id=<?=$item['id']?>"><img src="<?= $item['img']?>" alt=""></a>  
                            </div>
                            <div class="prd2-name">
                               <a href="index.php?p=sp&id=<?=$item['id']?>"><?= $item['name_prd']?></a> 
                            </div>
                            <div class="prd2-price">
                                <span><?= $item['price']?></span> vnđ
                            </div>
                        </div>
                  <?php  } ?>
                    </div>
                </div>
            </section>
        </main>