<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">CẬP NHẬT BÌNH LUẬN</h5>
        </div>
        <div class="card-body pt-1">
            <form action="index.php?act=updatecmt" method="post" enctype="multipart/form-data">
            <div hidden class="mt-1">
                    <label class="form-label">ID bình luận:</label>
                    <input class="form-control" type="text" name="id" value="<?= $loadone_cmt['id']?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Tài khoản:</label>
                    <select name="iduser" class="form-select" aria-label="Default select example">
                        <option selected>Chọn tài khoản</option>
                        <?php foreach ($list_user as $value) : ?>
                            <option value="<?= $value['id'] ?>"
                                <?php if($value['id'] == $loadone_cmt['iduser']):?>
                                    selected
                                <?php endif?>
                            ><?= $value['user'] ?></option>
                        <?php endforeach ?>
                    </select>

                </div>
                <div class="mt-1">
                    <label class="form-label">Sản phẩm:</label>
                    <select name="idpro" class="form-select" aria-label="Default select example">
                        <option selected>Chọn sản phẩm</option>
                        <?php foreach ($list_sp as $value) : ?>
                            <option value="<?= $value['id'] ?>"
                                <?php if($value['id'] == $loadone_cmt['idpro']): ?>
                                    selected
                                <?php endif ?>
                            ><?= $value['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mt-1">
                    <label class="form-label">Nội dung bình luận:</label>
                    <input class="form-control" type="text" name="noidung" value="<?= $loadone_cmt['noidung']?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Ngày bình luận:</label>
                    <input type="date" class="form-control" name="date" value="<?= $loadone_cmt['ngaybinhluan']?>">
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" name="submit" value="Cập nhật"></input>
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
</body>

</html>