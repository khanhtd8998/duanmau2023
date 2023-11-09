<?php
function insert_taikhoan($username,$pass,$email) {
    $sql = "insert into taikhoan(user,pass,email) 
    values('$username','$pass','$email')";
    pdo_execute($sql);
}

function dangnhap($user, $pass) {
    $sql = "select * from taikhoan where user = '$user' and pass = '$pass'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;
    // var_dump($taikhoan);
    // die;
    // if($taikhoan != false) {
    //     $_SESSION['user'] = $user;
    // }else{
    //     return "Đăng nhập không thành công";
    // }
    
}

function dangxuat() {
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
}

function insert_user($username,$pass,$email,$address,$tel){
    $sql = "insert into taikhoan(user,pass,email,address,tel) 
    values('$username','$pass','$email','$address','$tel')";
    pdo_execute($sql);
}

function loadall_user($keyw = "") {
    $sql = "select * from taikhoan where 1";
    if($keyw != ""){
        $sql .= " and user like '%".$keyw."%'";
    }
    $result = pdo_query($sql);
    return $result;
}

function delete_user($id) {
    $sql = "delete from taikhoan where id = '$id'";
    pdo_execute($sql);
}
function loadone_user($id) {
    $sql = "select * from taikhoan where id = '$id'";
    $result = pdo_query_one($sql);
    return $result;
}

function update_user($id,$username,$pass,$email,$address,$tel,$role){
    $sql = "UPDATE `taikhoan` SET 
    `user`='$username',
    `pass`='$pass',
    `email`='$email',
    `address`='$address',
    `tel`='$tel',
    `role`='$role' WHERE `id`='$id'";
    pdo_execute($sql);
}

function update_user_taikhoan($id,$pass,$email,$address,$tel){
    $sql = "UPDATE `taikhoan` SET 
    `pass`='$pass',
    `email`='$email',
    `address`='$address',
    `tel`='$tel' WHERE `id`='$id'";
    pdo_execute($sql);
}
function sendMail($email)
{  
    $sql = "SELECT * FROM taikhoan WHERE email='$email'";
    $taikhoan = pdo_query_one($sql);

    if ($taikhoan != false) {
        sendMailPass($email, $taikhoan['user'], $taikhoan['pass']);

        return "Gửi email thành công";
    } else {
        return "Email bạn nhập không có có trong hệ thống";
    }
}
function sendMailPass($email, $username, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'be72466f22d97b';                     //SMTP username
        $mail->Password   = '4ce49443de1d24';                               //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('duanmau2023@example.com', 'duanmau');
        $mail->addAddress($email, $username);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Lay lai mat khau';
        $mail->Body    = 'Mat khau cua ban la: ' . $pass;

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
