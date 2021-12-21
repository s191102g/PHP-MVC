<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="library/wow/animate.css"/>
    <link rel="stylesheet" href="library/slick/slick-theme.css">
    <link rel="stylesheet" href="library/slick/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/type.css">
    <link rel="stylesheet" href="css/prd.css">
    <link rel="stylesheet" href="css/cart.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body class="preloading">
    <!-- <div class="loading">
        <img src="img/load.gif" alt="">
    </div> -->
    <div class="ctn">
        
        <header>
            <div class="top">
                <h3>
                    MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC cho đơn hàng từ 299.000đ
                </h3>
            </div>
            <div class="tool">
                <div class="tool-left">
                    <div class="fb">
                        <a href=""> <img src="img/logoface.png" alt=""></a>
                    </div>
                    <div class="insta">
                        <a href=""> <img src="img/logointar.png" alt=""></a>
                    </div>
                </div>
                <div class="tool-between">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="tool-right">
                      
                   <div class="login">
                       
                       <img src="img/login.png" alt="">
                       <?php
                       if (isset($_SESSION['user'])) { ?>
                              <div class="method-lg">
                                   <ul>
                                     <li><a href="index.php?out">Đăng Xuất</a></li>
                               
                                </ul>
                            </div>
                        <?php } else { ?>
                            <div class="method-lg">
                           <ul>
                               <li><a href="index.php?p=page_lg">Đăng Nhập</a></li>
                               <li><a href="">Đăng Ký</a></li>
                           </ul>

                            </div>  
                       <?php } ?>
                       
                                         
                   
                 </div>

                    <div class="find">
                        <a> <img src="img/seach.png" alt=""></a>
                        <form action="index.php?p=search" method="post">
                            <input type="text" name="key" id="" placeholder="Nhập từ khóa" >
                            <input type="submit" name="search" id="search" value="Search">
                        </form>
                       
                    </div>
                    <div class="cart">
                   
                        <a href="index.php?p=cart"> <img src="img/cart.png" alt=""></a>
                        
                    </div>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">TRANG CHỦ</a>
                      
                    </li>
                    <?php
                      $dm = danhmuc();
                      ?>
                     <?php foreach($dm as $item){?>
                     
                     
                    <li><a href="index.php?p=ct&idCT=<?= $item['idCT'] ?>"><?= $item['nameCT'] ?></a>
                        <ul class="xmenu">
                        <?php
                      $loai = loai($item['idCT']);
                      ?>
                      <?php  foreach($loai as $list){ ?>
                            <li><a href="index.php?p=loai&idT=<?= $list['idT'] ?>"><?= $list['nameT']  ?></a></li>
                            <hr>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php }  ?>
                    <li><a href="">THÔNG TIN</a>

                    </li>
                </ul>

            </nav>
          
        </header>
        <script>
            document.getElementsByClassName('find')[0].addEventListener('click',()=>{
                document.getElementsByTagName('input')[0].style.display='block';
                document.getElementsByTagName('input')[1].style.display='block';
            })
        </script>