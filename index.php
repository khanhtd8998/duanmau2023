<?php
session_start();

include "global.php";
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/nguoidung.php";
include "model/binhluan.php";
include "model/giohang.php";
include "view/header.php";


$listsp_home = loadall_sanpham_home();
$listsp_top = loadall_sanpham_top();
$list_danhmuc = loadall_danhmuc();


if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case "sanphamct": {
                if (isset($_GET['idsp']) && $_GET['idsp'] > 0) {
                    $sp = loadsp_chitiet($_GET['idsp']);
                    $sp_cungloai = loadsp_cungloai($_GET['idsp'], $sp['iddm']);


                    if (isset($_POST['submit'])) {
                        if (isset($_SESSION['user'])) {
                            $idpro = $_GET['idsp'];
                            $noidung = $_POST['noidung'];
                            $iduser = $_SESSION['user']['id'];
                            insert_cmt_user($noidung, $iduser, $idpro);
                        } else {
                            $err = "Bạn cần đăng nhập";
                        }
                    }
                    if (isset($_POST['submit_xoa_cmt'])) {
                        $id_cmt = $_GET['idcmt'];
                        delete_cmt_user($id_cmt);
                        header("location:" . $_SERVER['REQUEST_URI']);
                    }
                    $loadone_cmt_sp = loadone_cmt_sp($_GET['idsp']);
                    include "view/ctsp.php";
                }
                break;
            }
        case "sanpham": {
                if (isset($_GET['iddm']) && $_GET['iddm'] > 0) {
                    $iddm = $_GET['iddm'];
                } else {
                    $iddm = 0;
                }

                if (isset($_POST['submit']) && isset($_POST['keyword']) && $_POST['keyword'] != "") {
                    $keyw =  $_POST['keyword'];
                } else {
                    $keyw = "";
                }
                $dssp = loadall_sanpham($iddm, $keyw);
                include "view/sanpham.php";
                break;
            }

        case "dangky": {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $username = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    if ($username != "" && $pass != "" && $email != "") {
                        insert_taikhoan($username, $pass, $email);
                        $thongbao = "Đăng ký tài khoản thành công";
                    } else {
                        $err = "Không được để trống thông tin";
                    }
                }
                include "view/dangky.php";
                break;
            }
        case "dangnhap": {
                if (isset($_POST['submit']) && ($_POST['submit'])) {
                    $username = $_POST['user'];
                    $pass = $_POST['pass'];
                    $taikhoan = dangnhap($username, $pass);
                    if (is_array($taikhoan)) {
                        $_SESSION['user'] = $taikhoan;
                        if ($taikhoan['role'] == 1) {
                            header("location: admin/index.php");
                        } else {
                            $err = "";
                            header("location:index.php");
                        }
                    } else {
                        $err = "Đăng nhập tài khoản không thành công";
                        include "view/home.php";
                    }
                }
                break;
            }

        case "dangxuat": {
                if (isset($_SESSION['user'])) {
                    dangxuat();
                }
                header("location:index.php");

                break;
            }
        case "info_taikhoan": {
                include "view/info_taikhoan.php";
                break;
            }
        case "quenmk":
            if (isset($_POST['submit'])) {
                $email = $_POST['email'];
                $sendMailMess = sendMail($email);
            }
            include "view/quenmk.php";
            break;
        case "update_taikhoan": {
                if (isset($_POST['submit']) && $_POST['submit']) {
                    $id = $_POST['id'];
                    $username = $_POST['user'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    if ($pass != "") {
                        update_user_taikhoan($id, $pass, $email, $address, $tel);
                        $thongbao = "Thêm tài khoản thành công";
                        $_SESSION['user'] = dangnhap($username, $pass);
                    } else {
                        $err = "Không được để trống tên danh mục";
                    }
                }
                include "view/info_taikhoan.php";
                break;
            }
        case "add_giohang": {
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    $sp = loadsp_chitiet($_GET['idsp']);
                    if (isset($_SESSION['user'])) {
                        $name = $sp['name'];
                        $price = $sp['price'];
                        $img = $sp['img'];
                        $iduser = $_SESSION['user']['id'];
                        $idpro = $sp['id'];
                        insert_giohang($name, $price, $img, $iduser, $idpro);
                    } else {
                        echo "<script>alert('Bạn cần đăng nhập để thêm vào giỏ hàng!!!')</script>";
                    }
                }
                include "view/home.php";
                break;
            }

        case "giohang": {
                if (isset($_SESSION['user'])) {
                    $load_giohang = load_giohang($_SESSION['user']['id']);
                }

                include "view/giohang.php";
                break;
            }
        case "muangay": {
                if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                    if (isset($_SESSION['user'])) {
                        $sp = loadsp_chitiet($_GET['idsp']);
                        $name = $sp['name'];
                        $price = $sp['price'];
                        $img = $sp['img'];
                        $iduser = $_SESSION['user']['id'];
                        $idpro = $sp['id'];
                        insert_giohang($name, $price, $img, $iduser, $idpro);
                        $load_giohang = load_giohang($_SESSION['user']['id']);
                    } else {
                        echo "<script>alert('Bạn cần đăng nhập để thêm vào giỏ hàng!!!')</script>";
                    }
                }
                include "view/giohang.php";
                break;
            }
        case "xoa_giohang": {
                if (isset($_GET['idgh'])) {
                    delete_giohang($_GET['idgh']);
                }
                $load_giohang = load_giohang($_SESSION['user']['id']);
                include "view/giohang.php";
                break;
            }
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
