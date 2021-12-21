<?php
require_once 'pdo.php';

function spxemnhieu() {
    $sql = "SELECT id, name_prd, price, img, view  from product  order by view desc limit 0,10";
    $kq = pdo_query($sql);
    return $kq;
}

function spmoi() {
    $sql = "SELECT id, name_prd, price, img, date_prd  from product  order by date_prd desc limit 0,5";
    $kq = pdo_query($sql);
    return $kq;
}

function laysptrongloai($id = 0, $page_num = 1, $page_size = 5){
    $starrow = ($page_num - 1) * $page_size;
    $sql = "SELECT id, img, name_prd, price FROM product WHERE idT = $id  LIMIT $starrow, $page_size";
    $kq = pdo_query($sql);
    return $kq;
}
function laysptrongdm($id = 0, $page_num = 1, $page_size = 8){
    $starrow = ($page_num - 1) * $page_size;
    $sql = "SELECT id, img, name_prd, price FROM product WHERE idCT = $id  LIMIT $starrow, $page_size";
    $kq = pdo_query($sql);
    return $kq;
}
function chitiet($id){
    $sql = "SELECT  * from product where id = $id";
    $kq = pdo_query_one($sql);
    return $kq;
}
function tangluotxem($id=0){
        $sql = "UPDATE product SET view = view + 1 WHERE id = $id ";
        pdo_execute($sql);            
}


function demsp($id = 0){
    $sql="SELECT count(*) FROM product WHERE idT=$id";
    $kq = pdo_query_value($sql);
    return $kq;
}
function demsptrongdm($id = 0){
    $sql="SELECT count(*) FROM product WHERE idCT=$id";
    $kq = pdo_query_value($sql);
    return $kq;
}

// function layallsp( $page_num = 1, $page_size = 8){
//     $starrow = ($page_num - 1) * $page_size;
//     $sql = "SELECT * FROM product LIMIT $starrow, $page_size";
//     $kq = pdo_query($sql);
//     return $kq;
// }
function demallsp($tukhoa = "aabbcc"){
    $sql="SELECT count(*) FROM product WHERE name_prd like '%$tukhoa%'";
    $kq = pdo_query_value($sql);
    return $kq;
}

function layKetQuaTim($tukhoa, $page_num = 1, $page_size = 8){
    $starrow = ($page_num - 1) * $page_size;
    $sql="SELECT * FROM product WHERE name_prd like '%$tukhoa%' LIMIT $starrow, $page_size";
    return pdo_query($sql);
}
function taoLinkPhanTrang($base_url, $total_rows, $page_num, $page_size = 8, $offset = 3)
{
    if ($page_num <= 0) return "";
    $total_pages = ceil($total_rows / $page_size); //tính tổng số trang
    if ($total_pages <= 1) return "";
    $links = "<ul class='pagination'>";
    if ($page_num > 1) { //chỉ hiện 2 link đầu, trước khi user từ trang 2 trở đi
        $first = "<li><a href='{$base_url}'> << </a></li>";
        $page_prev = $page_num - 1;
        $prev = "<li><a href='{$base_url}&page_num={$page_prev}'> < </a></li>";
        $links .= $first . $prev;
    }
    
    $from = $page_num - $offset;
    $to = $page_num + $offset;
    if($from < 1 ) $from =1;
    if($to > $total_pages)$to = $total_pages;
    for($i = $from; $i < $to; $i++){
       if($i==$page_num) $str = "<li><span>{$i}</span></li>";
       else  $str = "<li><a href='{$base_url}&page_num={$i}'> {$i}</a></li>";
       $links .= $str;
    }
    //aaa
    if ($page_num < $total_pages) { //chỉ hiện link cuối, kế khi user kô ở trang cuối
        $page_next = $page_num + 1;
        $next = "<li><a href='{$base_url}&page_num={$page_next}'> > </a></li>";
        $last = "<li><a href='{$base_url}&page_num={$total_pages}'> >> </a></li>";
        $links .= $next . $last;
    }
    $links .= "</ul>";
    return $links;
}
?>