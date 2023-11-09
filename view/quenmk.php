<main>

    <div class="box-main">
        <div class="box-left">
            <div class="mb">
                <div class="box_title box_ct">QUÊN MẬT KHẨU</div>
                <div class="box_content">
                    <div class="box_info">
                        <div  class="card-body">
                            <form action="index.php?act=quenmk" method="post">
                                <div class="mt-1">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" name="email" placeholder="Vui lòng nhập email">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" class="btn btn-success" name="submit" value="Gửi"></input>
                                    <button type="reset" class="btn btn-outline-secondary">Nhập lại</button>
                                </div>
                                <div class="mt-3">
                                    <?php if (isset($sendMailMess) && $sendMailMess != '') {
                                        echo "<p style='color:green;'>$sendMailMess;</p>";
                                    } ?>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include "boxright.php"; ?>

    </div>

</main>