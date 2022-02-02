<?php
    session_start();
    include "condb.php";
    //กำหนดตัวแปร
    $u_username = $_POST["username"];
    $u_password = $_POST["password"];
    $c_password = $_POST["password2"];
    $u_email = $_POST["email"];
    $emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
    //Check การกรอกข้อมูล
    if(empty($u_username)){
      echo "<script>";
      echo "alert(\" โปรดกรอกชื่อผู้ใช้\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    } 
    if(empty($u_password)){
      echo "<script>";
      echo "alert(\" โปรดกรอกรหัสผ่าน\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    } 
    if(empty($c_password)){
      echo "<script>";
      echo "alert(\" โปรดยืนยันรหัสผ่าน\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    } 
    if(empty($u_email)){
      echo "<script>";
      echo "alert(\" โปรดกรอกอีเมล\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    }
    if(!preg_match($emailValidation,$u_email)){
      echo "<script>";
      echo "alert(\"รูปแบบอีเมลไม่ถูกต้องโปรดกรอกอีเมลใหม่อีกครั้ง\")";
      echo "window.history.back()";
      echo "</script>";
      exit();
    }
    if(strlen($u_username) < 8){
      echo "<script>";
      echo "alert(\" โปรดกรอกชื่อผู้ใช้อย่างน้อย 8 ตัวอักษร\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    } 
    if(strlen($u_password) < 8){
      echo "<script>";
      echo "alert(\" โปรดกรอกรหัสผ่านอย่างต่ำ 8 ตัวอักษร\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    }
    if(strlen($c_password) < 8){
      echo "<script>";
      echo "alert(\" โปรดกรอกรหัสผ่านอย่างต่ำ 8 ตัวอักษร\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    }
    if($u_password != $c_password){
      echo "<script>";
      echo "alert(\" รหัสยืนยันไม่ตรงกัน\");"; 
      echo "window.history.back()";
      echo "</script>";
      exit();
    }
    //check usernameว่าภูกใช้ไปแล้วหรือยัง
    $sql = "SELECT username FROM `login` WHERE username = '$u_username' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_user = mysqli_num_rows($check_query);
	if($count_user > 0){
		echo "<script>";
    echo "alert(\" ชื่อผู้ใช้ได้ถูกใช้งานแล้ว โปรดลองอีกครั้ง\");";
    echo "window.history.back()";
    echo "</script>";
    exit();
  }
  else{
    //check Emailว่าถูกใช้สมัครแล้วหรือยัง
    $sql = "SELECT email FROM `login` WHERE email = '$u_email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql)or die(mysqli_error($con));
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "<script>";
    echo "alert(\" อีเมลได้ถูกใช้งานแล้ว โปรดกรอกอีเมลอีกครั้ง\");";
    echo "window.history.back()";
    echo "</script>";
		exit();
	}else{

    //รันคำสั่งMysql
    $passwords = md5($u_password);
    $sql = "INSERT INTO `login`(`U_ID`, `username`, `password`, `email`, `level`) VALUES ('NULL','$u_username','$passwords','$u_email','member')";
    
    if(mysqli_query($con,$sql)){
      echo "<script>";
      echo "alert(\" ทำการสมัครสมาชิกเรียบร้อย\");";
      echo "</script>";
      Header("Location:index.php"); 
    }
    else{
      echo "Something wrong.";
    }
  }
  }
?>