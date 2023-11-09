<main>

    <div class="box-main">
        <div class="box-left">
            <div class="mb">
                <div class="box_title box_ct">ĐĂNG KÝ TÀI KHOẢN</div>
                <div class="box_content">
                    <div class="box_info">
                        <div class="card-body">
                            <form action="index.php?act=dangky" method="post" >
                                <div class="mt-1">
                                    <label class="form-label">Tên đăng nhập:</label>
                                    <input type="text" class="form-control" name="user">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Mật Khẩu:</label>
                                    <input type="text" class="form-control" name="pass">
                                </div>
                                <div class="mt-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-success" name="submit" value="Đăng ký"></input>
                                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                                </div>
                                <div class="mt-3">
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
        <?php include "boxright.php"; ?>

    </div>

</main>