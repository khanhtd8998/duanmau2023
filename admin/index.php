<?php
include"../model/pdo.php";
include"../model/danhmuc.php";
include"../model/sanpham.php";
include"../model/nguoidung.php";
include"../model/binhluan.php";
include"../model/thongke.php";
include"../global.php";
include"header.php";
if(isset($_GET['act'])&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act) {
        case "adddm": {
            if(isset($_POST['submit']) && ($_POST['submit'])){
                if($_POST['tendanhmuc'] != ""){
                    $tendanhmuc = $_POST['tendanhmuc'];
                    insert_danhmuc($tendanhmuc);
                    $thongbao = "Thêm danh mục thành công";
                }
                else{
                    $err = "Không được để trống tên danh mục";
                }

            }
            include"danhmuc/add.php";
            break;
        }
        case "list_dm":{
            if(isset($_POST['submit']) && $_POST['submit']){
                $keyw = $_POST['keyw'];
            }else{
                $keyw = "";
            }
            $list_dm = loadall_danhmuc($keyw);
            include"danhmuc/list_dm.php";
            break;
        }
        case "xoadm":{
            if(isset($_GET['id']) && $_GET['id'] != "" ){
                delete_danhmuc($_GET['id']);
                $keyw = " ";
                $list_dm = loadall_danhmuc($keyw);
            }
            include"danhmuc/list_dm.php";
            break;
        }
        case "suadm": {
            if(isset($_GET['id']) && $_GET['id'] != ""){
                $tendanhmuc = load_update_danhmuc($_GET['id']);
            }
            include"danhmuc/update.php";
            break;
        }
        case "updatedm":{
            if(isset($_POST['submit']) && ($_POST['submit'])){
                if($_POST['tendanhmuc'] != ""){
                    update_danhmuc_add($_POST['id'],$_POST['tendanhmuc']);
                    $thongbao = "Thêm danh mục thành công";
                }
                else{
                    $err = "Không được để trống tên danh mục";
                }
                $keyw = "";
                $list_dm = loadall_danhmuc($keyw);
            }
            include"danhmuc/list_dm.php";
            break;
        }

        case "addsp":{
            $keyw = "";
            $tendanhmuc = loadall_danhmuc($keyw);
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $danhmuc = $_POST['iddm'];
                $img = null;
                if($name != "" && $price != "" && $danhmuc != 0){
                    if($_FILES['img']['name'] != ""){
                    
                        $img = time()."_".$_FILES['img']['name'];
                        $link = $img_path.$img;
                        move_uploaded_file($_FILES['img']['tmp_name'], "../$link");
                    }
                    insert_sp($name,$price,$img,$mota,$luotxem,$danhmuc);
                    $thongbao = "Thêm danh mục thành công";  
                }else{
                    $err = "Không được để trống tên danh mục";
                }
            }
            
            include"sanpham/add.php";
            break;
        }
        case "list_sp":{
            if(isset($_POST['submit']) && $_POST['submit']){
                $keyw = $_POST['keyw'];
                $iddm = $_POST['iddm'];
            }else{
                $keyw = "";
                $iddm = 0;
            }
            $list_dm = loadall_danhmuc($keyw);
            $list_sp = loadall_sanpham($iddm,$keyw);
            include"sanpham/list_sp.php";
            break;
        }

        case "xoasp": {
            $keyw = "";
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $sp = loadsp_chitiet($_GET['id']);
                if($sp['img'] != null) {
                    $link = $img_path.$sp['img'];
                    unlink("../$link");
                    
                }
                delete_sanpham($_GET['id']);
                
            }
            $list_sp = loadall_sanpham($iddm = 0,$keyw = "");
            $list_dm = loadall_danhmuc($keyw);
            include"sanpham/list_sp.php";
            break;
        }
        case "suasp": {
            $keyw = "";
            if(isset($_GET['id']) && ($_GET['id'] > 0)){
                $tensp = loadsp_chitiet($_GET['id']);
                $tendm = loadall_danhmuc($keyw);
            }   
            include"sanpham/update.php";
            break;

        }
        case "updatesp": {
            $keyw = "";
            $tensp = loadsp_chitiet($_GET['id']);
            $tendm = loadall_danhmuc($keyw);
            if(isset($_POST['submit']) && ($_POST['submit'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $price = $_POST['price'];
                $mota = $_POST['mota'];
                $luotxem = $_POST['luotxem'];
                $danhmuc = $_POST['iddm'];
                $img = null;
                if($name != "" && $price != "" && $mota != ""){
                    if($_FILES['img']['name'] != ""){
                        $img = $_FILES['img']['name'];
                        $link = $img_path.$img;
                        move_uploaded_file($_FILES['img']['tmp_name'], "../$link");
                    }
                    update_sp_add($id,$name,$price,$img,$mota,$luotxem,$danhmuc);
                    header("location:?act=list_sp");
                    $thongbao = "Thêm danh mục thành công";  
                }else{
                    $err = "Không được để trống tên danh mục";
                }
                $list_dm = loadall_danhmuc($keyw);
                $list_sp = loadall_sanpham($iddm = 0,$keyw = "");
                include"sanpham/update.php";
            }
            break;


        }
        
        case "adduser": {
            if(isset($_POST['submit']) && $_POST['submit']){
                $username = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                if($username != "" && $pass!= ""){
                    insert_user($username,$pass,$email,$address,$tel);
                    $thongbao = "Thêm tài khoản thành công";
                }else{
                    $err = "Không được để trống tên danh mục";
                }
    

            }
            include"taikhoan/add.php";
            break;
        }
        case "list_user": {
            if(isset($_POST['submit']) && $_POST['submit']){
                $keyw = $_POST['keyw'];
            }else{
                $keyw = "";
            }
            $list_user = loadall_user($keyw);
            include "taikhoan/list_user.php";
            break;
        }
        case "xoauser":{
            if(isset($_GET['id']) && $_GET['id'] != "" ){
                delete_user($_GET['id']);
                $list_user = loadall_user();
            }
            include"taikhoan/list_user.php";
            break;
        }
        case "suauser": {
            if(isset($_GET['id']) && $_GET['id'] != ""){
                $user = loadone_user($_GET['id']);
            }   
            include"taikhoan/update.php";
            break;

        }
        case "updateuser": {
            if(isset($_POST['submit']) && $_POST['submit']){
                $id = $_POST['id'];
                $username = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $role = $_POST['role'];
                if($username != "" && $pass!= ""){
                    update_user($id,$username,$pass,$email,$address,$tel,$role);
                    $thongbao = "Thêm tài khoản thành công";
                }else{
                    $err = "Không được để trống tên danh mục";
                }
            }
            $list_user = loadall_user();
            include"taikhoan/list_user.php";
            break;
        }

        case "addcmt": {
            $list_user = loadall_user();
            $list_sp = loadall_sanpham();
            if(isset($_POST['submit']) && $_POST['submit']){
                $iduser = $_POST['iduser'];
                $idpro = $_POST['idpro'];
                $noidung = $_POST['noidung'];
                $date = $_POST['date'];
                if($iduser != "" && $idpro != "" && $noidung != "" && $date != ""){
                    insert_cmt($noidung,$iduser,$idpro,$date);
                    $thongbao = "Thêm tài khoản thành công";
                }else{
                    $err = "Không được để trống tên danh mục";
                }
    

            }
            include "binhluan/add.php";
            break;
        }
        case "list_cmt":{
            if(isset($_POST['submit']) && $_POST['submit']){
                $keyw = $_POST['keyw'];
            }else{
                $keyw = "";
            }
            $list_sp = loadall_sanpham();
            $list_cmt = loadall_cmt($keyw);
            include"binhluan/list_cmt.php";
            break;
        }
        
        case "xoacmt": {
            $keyw = "";
            if(isset($_GET['id']) && $_GET['id'] != "" ){
                delete_cmt($_GET['id']);
                $list_cmt = loadall_cmt($keyw);
                $list_sp = loadall_sanpham();
            }
            include"binhluan/list_cmt.php";
            break;
        }

        case "suacmt": {
            $list_user = loadall_user();
            $list_sp = loadall_sanpham();
            if(isset($_GET['id']) && $_GET['id'] > 0){
                $loadone_cmt = loadone_cmt($_GET['id']);
            }
            include"binhluan/update.php";
            break;
        }

        case "updatecmt": {
            $keyw = "";
            if(isset($_POST['submit']) && $_POST['submit']){
                $idcmt = $_POST['id'];
                $iduser = $_POST['iduser'];
                $idpro = $_POST['idpro'];
                $noidung = $_POST['noidung'];
                $date = $_POST['date'];
                if($iduser != "" && $idpro != "" && $noidung != "" && $date != ""){
                    update_cmt($idcmt,$noidung,$iduser,$idpro,$date);
                }else{
                    $err = "Không được để trống tên danh mục";
                }
            }
            $list_sp = loadall_sanpham();
            $list_cmt = loadall_cmt($keyw);
            include"binhluan/list_cmt.php";
            break;
        }
        case "thongke": {
            $list_thongke = load_thongke_sanpham_danhmuc();
            include"thongke/list.php";
            break;
        }
        case "bieudo": {
            $list_thongke = load_thongke_sanpham_danhmuc();
            include"thongke/bieudo.php";
            break;

        } 
        
        
        
        default:{
            include"home.php";
            break;
        }
    }
}else{
    include"home.php";
}
include"footer.php";
?>