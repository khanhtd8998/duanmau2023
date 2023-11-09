<?php
// session_start();
$list_danhmuc = loadall_danhmuc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHỦ</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header>
            <div class="head">
                <div class="logo">
                    <a href="index.php"><img src="./images/logo.png" alt="logo"></a>
                </div>
                <div class="nav">
                    <ul class="menu">
                        <li><a href="index.php">Trang chủ</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?act=sanpham" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Danh Mục
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <?php foreach ($list_danhmuc as $value) :
                                    extract($value); ?>
                                    <li><a class="dropdown-item-center" href="index.php?act=sanpham&iddm=<?= $id ?>"><?= $name ?></a></li>
                                <?php endforeach ?>
                            </ul>


                        </li>
                        <li><a href="index.php?act=giohang">Giỏ hàng</a></li>
                        <?php
                        if(empty($_SESSION)){
                            echo '<li><a href="index.php?act=dangky">Tài khoản</a></li>';
                        }else{
                            echo ' <li><a href="index.php?act=info_taikhoan">Quản lý tài khoản</a></li>';
                        }
                        
                        ?>
                        

                    </ul>

                </div>
            </div>
        </header>