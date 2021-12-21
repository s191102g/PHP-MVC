
<?php 
require_once '../../model/user.php';

    $idUser = $_GET['idUser'];
    settype($idUser, "int");
    xoaUser($idUser);
    header("location:../index.php?page=user_ds");

?>