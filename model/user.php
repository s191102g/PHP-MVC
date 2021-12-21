<?php
require_once 'pdo.php';
function layDanhSachUser(){    
    $sql ="SELECT idUser, username, pass, email,  idGroup FROM user ORDER BY idUser";
    $kq = pdo_query($sql);
    return $kq; 
}


function themUser($ten, $pass, $email, $idg){
    $sql ="INSERT INTO user ( username , pass , email ,idGroup) 
                VALUES ('{$ten}' , '{$pass}', '{$email}' , '{$idg}')";
     pdo_execute($sql); 
}



function layChiTietUser($idUser){    
    $sql="SELECT idUser, username, email, idGroup FROM user WHERE idUser=$idUser"; 
    $kq = pdo_query_one($sql);
    return $kq;
}
  function capnhatUser($idUser, $ten, $pass, $email, $idg){
    $sql ="UPDATE user SET username ='{$ten}', pass=$pass, email='{$email}',idGroup=$idg WHERE idUser=$idUser";
    pdo_execute($sql); 
 }
  
 function xoaUser($idUser){
    $sql ="DELETE FROM user  WHERE idUser=$idUser";
    pdo_execute($sql);      
}


function checkUser($u,$p){    
    $sql="SELECT * FROM user WHERE username ='".$u."' AND pass = '".$p."' "; 
    $kq = pdo_query_one($sql);
    return $kq;
}
function infor($idUser){    
    $sql="SELECT * FROM user WHERE idUser=$idUser"; 
    $kq = pdo_query_one($sql);
    return $kq;
}
?>