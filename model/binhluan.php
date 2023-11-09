<?php
function insert_cmt_user($noidung,$iduser,$idpro) {
    $date = date('Y-m-d');
    $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
    VALUES ('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}
function loadone_cmt_sp($id) {
    $sql = "SELECT a.*, b.user from binhluan a JOIN taikhoan b ON a.iduser = b.id where a.idpro = '$id'";
    $result = pdo_query($sql);
    return $result;
}

function delete_cmt_user($id) {
    $sql = "delete from binhluan where id = '$id'";
    pdo_execute($sql);
}


//ADMIN//
function insert_cmt($noidung,$iduser,$idpro,$date) {

    $sql = "INSERT INTO `binhluan`(`noidung`, `iduser`, `idpro`, `ngaybinhluan`) 
    VALUES ('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}

function loadall_cmt($keyw) {
    $sql = "SELECT a.*, b.user from binhluan a JOIN taikhoan b ON a.iduser = b.id";
    if($keyw != " "){
        $sql .= " and b.user like '%".$keyw."%'";
    }
    $result = pdo_query($sql);
    return $result;
}
function loadone_cmt($id) {
    $sql = "SELECT a.*, b.user from binhluan a JOIN taikhoan b ON a.iduser = b.id where a.id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function update_cmt($idcmt,$noidung,$iduser,$idpro,$date){
    $sql = "UPDATE `binhluan` SET 
    `noidung`='$noidung',
    `iduser`='$iduser',
    `idpro`='$idpro',
    `ngaybinhluan`='$date' WHERE  `id`='$idcmt'";
    pdo_execute($sql);
}
function delete_cmt($id) {
    $sql = "delete from binhluan where id = '$id'";
    pdo_execute($sql);
}

?>