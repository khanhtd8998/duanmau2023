
<main>
    <div class="box-main">
        <div class="box-left">
            <div class="items">
                <?php foreach($dssp as $value): 
                    extract($value);
                    $img = $img_path.$img;
                    ?>
                <div class="box_items">
                    <a href="index.php?act=sanphamct&idsp=<?= $id ?>">
                        <div class="box_items_img">
                            <img src="<?= $img?>" alt="">
                        </div>
                    </a>
                    <a class="item_name" href="index.php?act=sanphamct&idsp=<?= $id ?>"><?=  $name ?></a>
                    <p class="price"><?= number_format($price) ?> VND</p>
                    <a class="btn btn-success" href="index.php?act=muangay&idsp=<?= $id ?>">Mua ngay</a>
                    <a class="btn btn-secondary fs-6" href="index.php?act=add_giohang&idsp=<?= $id ?>"><i class="fa-solid fa-cart-plus" style="color: #fff;"></i></a>
                </div>
                <?php endforeach ?>
            </div>

        </div>
        <?php include"boxright.php"; ?>

    </div>

</main>