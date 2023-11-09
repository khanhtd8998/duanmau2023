<div class="main">
    <div class="card mt-1">
        <div class="card-header pb-0">
            <h5 class="">DANH SÁCH SẢN PHẨM</h5>
            <div class="card-footer">
                <a href="index.php?act=addsp" class="btn btn-success mt-">Thêm sản phẩm</a>
                <form class="d-flex mt-1" role="search" action="index.php?act=list_sp" method="post">
                    <input class="form-control me-2 " name="keyw" type="search" placeholder="Nhập từ khóa sản phẩm..." aria-label="Search" >
                    <select class="form-select" aria-label="Default select example"  name="iddm">
                        <option value="0" selected>Danh mục</option>
                        <?php foreach($list_dm as $value): ?>
                        <option value="<?= $value['id']?>"><?= $value['name']?></option>
                        <?php endforeach ?>
                    </select>
                    <input class="btn btn-secondary ms-2" type="submit" value="Tìm kiếm" name="submit">
                </form>
            </div>
        </div>

        <table class="table table-striped table-hover text-center ">
            <thead class="boder border-top">
                <th>STT</th>
                <th style="width:200px">TÊN SP</th>
                <th>DANH MỤC</th>
                <th>GIÁ</th>
                <th>HÌNH ẢNH</th>
                <th style="width:400px">MÔ TẢ</th>
                <th>VIEW</th>
                <th>QUẢN LÝ</th>
            </thead>
            <tbody>
                <?php foreach ($list_sp as $key => $value) :

                    $link = $img_path . $value['img'];
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['cat_name'] ?></td>
                        <td><?= number_format($value['price']) ?></td>
                        <td>
                            <?php if($value['img'] == ""): ?>       
                                <?php else: ?>
                                <a href="../index.php?act=sanphamct&idsp=<?= $value['id']?>">
                                    <img src="../<?= $link ?>" alt="anh-sp-<? $key + 1 ?>" width="100px">
                                </a>
                                <?php endif ?>
                        </td>
                        <td><?= $value['mota'] ?></td>
                        <td><?= $value['luotxem'] ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a onclick="return del('<?= $value['name'] ?>')" href="index.php?act=xoasp&id=<?= $value['id'] ?>" class="btn btn-danger">Xóa</a>
                                <a href="index.php?act=suasp&id=<?= $value['id'] ?>" class="btn btn-warning">Sửa</a>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

    </div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script>
    function del(name) {
        return confirm("Bạn có muốn xóa sản phẩm " + name + " ?");
    }
</script>
</body>

</html>