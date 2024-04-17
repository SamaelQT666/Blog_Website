<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="blog.php">
			<b>BLOG<span style="color: #0088FF;">MỖI NGÀY</span>
			</b>
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="blog.php">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="category.php">
						Thể loại</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="donate.php">
						Ủng hộ chúng tôi</a>
				</li>
				<?php
				if ($logged) {
				?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="profile.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							@<?= $_SESSION['username'] ?>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="logout.php">
									Đăng xuất</a></li>
						</ul>
					</li>
				<?php
				} else {
				?>
					<li class="nav-item">
						<a class="nav-link" href="login.php" style="position: absolute; right: 400px;">Đăng nhập | Đăng ký</a>
					</li>
				<?php
				}
				?>
			</ul>
			<form class="d-flex" role="search" method="GET" action="blog.php">
				<input class="form-control me-2" type="search" name="search" placeholder="Nhập từ khóa..." aria-label="Search">

				<button class="btn btn-outline-success" type="submit">
					Tìm kiếm</button>
			</form>
		</div>
	</div>
</nav>