<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Tên đầy đủ là bắt buộc";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "Tên người dùng là bắt buộc";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Cần có mật khẩu";
    	header("Location: ../signup.php?error=$em&$data");
	    exit;
    }else {

    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(fname, username, password) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $uname, $pass]);

    	header("Location: ../signup.php?Success=Tài khoản của bạn đã được tạo thành công");
	    exit;
    }


}else {
	header("Location: ../signup.php?error=error");
	exit;
}
