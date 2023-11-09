<main>
    <?php extract($sp); ?>
    <div class="box-main">
        <div class="box-left">
            <div class="mb">
                <div class="box_title box_ct">THÔNG TIN SẢN PHẨM</div>
                <div class="box_content">
                    <div class="box_info">
                        <div class="info_left">
                            <img src="<?= $img_path . $img ?>" alt="">
                        </div>
                        <div class="info_right">
                            <h2 style="font-size: 24px;"><?= $name ?></h2>
                            <h3 style="color: red; font-size: 20px"><?= number_format($price) ?> VND</h3>
                            <div class="quantity">
                                <button type="button" class="decrease">-</button>
                                <input class="quantity_input" type="number" value="1" min="1">
                                <button type="button" class="increase">+</button>
                            </div>
                            <div class="info_btn">
                                <a class="btn btn-success" href="index.php?act=muangay&idsp=<?= $id ?>">Mua ngay</a>    
                                <a class="btn btn-secondary fs-6" href="index.php?act=add_giohang&idsp=<?= $id ?>"><i class="fa-solid fa-cart-plus" style="color: #fff;"></i></a>
                            </div>
                            <div class="info_sub">
                                <p><?= $mota ?>
                                <p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="mb">
                <div class="box_title box_ct">BÌNH LUẬN</div>
                <div class="box_content">
                    <?php foreach ($loadone_cmt_sp as $value) : ?>
                        <form method="post" action="?act=sanphamct&idcmt=<?= $value['id'] ?>&idsp=<?= $value['idpro'] ?>">
                            <div class="box_cmt">
                                <div class="user_cmt">
                                    <h5 style="margin-bottom: 10px;"><?= strtoupper($value['user']) ?></h5>
                                    <p><?= date("d-m-Y", strtotime($value['ngaybinhluan'])) ?></p>

                                </div>
                                <p><?= $value['noidung'] ?></p>
                                <?php if (isset($_SESSION['user'])) {
                                    if ($value['user'] === $_SESSION['user']['user'] || $_SESSION['user']['user'] == "Admin") { ?>
                                        <input class="btn btn-outline-secondary btn-xoa-cmt" onclick="return confirm('Bạn muốn xóa bình luận này không?')" name="submit_xoa_cmt" type="submit" value="Xóa">
                                <?php }
                                } ?>

                            </div>
                        </form>
                    <?php endforeach ?>

                    <?php if (!empty($_SESSION['user'])) { ?>
                        <form action="index.php?act=sanphamct&idsp=<?= $id ?>" class="form_cmt" method="post">
                            <textarea name="noidung" id="form_cmt" placeholder="Viết bình luận"></textarea>
                            <button type="submit" class="box_search_submit" name="submit">GỬI</button>
                        </form>
                    <?php } else { ?>
                        <p class='mt-3' style='color: red;'>Bạn cần đăng nhập để bình luận</p>
                    <?php } ?>


                </div>
            </div>
            <div class="mb">
                <div class="box_title box_ct">SẢN PHẨM CÙNG LOẠI</div>
                <div class="box_content">
                    <div class="box-left">
                        <div class="items">
                            <?php foreach ($sp_cungloai as $value) :
                                extract($value);
                                $img = $img_path . $img;
                            ?>
                                <div class="box_items" style="width:300px;">
                                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>">
                                        <div class="box_items_img">
                                            <img src="<?= $img ?>" alt="">
                                        </div>
                                    </a>
                                    <a class="item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?= $name ?></a>
                                    <p class="price"><?= number_format($price) ?> VND</p>
                                    <a class="btn btn-success" href="index.php?act=muangay&idsp=<?= $id ?>">Mua ngay</a>
                                    <a class="btn btn-secondary fs-6" href="index.php?act=add_giohang&idsp=<?= $id ?>"><i class="fa-solid fa-cart-plus" style="color: #fff;"></i></a>

                                </div>
                            <?php endforeach ?>
                        </div>

                    </div>
                </div>
            </div>


        </div>
        <?php include "boxright.php"; ?>

    </div>

</main>