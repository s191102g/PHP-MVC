<?php
session_start();
require_once '../model/pdo.php';
require_once '../model/user.php';



if (isset($_SESSION['login_id'])==false){
 
    header("location:login.php");
    exit();
 }
 if ($_SESSION['login_group']!=1){
      header("location:login.php");
      exit();
  }
require_once 'view/header.php';
  if (isset($_GET['page']) == true) $page = $_GET['page'];
  switch ($page) {
    case "user_ds":
        $list = layDanhSachUser();
        require_once 'user/user_ds.php';
        break;
    case "user_them":
        if (isset($_POST['btn'])){
          $ten = $_POST['ten'];
          $pass = $_POST['pass'];
          $email = $_POST['email'];
          $idg = $_POST['idg'];
        
        
          $ten = trim(strip_tags($ten));
          settype($pass, "int");
          settype($idg, "int");
        
        
          
          $kq  = themUser($ten, $pass, $email ,$idg);
        
              header("location:index.php?page=user_ds");
        }
          require_once 'user/user_them.php';
          break;
    case "user_sua":
        $idUser = $_GET['idUser'];
        settype($idUser, "int");
        $list = layChiTietUser($idUser); 
  
       if (isset($_POST['btn'])){
        $ten = $_POST['ten'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];
        $idg = $_POST['idg'];
      
      
        $ten = trim(strip_tags($ten));
        settype($pass, "int");
        settype($idg, "int");
        $kq  = capnhatUser($idUser, $ten, $pass, $email, $idg);
    
            header("location:index.php?page=user_ds");
      }
     require_once 'user/user_sua.php';
                break;
      case "out":
        session_destroy();
        header("location:login.php");
        break;
                
}
  require_once 'view/footer.php';
?>
