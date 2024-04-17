<?php
session_start();
$logged = false;
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
	$logged = true;
	$user_id = $_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<?php
	include 'inc/NavBar.php';
	?>
	<div class="main-banner">

	</div>

	<footer class="text-center p-5">
		<p>&copy; <?php echo date("Y") ?> Bản quyền thuộc về NHÓM 10</p>
		<p><a href="#">Liên hệ</a> | <a href="#">Điều khoản</a></p>
	</footer>
	<footer class="footer">
		<div class="container">
			<p class="copyright">&copy; <?php echo date("Y") ?> NHÓM 10</p>
			<ul class="social-links">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram"></i></a></li>
			</ul>
		</div>
	</footer>

	<p style="text-align: center;">Cảm ơn đã ghé thăm BLOG CỦA NHÓM 10!</p>



	<style>
		.footer {
			background-color: #f2f2f2;
			padding: 15px 0;
		}

		.container {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.copyright {
			font-size: 14px;
			color: #333;
		}

		.social-links {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		.social-links li {
			display: inline-block;
			margin: 0 5px;
		}

		.social-links li a {
			color: #333;
			text-decoration: none;
		}

		.social-links li a:hover {
			color: #0088FF;
		}
	</style>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
