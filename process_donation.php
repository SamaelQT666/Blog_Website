<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$amount = $message = $successMessage = $errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount']; 
    $message = $_POST['message'];

    $recipient_email = 'duycuongtd1@gmail.com';

    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';
    

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'duycuongtd1@gmail.com'; 
        $mail->Password = 'ijcmulewsbgusdpg'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('huypro1806@gmail.com', 'david');

        $mail->addAddress($recipient_email);

        $mail->Subject = 'Khoản quyên góp mới đã nhận được';
        $mail->Body = "Một khoản quyên góp mới đã được nhận:\n\nSố tiền: $amount\nTin nhắn: $message";

        $mail->send();

        $successMessage = 'Cảm ơn tặng phẩm của bạn! Tin nhắn của bạn đã được gửi.';
    } catch (Exception $e) {
        $errorMessage = 'Đã xảy ra lỗi khi gửi email. Vui lòng thử lại sau.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quyên tặng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Quyên góp ngay bây giờ</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-4">
            <div class="form-group">
                <label for="amount">Số tiền:</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="message">Tin nhắn (tùy chọn):</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
            <button class="btn btn-primary mt-3" type="submit">Quyên tặng</button>
        </form>
        <?php if (!empty($successMessage)) { ?>
            <div class="alert alert-success mt-3" role="alert">
                <?php echo $successMessage; ?>
                <br>
                <a href="index.php" class="btn btn-primary mt-3">Quay lại trang chính</a>
            </div>
        <?php } ?>
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger mt-3" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php } ?>
    </div>
</body>
</html>
