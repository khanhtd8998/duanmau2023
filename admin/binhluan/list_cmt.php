<div class="main">
    <div class="card mt-1">
        <div class="card-header pb-0">
            <h5 class="">DANH SÁCH BÌNH LUẬN</h5>
            <div class="card-footer">
                <a href="index.php?act=addcmt" class="btn btn-success mt-">Thêm bình luận</a>
                <form class="d-flex mt-1" role="search" action="index.php?act=list_cmt" method="post">
                    <input class="form-control me-2 " name="keyw" type="search" placeholder="Nhập tên tài khoản..." aria-label="Search" >
                    <input class="btn btn-secondary ms-2" type="submit" value="Tìm kiếm" name="submit">
                </form>
            </div>
        </div>

        <table class="table table-striped table-hover text-center ">
            <thead class="boder border-top">
                <th>STT</th>
                <th>TÊN TÀI KHOẢN</th>
                <th>NỘI DUNG BÌNH LUẬN</th>
                <th>NGÀY BÌNH LUẬN</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ SẢN PHẢM</th>
                <th>ẢNH SẢN PHẨM</th>
                <th>QUẢN LÝ</th>
            </thead>
            <tbody>
                <?php foreach ($list_cmt as $key => $cmt) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $cmt['user']?></td>
                        <td><?= $cmt['noidung'] ?></td>
                        <td><?= date("d-m-Y", strtotime($cmt['ngaybinhluan'])) ?></td>

                        <?php foreach($list_sp as $sp): ?>
                            <?php if($sp['id'] == $cmt['idpro']):?>
                                <td><?= $sp['name']?></td>
                                <td><?= number_format($sp['price'])?></td>
                                <td>
                                    <a href="../index.php?act=sanphamct&idsp=<?= $sp['id']?>">
                                        <img width="100px" src="../uploads/<?= $sp['img']?>" alt="<?= $sp['name'] ?>">
                                    </a>
                                    
                                </td>
                            <?php endif ?>
                        <?php endforeach?>


                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a onclick="return del('<?= $cmt['user'] ?>')" href="index.php?act=xoacmt&id=<?= $cmt['id'] ?>" class="btn btn-danger">Xóa</a>
                                <a href="index.php?act=suacmt&id=<?= $cmt['id'] ?>" class="btn btn-warning">Sửa</a>
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
        return confirm("Bạn có muốn xóa bình luận của " + name + " ?");
    }
</script>
</body>

</html>