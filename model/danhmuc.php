<?php
require_once 'pdo.php';
function danhmuc(){
    $sql = "SELECT idCT, nameCT from category  order by idCT asc";
    $kq = pdo_query($sql);
    return $kq;
}

function loai($idCT){
    $sql = "SELECT idCT, idT, nameT from type_prd where  idCT=$idCT order by idT asc";
  $kq = pdo_query($sql);
    return $kq;
}


function tenloai($idT){
    $sql = "SELECT nameT from type_prd where idT = $idT";
    $kq = pdo_query_value($sql);
    return $kq;
}
function tendanhmuc($idCT){
    $sql = "SELECT nameCT from category where idCT = $idCT";
    $kq = pdo_query_value($sql);
    return $kq;
}
?>