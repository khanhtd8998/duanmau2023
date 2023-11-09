<main>
    <div class="box-main">
        <div class="box-left">
            <div class="mb">
                <div class="box_title box_ct">THÔNG TIN NGƯỜI DÙNG</div>
                <div class="box_content">
                    <div class="box_info">
                        <div class="info_right" style="width: 100%">
                            <div class="card-body " >
                                <form  action="index.php?act=update_taikhoan" method="post" enctype="multipart/form-data">
                                    <div hidden class="mt-1">
                                        <label class="form-label">ID user:</label>
                                        <input type="text" class="form-control" name="id" value="<?= $_SESSION['user']['id'] ?>">
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-label">Tên tài khoản:</label>
                                        <input type="text" class="form-control" name="user" value="<?= $_SESSION['user']['user'] ?>" readonly>
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-label">Mật khẩu:</label>
                                        <input type="password" class="form-control" name="pass" id="password" value="<?= $_SESSION['user']['pass'] ?>">
                                        <input type="checkbox" onclick="showPassword()"> Hiển thị mật khẩu
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-label">Email:</label>
                                        <input type="text" class="form-control" name="email" value="<?= $_SESSION['user']['email'] ?>">
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-label">Địa chỉ:</label>
                                        <input type="text" class="form-control" name="address" value="<?= $_SESSION['user']['address'] ?>">
                                    </div>
                                    <div class="mt-1">
                                        <label class="form-label">Số điện thoại:</label>
                                        <input type="text" class="form-control" name="tel" value="<?= $_SESSION['user']['tel'] ?>">
                                    </div>
                                    <div class="mt-3">
                                        <input type="submit" class="btn btn-success" name="submit" value="Cập nhật"></input>
                                        <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                                    </div>
                                    <div class="mt-2">
                                        <?php
                                        if (isset($thongbao) && $thongbao != "") {
                                            echo "<p style='color: green;'>$thongbao</p>";
                                        }
                                        if (isset($err) && $err != "") {
                                            echo "<p style='color: red;'>$err</p>";
                                        }

                                        ?>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include "boxright.php"; ?>

    </div>

</main>