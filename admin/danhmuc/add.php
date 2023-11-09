<div class="main" >
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">THÊM DANH MỤC HÀNG HÓA</h5>
        </div>
        <div class="card-body pt-1">
            <form action="index.php?act=adddm" method="post" >
                <div class="mt-3">
                    <label class="form-label">Tên danh mục:</label>
                    <input type="text" class="form-control" name="tendanhmuc">
                </div>
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" name="submit" value="Thêm"></input>
                    <a href="index.php?act=list_dm" class="btn btn-secondary">Danh sách danh mục</a>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<!-- <script>
    function showSuccessMessage() {
        alert("Thêm thành công!"); // You can replace this with your preferred way of displaying a success message (e.g., using a modal)
        return true; // Returning true allows the form to submit
    }
</script> -->
</body>

</html>