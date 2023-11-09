<?php
if (is_array($tendanhmuc)) {
    extract($tendanhmuc);
}
?>
<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">CẬP NHẬT DANH MỤC HÀNG HÓA</h5>
        </div>
        <div class="card-body">
            <form action="index.php?act=updatedm" method="post">
                <div class="mt-3" hidden>
                    <label class="form-label">IDDM</label>
                    <input type="text" class="form-control" name="id" value="<?php if (isset($id) && $id != "") echo $id; ?>">
                </div>
                <div class="mt-3">
                    <label class="form-label">Tên danh mục:</label>
                    <input type="text" class="form-control" name="tendanhmuc" value="<?php if (isset($name) && $name != "") echo $name; ?>">
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" name="submit" value="Cập nhật"></input>
                    <a href="index.php?act=list_dm" class="btn btn-secondary">Danh sách danh mục</a>
                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                </div>
                <div class="mt-3">
                    <?php
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