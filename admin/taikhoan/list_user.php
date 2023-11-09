<div class="main">
    <div class="card mt-1">
        <div class="card-header pb-0">
            <h5 class="">DANH SÁCH TÀI KHOẢN</h5>
            <div class="card-footer">
                <a href="index.php?act=adduser" class="btn btn-success mt-">Thêm tài khoản</a>
                <form class="d-flex mt-1" role="search" action="index.php?act=list_user" method="post">
                    <input class="form-control me-2 " name="keyw" type="search" placeholder="Nhập từ khóa tên tài khoản..." aria-label="Search" >
                    <input class="btn btn-secondary ms-2" type="submit" value="Tìm kiếm" name="submit">
                </form>
            </div>
        </div>

        <table class="table table-striped table-hover text-center ">
            <thead class="boder border-top">
                <th>STT</th>
                <th>TÊN TÀI KHOẢN</th>
                <th>MẬT KHẨU</th>
                <th>EMAIL</th>
                <th>ĐỊA CHỈ</th>
                <th>SĐT</th>
                <th>ROLE</th>
                <th>QUẢN LÝ</th>
            </thead>
            <tbody>
                <?php foreach ($list_user as $key => $value) :

                    // $link = $img_path . $value['img'];
                ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= $value['user'] ?></td>
                        <td><?= $value['pass'] ?></td>
                        <td><?= $value['email'] ?></td>
                        <td><?= $value['address'] ?></td>
                        <td><?= $value['tel'] ?></td>
                        <td><?php
                            if($value['role'] == 0){
                                echo "User";
                            }else{
                                echo "Quản trị";
                            }
                        
                        ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <a onclick="return del('<?= $value['user'] ?>')" href="index.php?act=xoauser&id=<?= $value['id'] ?>" class="btn btn-danger">Xóa</a>
                                <a href="index.php?act=suauser&id=<?= $value['id'] ?>" class="btn btn-warning">Sửa</a>
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