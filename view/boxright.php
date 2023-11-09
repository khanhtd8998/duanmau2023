<div class="box-right">
    <div class="mb">
        <div class="box_title">TÀI KHOẢN</div>
        <?php if (empty($_SESSION)) : ?>
            <div class="box_content form_account">
                <form action="index.php?act=dangnhap" method="POST">
                    <p>Tên đăng nhập</p>
                    <input type="text" name="user" id="">
                    <p>Mật khẩu</p>
                    <input type="password" name="pass" id=""><br>
                    <input type="checkbox" name="" id="">Ghi nhớ tài khoản?
                    <br><input type="submit" class="btn btn-outline-secondary custom-btn btn-1" name="submit" value="Đăng nhập">
                </form>
                <li class="form_li"><a href="?act=quenmk">Quên mật khẩu</a></li>
                <li class="form_li"><a href="index.php?act=dangky">Đăng kí tài khoản</a></li>
                <?php

                if (!empty($err)) {
                    echo "<p style='color: red;'>$err</p>";
                }

                ?>
            </div>
        <?php else : ?>
            <div class="box_content form_account">
                <?php if ($_SESSION['user']['user'] === "Admin") : ?>
                    <p>Xin chào <a href=""><strong><?= $_SESSION['user']['user'] ?></strong></a></p>
                    <a href="admin/index.php">Quản trị Website</a> <br>
                    <a href="index.php?act=dangxuat" class="btn btn-secondary mt-3">Đăng xuất</a>
                <?php else : ?>
                    <p>Xin chào <a href="index.php?act=info_taikhoan"><strong><?= $_SESSION['user']['user'] ?></strong></a></p>
                    <a href="index.php?act=info_taikhoan">Thông tin tài khoản</a><br>
                    <a href="index.php?act=quenmk">Quên mật khẩu</a><br>
                    <a href="index.php?act=dangxuat" class="btn btn-secondary mt-3">Đăng xuất</a>
                <?php endif ?>
            </div>

        <?php endif ?>
    </div>
    <div class="mb">
        <div class="box_title">DANH MỤC</div>
        <div class="box_content2 product_portfolio">
            <?php foreach ($list_danhmuc as $value) :
                extract($value);
            ?>
                <ul>
                    <li><a href="index.php?act=sanpham&iddm=<?= $id ?>"><?= $name ?></a></li>
                </ul>
            <?php endforeach; ?>
        </div>

        <form action="index.php?act=sanpham" method="POST" class="d-flex mt-3" role="search">
            <input class="form-control me-2" name="keyword" type="search" placeholder="Nhập từ khóa..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="submit">Search</button>
        </form>
    </div>

    <div class="mb">
        <div class="box_title">SẢN PHẨM HOT</div>
        <div class="box_content">
            <?php foreach ($listsp_top as $value) :
                extract($value);
                $img = $img_path . $img;
            ?>
                <div class="selling_products" style="width:100%;">
                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><img src="<?= $img ?>" alt="anh"></a>
                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>