<div class="main">
    <div class="card mt-1">
        <div class="card-header">
            <h5 class="">DANH MỤC HÀNG HÓA</h5>
            <div class="card-footer">
                <a href="index.php?act=adddm" class="btn btn-success mt-">Thêm bình luận</a>
                <form class="d-flex mt-1" role="search" action="index.php?act=list_dm" method="post">
                    <input class="form-control me-2 " name="keyw" type="search" placeholder="Nhập tên danh mục..." aria-label="Search" >
                    <input class="btn btn-secondary ms-2" type="submit" value="Tìm kiếm" name="submit">
                </form>
            </div>
        </div>
        <table class="table table-striped table-hover text-center">
            <thead>
                <th>STT</th>
                <th>TÊN DANH MỤC</th>
                <th>IDDM</th>
                <th>QUẢN LÝ</th>
            </thead>
            <tbody>
                <?php foreach ($list_dm as $key => $value) :
                    extract($value);
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $name ?></td>
                        <td><?= $id ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a onclick="return del('<?= $name ?>')" href="index.php?act=xoadm&id=<?= $id ?>" class="btn btn-danger">Xóa</a>
                                <a href="index.php?act=suadm&id=<?= $id ?>" class="btn btn-warning">Sửa</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="card-footer">
            <a href="index.php?act=adddm" class="btn btn-success mt-">Thêm danh mục</a>
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