<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <!-- <link rel="stylesheet" href="../css/style.css"> -->
    <script src="https://kit.fontawesome.com/509cc166d7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mb-5">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom border-secondary">
                <div class="container-fluid">
                    <!-- <h1><a class="navbar-brand fs-1" href="#">ADMIN</a></h1> -->
                    <a href=""><img width="100" src="../images/admin-logo.png" alt="index.php"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">TRANG CHỦ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=adddm">DANH MỤC</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=addsp">SẢN PHẨM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=adduser">TÀI KHOẢN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=addcmt">BÌNH LUẬN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?act=thongke">THỐNG KÊ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">VỀ WEBSITE</a>
                            </li>

                        </ul>
                        <!-- <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Nhập từ khóa..."
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                    </div>
                </div>
            </nav>
        </header>