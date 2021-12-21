<?php
session_start();
if (isset($_POST['btn'])){
    //tiếp nhận user, pass từ form
    $u = $_POST['u'];
    $p = $_POST['p']; 
    //validate dữ liệu tiếp nhận
    $u = trim(strip_tags($u));
    $p = trim(strip_tags($p));
    //truy xuất db
    
    // $host = "localhost"; //địa chỉ mysql server sẽ kết nối đến
    // $dbname="shop"; //tên database sẽ kết nối đến
    // $username = "root"; //username để kết nối đến database 
    // $password = ""; // mật khẩu để kết nối đến database
    // $conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password); 
    // $conn->setAttribute(PDO:: ATTR_ERRMODE,PDO:: ERRMODE_EXCEPTION );
    require '../model/pdo.php';
        
    $sql="SELECT * FROM user WHERE username='{$u}'";
    $kq = pdo_query_value($sql);    
    if ($kq == 0) {
        $_SESSION['thongbao1'] = "Username không tồn tại";
        header("location: login.php");
        exit();
        
    }   
    $sql="SELECT  * FROM user WHERE  pass ='{$p}'";
    $kq = pdo_query_value($sql); 
    if ($kq == 0) {// sai pass	
        $_SESSION['thongbao2'] = "Mật khẩu không đúng";
        header("location: login.php");
        exit();
    }
    //thành công  
    $sql="SELECT idUser,username,idGroup, pass FROM user WHERE username='{$u}' AND pass ='{$p}'"; 
    $kq = pdo_query_one($sql);     
    $row_user = $kq;
    $_SESSION['login_id'] = $row_user['idUser'];//tạo biến ghi nhận user đã login
    $_SESSION['login_user'] = $row_user['username'];//tạo biến ghi nhận user đã login
    $_SESSION['login_group'] = $row_user['idGroup'];//user trong nhóm nào
    header("location:index.php");//chuyển đến trang chủ admin
}
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" rel= "stylesheet" >
<style>
   body{
       padding-top: 50px;
       
   }
</style>
<body>
<form action="" method="post"  class="border border-primary col-5 m-auto p-2" >
<div class="form-group">
   <label>Username</label> <input name="u" type="text" class="form-control"/>
</div>
<div class="form-group">
   <label>Mật khẩu</label> <input name="p" type="password" class="form-control"/>
</div> 
<div class="form-group">
    <input  name="btn" type="submit" value="Đăng nhập" class="btn btn-primary"/> 
</div>
<div class="form-group">
    <span>
       <?php
      
       if (isset($_SESSION['thongbao1'])) {
           echo $_SESSION['thongbao1'];
           session_destroy();
       } 
         if (isset($_SESSION['thongbao2'])) {
              echo $_SESSION['thongbao2'];
              session_destroy();
         }
       ?>
    </span>
</div>
</form>
</body>

