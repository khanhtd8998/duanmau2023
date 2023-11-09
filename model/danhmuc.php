<?php
function loadall_danhmuc($keyw = "") {
    $sql = "select * from danhmuc where 1 ";
    if($keyw != ""){
        $sql .= " and name like '%".$keyw."%'";
    }

    $sql .= " order by id desc";
    $result = pdo_query($sql);
    return $result;
}

function insert_danhmuc($name) {
    $sql = "insert into danhmuc(name) values('$name')";
    pdo_execute($sql);

}

function delete_danhmuc($id) {
    $sql = "delete from danhmuc where id = $id";
    pdo_execute($sql);
}
function load_update_danhmuc($id) {
    $sql = "select * from danhmuc where id = $id";
    $result = pdo_query_one($sql);
    return $result;
}

function update_danhmuc_add($id,$tendanhmuc) {
    $sql = "update danhmuc set name = '$tendanhmuc' where id = '$id'";
    pdo_execute($sql);
}
?>