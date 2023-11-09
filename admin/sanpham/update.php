<?php

if (is_array($tensp)) {
    $link = $img_path . $tensp['img'];
}
?>

<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">CẬP NHẬT SẢN PHẨM</h5>
        </div>
        <div class="card-body pt-1">
            <form action="index.php?act=updatesp&id=<?= $tensp['id']?>" method="post" enctype="multipart/form-data">
                <div hidden class="mt-1">
                    <label class="form-label">ID sản phẩm:</label>
                    <input type="text" class="form-control" name="id" value="<?= $tensp['id'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Tên sản phẩm:</label>
                    <input type="text" class="form-control" name="name" value="<?= $tensp['name'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Danh mục sản phẩm:</label>
                    <select class="form-select" aria-label="Default select example" name="iddm">
                        <?php foreach ($tendm as $value) :
                            extract($value);
                        ?>
                            <option value="<?= $id ?>" <?php if ($id === $tensp['iddm']) : ?> selected <?php endif ?>><?= $name ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="mt-1">
                    <label class="form-label">Giá sản phẩm:</label>
                    <input type="text" class="form-control" name="price" value="<?= $tensp['price'] ?>">
                </div>
                <div class="mt-1">
                    <label class="form-label">Hình ảnh sản phẩm:</label> <br>
                    <img class="mb-2" width="100px" src="../<?= $link ?>?>" alt="">
                    <input type="file" class="form-control" name="img">
                </div>
                <div class="mt-1">
                    <label class="form-label">Mô tả sản phẩm:</label>
                    <div class="form-floating">
                        <textarea name="mota" class="form-control" style="height: 110px"><?= $tensp['mota'] ?></textarea>
                    </div>
                </div>
                <div class="mt-1">
                    <label class="form-label">Lượt xem sản phẩm:</label>
                    <input type="text" class="form-control" name="luotxem" value="<?= $tensp['luotxem'] ?>">
                </div>
                <div class="mt-2">
                    <input type="submit" class="btn btn-success" name="submit" value="Cập nhật"></input>
                    <a href="index.php?act=list_sp" class="btn btn-secondary">Danh sách sản phẩm</a>
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