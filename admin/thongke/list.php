<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">DANH SÁCH THỐNG KÊ KÊ</h5>
            <div class="card-footer">
                <a href="?act=bieudo" class="btn btn-outline-secondary mt-">Biểu đồ thống kê</a>
            </div>
        </div>
        <table class="table table-striped table-hover text-center">
            <thead>
                <th>STT</th>
                <th>ID</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ MIN(VNĐ)</th>
                <th>GIÁ MAX(VNĐ)</th>
                <th>GIÁ TRUNG BÌNH(VNĐ)</th>
            </thead>
            <tbody>
                <?php foreach ($list_thongke as $key => $value) :
                    extract($value);
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $id ?></td>
                        <td><?= $name ?></td>
                        <td><?= number_format($soluong,2) ?></td>
                        <td><?= number_format($gia_min,2) ?></td>
                        <td><?= number_format($gia_max,2) ?></td>
                        <td><?= number_format($gia_avg,2) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="card-footer">
            <a href="?act=list_dm" class="btn btn-outline-secondary mt-">Danh sách danh mục</a>
            <a href="?act=list_sp" class="btn btn-outline-secondary mt-">Danh sách sản phẩm</a>
            <a href="?act=list_user" class="btn btn-outline-secondary mt-">Danh sách tài khoản</a>
            <a href="?act=list_cmt" class="btn btn-outline-secondary mt-">Danh sách bình luận</a>
            
        </div>
    </div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    function del(name) {
        return confirm("Bạn có muốn xóa " + name + " ?");
    }
</script>
</body>

</html>