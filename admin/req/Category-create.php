<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username']) ) {

    if(isset($_POST['category'])){
      include "../../db_conn.php";
      $category = $_POST['category'];

      if(empty($category)){
         $em = "Thể loại là bắt buộc"; 
         header("Location: ../category-add.php?error=$em");
         exit;
      }
    
      $sql = "INSERT INTO category(category) VALUES (?)";
      $stmt = $conn->prepare($sql);
      $res = $stmt->execute([$category]);
    
      
     if ($res) {
          $sm = "Thành công trong việc tạo ra!"; 
          header("Location: ../category-add.php?success=$sm");
          exit;
      }else {
        $em = "Xảy ra lỗi không xác định được"; 
        header("Location: ../category-add.php?error=$em");
        exit;
      }


    }else {
        header("Location: ../category-add.php");
        exit;
    }


}else {
    header("Location: ../admin-login.php");
    exit;
} 