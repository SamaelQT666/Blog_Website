<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập quản trị viên</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="d-flex justify-content-center align-items-center vh-100">

		<form class="shadow w-450 p-3" action="admin/admin-login.php" method="post">

			<h4 class="display-4  fs-1">ĐĂNG NHẬP QUẢN TRỊ</h4><br>
			

			<!-- <?php
			$pass = '123';
			$pass = password_hash($pass, PASSWORD_DEFAULT);
			echo $pass;
			?> -->


			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo htmlspecialchars($_GET['error']); ?>
				</div>
			<?php } ?>

			<div class="mb-3">
				<label class="form-label">Tên tài khoản</label>
				<input type="text" class="form-control" name="uname" value="<?php echo (isset($_GET['uname'])) ? htmlspecialchars($_GET['uname']) : "" ?>">
			</div>

			<div class="mb-3">
				<label class="form-label">Mật khẩu</label>
				<input type="password" class="form-control" name="pass">
			</div>

			<button type="submit" class="btn btn-primary">Đăng nhập</button>
			<a href="login.php" class="link-secondary">Đăng nhập người dùng</a>
		</form>
	</div>
</body>

</html>