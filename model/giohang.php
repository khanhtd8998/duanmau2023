<?php
function insert_giohang($name,$price,$img,$iduser,$idpro){
    $sql = "INSERT INTO `giohang`(`name`, `price`, `img`, `iduser`, `idpro`) 
    VALUES ('$name','$price','$img','$iduser','$idpro')";
    pdo_execute($sql);
}

function load_giohang($iduser) {
    $sql = "select * from giohang where iduser = '$iduser'";
    return pdo_query($sql);
}

function delete_giohang($id) {
    $sql = "DELETE FROM `giohang` WHERE id = '$id'";
    pdo_execute($sql);
}

?>