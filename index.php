<?php
session_start();

include 'model/danhmuc.php';
include 'model/sanpham.php';
include 'model/user.php';

// xu ly login
if (isset($_POST['btn-lg'])){
    //tiếp nhận user, pass từ form
    $u = $_POST['u'];
    $p = $_POST['p']; 
    //validate dữ liệu tiếp nhận
    $u = trim(strip_tags($u));
    $p = trim(strip_tags($p));
 
   $cu=  checkUser($u,$p);
    if (is_array($cu)) {
        $_SESSION['user'] = $cu;
        header("location:index.php?p=");
    } else {
        echo "<script>
        alert('Thông tin đăng nhập không chính xác');
    </script>";
        require 'view/login.php';
    } 
}
if(isset($_GET['out'])){
    unset( $_SESSION['user']);
    header("location:index.php");
}
// end xu ly login
include 'view/header.php';

if(!isset($_SESSION['mycart']))  $_SESSION['mycart'] = [];


if (isset($_POST['pay'])){ // xu ly thanh toan
    unset( $_SESSION['mycart']);
    include 'view/add.php';
} 
$spm = spmoi(); 
$spxn =  spxemnhieu();
if(isset($_GET['p'])== true) {
    $p = $_GET['p'];
    switch ($p) {
       
        case "page_lg":
           
            include 'view/login.php';
             break;
        case "ct":
            $idCT = $_GET['idCT'];
            settype($idCT, "int");
            $page_size = 8;
            $page_num = 1;
            if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
            if ($page_num <= 0) $page_num = 1;
            $listsp = laysptrongdm($idCT, $page_num, $page_size);
            $total_rows = demsptrongdm($idCT);
            $tendanhmuc = tendanhmuc($idCT);
            $dm = danhmuc();
            include 'view/category.php';
             break;
        case "search":
            if(isset($_POST['key'])& $_POST['key']!=''){
                $key = trim(strip_tags($_POST['key']));
                $key = $_POST['key'];
            }
            $page_size = 8;
            $page_num = 1;
            if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
            if ($page_num <= 0) $page_num = 1;
            $listsp = layKetQuaTim($key, $page_num , $page_size);
            $total_rows = demallsp($key);
            include 'view/search.php';
            break;
        case "allsp":
            
            $page_size = 8;
            $page_num = 1;
            if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
            if ($page_num <= 0) $page_num = 1;
            $listsp = layKetQuaTim($key, $page_num , $page_size);
            $total_rows = demallsp($key);
            include 'view/allPRD.php';
            break;
        case "loai":
            $idT = $_GET['idT'];
            settype($idT, "int");
            $page_size = 8;
            $page_num = 1;
            if (isset($_GET['page_num'])) $page_num = $_GET['page_num'] + 0;
            if ($page_num <= 0) $page_num = 1;
            $listsp = laysptrongloai($idT, $page_num, $page_size);
            $total_rows = demsp($idT);
            $tenloai = tenloai($idT);
            $dm = danhmuc();
            include 'view/loai.php';
             break;
         case "sp":
            $id = 0;
            if(isset($_GET['id']))  $id =  $_GET['id'];
            settype($id, "id");
            $ct = chitiet($id);
            tangluotxem($id);
            include 'view/prd.php';
             break;
        case "cart":
            include 'view/addprd.php';
            break;
        case "add":
            if (isset($_POST['add'])&&($_POST['add'])) {
                $id =  $_POST['id'];
                $name =  $_POST['name'];
                $img =  $_POST['img'];
                $price=  $_POST['price'];
                $sl = $_POST['quantity'];
                $tt = $sl * $price;
                $prdadd = [ $id, $name,$img, $price, $sl,$tt];            
                    array_push( $_SESSION['mycart'], $prdadd);
                    header("location:index.php?p=sp&id=$id");
            }
            
            include 'view/addprd.php';  
            break;
        case "del":
            if(isset($_GET['idcart'])== true){
                array_splice( $_SESSION['mycart'],$_GET['idcart'],1); 
            }else{
                $_SESSION['mycart'] = [];
            }
            include 'view/addprd.php';
            break;
        case "pay":
            unset( $_SESSION['mycart']);
            include 'view/addprd.php';
                break;
         default:
              
             include 'view/home.php';
             break;
    }        
    }else{
        include 'view/home.php';
    }
include 'view/footer.php';
include 'view/total-cart.php'
?>