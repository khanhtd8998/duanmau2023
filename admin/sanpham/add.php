    <div class="main">
        <div class="card mt-1">
            <div class="card-header">
                <h5 class="">THÊM SẢN PHẨM</h5>
            </div>
            <div class="card-body pt-1">
                <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" >
                    <div class="mt-1">
                        <label class="form-label">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Danh mục sản phẩm:</label>
                        <select class="form-select" aria-label="Default select example" name="iddm">
                            <option value="0" selected>Danh mục</option>
                            <?php foreach ($tendanhmuc as $value) :
                                extract($value);
                            ?>
                                <option value="<?= $id ?>"><?= $name ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Giá sản phẩm:</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Hình ảnh sản phẩm:</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Mô tả sản phẩm:</label>
                        <div class="form-floating">
                            <textarea name="mota" class="form-control" placeholder="Leave a comment here" style="height: 50px"></textarea>
                            <!-- <label for="floatingTextarea2">Comments</label> -->
                        </div>
                    </div>
                    <div class="mt-1">
                        <label class="form-label">Lượt xem sản phẩm:</label>
                        <input type="text" class="form-control" name="luotxem">
                    </div>
                    <div class="mt-2">
                        <input type="submit" class="btn btn-success" name="submit" value="Thêm"></input>
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