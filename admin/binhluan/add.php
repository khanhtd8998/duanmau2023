<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">THÊM BÌNH LUẬN</h5>
        </div>
        <div class="card-body pt-1">
            <form action="index.php?act=addcmt" method="post" enctype="multipart/form-data">
                <div class="mt-1">
                    <label class="form-label">Tài khoản:</label>
                    <select name="iduser" class="form-select" aria-label="Default select example">
                        <option selected>Chọn tài khoản</option>
                        <?php foreach ($list_user as $value) : ?>
                            <option value="<?= $value['id'] ?>"><?= $value['user'] ?></option>
                        <?php endforeach ?>
                    </select>

                </div>
                <div class="mt-1">
                    <label class="form-label">Sản phẩm:</label>
                    <select name="idpro" class="form-select" aria-label="Default select example">
                        <option selected>Chọn sản phẩm</option>
                        <?php foreach ($list_sp as $value) : ?>
                            <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mt-1">
                    <label class="form-label">Nội dung bình luận:</label>
                    <div class="form-floating">
                        <textarea name="noidung" class="form-control" placeholder="Leave a comment here" style="height: 50px"></textarea>
                    </div>
                </div>
                <div class="mt-1">
                    <label class="form-label">Ngày bình luận:</label>
                    <input type="date" class="form-control" name="date">
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" name="submit" value="Thêm"></input>
                    <a href="index.php?act=list_cmt" class="btn btn-secondary">Danh sách bình luận</a>
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