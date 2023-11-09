<main>

    <div class="box-main">
        <div class="box-left">
            <div class="mb">
                <div class="box_title box_ct">GIỎ HÀNG</div>
                <div class="box_content">
                    <!-- <div class="box_info"> -->
                        <!-- <div class="card-body"> -->
                            <table class="table table-hover text-center">
                                <thead>
                                    <th>STT</th>
                                    <th>TÊN</th>
                                    <th>ẢNH</th>
                                    <th>GIÁ</th>
                                    <th>QUẢN LÝ</th>
                                </thead>
                                <tbody>
                                    <?php if (isset($_SESSION['user'])) :
                                        $sum = 0; ?>
                                        <?php foreach ($load_giohang as $key => $value) :
                                            extract($value);
                                            $sum += $price;
                                        ?>
                                            <tr>
                                                <td><?= $key + 1 ?></td>
                                                <td><?= $name ?></td>
                                                <td><img width="100" src="uploads/<?= $img ?>" alt=""></td>
                                                <td><?= number_format($price) ?> VNĐ</td>
                                                <td><a class="btn btn-secondary" onclick="return confirm('Bạn chắc muốn xóa không <?= $name ?>')" href="index.php?act=xoa_giohang&idgh=<?= $id ?>">XÓA</a></td>
                                            </tr>
                                        <?php endforeach ?>
                                        <tr class="text-end">
                                            <td colspan="6">
                                                Tổng tiền: <p class="mb-0" style="font-weight: bold; color: red"><?= number_format($sum) ?> VND</p><br>
                                                <button class="btn btn-success mt-0">Thanh toán</button>
                                            </td>
                                        </tr>
                                    <?php else : ?>
                                        <tr>
                                            <td align="center" colspan="6">Không có sản phảm nào</td>
                                        </tr>
                                    <?php endif ?>
                                </tbody>
                            </table>
                        <!-- </div> -->
                    <!-- </div> -->
                </div>

            </div>
        </div>
        <?php include "boxright.php"; ?>

    </div>

</main>