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
        <form action="process_donation.php" method="post" id="donation-form" class="mt-4">
            <div class="form-group">
                <label for="amount">Số tiền:</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="name">Tên:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Thông Điệp:</label>
                <textarea class="form-control" id="message" name="message" rows="4"></textarea>
            </div>
            <div class="form-group">
                <label>Phương thức thanh toán:</label>
                <select class="form-control" id="payment-method" name="payment-method">
                    <option value="bank-account">Bank Account</option>
                    <option value="zalo-pay">Zalo Pay</option>
                    <option value="momo">Momo</option>
                </select>
            </div>
            <div id="bank-account-details" class="form-group" style="display: none;">
                <label for="bank-account">Tài khoản ngân hàng:</label>
                <input type="text" class="form-control" id="bank-account" name="bank-account">
            </div>
            <div id="zalo-pay-details" class="form-group" style="display: none;">
                <label for="zalo-pay">Zalo Pay:</label>
                <input type="text" class="form-control" id="zalo-pay" name="zalo-pay">
            </div>
            <div id="momo-details" class="form-group" style="display: none;">
                <label for="momo">Momo:</label>
                <input type="text" class="form-control" id="momo" name="momo">
            </div>
            <button class="btn btn-primary mt-3" type="submit">Quyên tặng</button>
            <a href="index.php" class="btn btn-primary mt-3">Quay lại trang chính</a>
        </form>
    </div>

    <script>
        document.getElementById('payment-method').addEventListener('change', function() {
            var selectedMethod = this.value;
            if (selectedMethod === 'bank-account') {
                document.getElementById('bank-account-details').style.display = 'block';
                document.getElementById('zalo-pay-details').style.display = 'none';
                document.getElementById('momo-details').style.display = 'none';
            } else if (selectedMethod === 'zalo-pay') {
                document.getElementById('bank-account-details').style.display = 'none';
                document.getElementById('zalo-pay-details').style.display = 'block';
                document.getElementById('momo-details').style.display = 'none';
            } else if (selectedMethod === 'momo') {
                document.getElementById('bank-account-details').style.display = 'none';
                document.getElementById('zalo-pay-details').style.display = 'none';
                document.getElementById('momo-details').style.display = 'block';
            }
        });
    </script>
</body>

</html>