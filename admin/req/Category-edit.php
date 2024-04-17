<?php 
session_start();

if (isset($_SESSION['admin_id']) && isset($_SESSION['username']) ) {

    if(isset($_POST['category']) && isset($_POST['id'])){
      include "../../db_conn.php";
      $category = $_POST['category'];
      $id = $_POST['id'];

      if(empty($category)){
         $em = "Thể loại là bắt buộc"; 
         header("Location: ../category-edit.php?error=$em&id=$id");
         exit;
      }
    
      $sql = "UPDATE category SET category=? WHERE id=?";
      $stmt = $conn->prepare($sql);
      $res = $stmt->execute([$category, $id]);
    
      
     if ($res) {
          $sm = "Đã chỉnh sửa thành công!"; 
          header("Location: ../category-edit.php?success=$sm&category=$category&id=$id");
          exit;
      }else {
        $em = "Xảy ra lỗi không xác định được"; 
        header("Location: ../category-edit.php?error=$em&id=$id");
        exit;
      }


    }else {
        header("Location: ../category-edit.php");
        exit;
    }


}else {
    header("Location: ../admin-login.php");
    exit;
} 