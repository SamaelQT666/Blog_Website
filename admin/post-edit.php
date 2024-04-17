<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username']) && isset($_GET['post_id'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bảng điều khiển - Tạo Chỉnh sửa<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/side-bar.css">
	<link rel="stylesheet" href="../css/style.css">


    <link rel="stylesheet" href="../css/richtext.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.richtext.min.js"></script>
</head>
<body>
	<?php 
      $key = "hhdsfs1263z";
	  include "inc/side-nav.php"; 
      include_once("data/Post.php");
      include_once("../db_conn.php");
      $post_id =  $_GET['post_id'];
      $post = getById($conn, $post_id);
      $categories = getAllCategories($conn);

	?>
               
	 <div class="main-table">
	 	<h3 class="mb-3">Tạo bài đăng mới
	 		<a href="post.php" class="btn btn-secondary">Bài viết</a></h3>
	 	<?php if (isset($_GET['error'])) { ?>	
	 	<div class="alert alert-warning">
			<?=htmlspecialchars($_GET['error'])?>
		</div>
	    <?php } ?>

        <?php if (isset($_GET['success'])) { ?>	
	 	<div class="alert alert-success">
			<?=htmlspecialchars($_GET['success'])?>
		</div>
	    <?php } ?>

         <form class="shadow p-3" 
    	      action="req/post-edit.php" 
    	      method="post"
    	      enctype="multipart/form-data">

		  <div class="mb-3">
		    <label class="form-label">Tiêu đề</label>
		    <input type="text" 
		           class="form-control"
		           name="title"
		           value="<?=$post['post_title']?>">
		    <input type="text" 
		           class="form-control"
		           name="post_id"
		           value="<?=$post['post_id']?>" 
		           hidden>
		    <input type="text" 
		           class="form-control"
		           name="cover_url"
		           value="<?=$post['cover_url']?>" 
		           hidden>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Ảnh bìa</label>
		    <input type="file" 
		           class="form-control"
		           name="cover">
		     <img src="../upload/blog/<?=$post['cover_url']?>" width="200">
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Văn bản</label>
		    <textarea
		           class="form-control text"
		           name="text"><?=$post['post_text']?></textarea>
		  </div>
		  <div class="mb-3">
		    <label class="form-label">Thể loại</label>
		    <select name="category" class="form-control">
		    	<?php foreach ($categories as $category) { 
                  
		    	?>
		    	<option value="<?=$category['id']?>"
		    		 <?php  echo ($category['id'] == $post['category']) ? "selected": "" ?>>
		    		<?=$category['category']?></option>
		        <?php } ?>
		    </select>
		    
		  </div>
		  <button type="submit" class="btn btn-primary">Sửa</button>
		</form>
	 </div>
	</section>
	</div>

	 <script>
	 	var navList = document.getElementById('navList').children;
	 	navList.item(1).classList.add("active");

        $(document).ready(function() {
            $('.text').richText();
        });
	 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>

<?php }else {
	header("Location: ../admin-login.php");
	exit;
} ?>