

<div class="data-prd">
           <div class="link">
                <em>Trang chủ / Danh mục / <span>Sản Phẩm Tìm Kiếm</span></em>
           </div>
           <div class="wr">
            <div class="dp-left">
                      
                <ul>
                <li><a href="index.php">TRANG CHỦ</a></li>
                <?php foreach($dm as $item){?>
                     
                     
                     <li><a href="index.php?p=ct&idCT=<?= $item['idCT'] ?>"><?= $item['nameCT'] ?><div class="note"></a></li>
                     <?php }  ?>
                     <li><a href="index.php?p=allsp">TOÀN BỘ SẢN PHẨM</a></li>
                </ul>
            </div> 
            
            <div class="dp-right">
             <div class="name-type ">    
                         <span>TOÀN BỘ SẢN PHẨM</span>
                    
                </div>
                <div class="list-prd ">
                    <?php foreach ($listsp as $key ) { ?>
                        
                      
                     <div class="this-prd">
                         <div class="this-img">
                            <a href="index.php?p=sp&id=<?=$key['id']?>"> <img src="<?=$key['img']?>" alt=""></a>   
                         </div>
                         <div class="this-name">
                              <a href="index.php?p=sp&id=<?=$key['id']?>"><span><?=$key['name_prd']?></span></a>   
                         </div>
                         <div class="this-price">
                                  <span><?=$key['price']?></span> vnđ
                         </div>
                     </div>
                     
                     <?php }  ?>
                 </div>
                 <div class="page">
            <?php $base_url = "index.php?p=allsp";
        echo taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size);
        ?>
            </div>
             </div>
                
            </div>
            
           </div>
         
       </div>