<?php

?>
<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">CẬP NHẬT TÀI KHOẢN</h5>
        </div>
        <div class="card-body pt-1">
            <form action="index.php?act=updateuser" method="post" enctype="multipart/form-data">
                <div hidden class="mt-1">
                    <label class="form-label">ID user:</label>
                    <input type="text" class="form-control" name="id" value="<?= $user['id'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Tên tài khoản:</label>
                    <input type="text" class="form-control" name="user" value="<?= $user['user'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Mật khẩu:</label>
                    <input type="text" class="form-control" name="pass" value="<?= $user['pass'] ?>">
                </div>
 
                <div class="mt-1">
                    <label class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" value="<?= $user['email'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" name="address" value="<?= $user['address'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Số điện thoại:</label>
                    <input type="text" class="form-control" name="tel" value="<?= $user['tel'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Role:</label>
                    <input type="text" class="form-control" name="role" value="<?= $user['role'] ?>">
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" name="submit" value="Cập nhật"></input>
                    <a href="index.php?act=list_user" class="btn btn-secondary">Danh sách tài khoản</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- <script>
    function showSuccessMessage() {
        alert("Thêm thành công!"); 
        return true; 
    }
</script> -->
</body>

</html>