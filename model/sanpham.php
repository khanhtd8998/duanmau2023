<?php
function loadall_sanpham_home() {
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $result = pdo_query($sql);
    return $result;
}
function loadall_sanpham_top() {
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $result = pdo_query($sql);
    return $result;
}

function loadsp_chitiet($id) {
    $sql = "select * from sanpham where id='$id'";
    $result = pdo_query_one($sql);
    return $result;

}

function loadsp_cungloai($id,$iddm) {
    $sql = "select * from sanpham where iddm= '$iddm' and id <> '$id'";
    $result = pdo_query($sql);
    return $result;
}



function loadall_sanpham($iddm = 0,$keyw = "") {
    $sql = "select a.*, b.name as cat_name from sanpham a join danhmuc b on a.iddm = b.id";
    if($keyw != ""){
        $sql .= " and a.name like '%".$keyw."%'";
    }
    if($iddm > 0){
        $sql .= " and a.iddm = $iddm";
    }
    $sql .= " order by a.id desc"; 
    $result = pdo_query($sql);
    return $result;
}






/////ADMIN//////

function insert_sp($name,$price,$img,$mota,$luotxem,$iddm){
    $sql = "insert into sanpham(name,price,img,mota,luotxem,iddm) 
    values('$name','$price','$img','$mota','$luotxem','$iddm')";
    pdo_execute($sql);
}



function delete_sanpham($id) {
    $sql = "delete from sanpham where id = '$id'";
    pdo_execute($sql);
}


function update_sp_add($id,$name,$price,$img,$mota,$luotxem,$danhmuc) {
    $sql = "";
    if($img != "" ){
        $sql .= "UPDATE `sanpham` SET 
        `name`='$name',
        `price`='$price',
        `img`='$img',
        `mota`='$mota',
        `luotxem`='$luotxem',
        `iddm`='$danhmuc' WHERE `id`='$id'";
    }else{
        $sql .= "UPDATE `sanpham` SET 
        `name`='$name',
        `price`='$price',
        `mota`='$mota',
        `luotxem`='$luotxem',
        `iddm`='$danhmuc' WHERE `id`='$id'";
    }
    pdo_execute($sql);
}
?>