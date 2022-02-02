<?php 
    require "condb.php";
    session_start();
    $email = $_SESSION["email"];
    $pass = $_POST["password"];
    $c_pass = $_POST["password2"];
        if(strlen($pass) < 8){
            echo "<script>";
            echo "alert(\" โปรดกรอกรหัสผ่านอย่างต่ำ 8 ตัวอักษร\");"; 
            echo "window.history.back()";
            echo "</script>";
            exit();
          }
          if(strlen($c_pass) < 8){
            echo "<script>";
            echo "alert(\" โปรดกรอกรหัสผ่านอย่างต่ำ 8 ตัวอักษร\");"; 
            echo "window.history.back()";
            echo "</script>";
            exit();
          }
          if($pass != $c_pass){
            echo "<script>";
            echo "alert(\" รหัสยืนยันไม่ตรงกัน\");"; 
            echo "window.history.back()";
            echo "</script>";
            exit();
          }
          $password = md5($pass);
          $sql = "UPDATE `login` SET `password`='$password' WHERE `login`.`email`='$email'";
          $result = mysqli_query($con,$sql);
         if(!$result) {
            echo "Error something wrong!";
         }else {
            echo "alert(\" แก้ไขรหัสสำเร็จ\");";
            session_destroy(); 
            header("location:login.php");
         }
        

    
?>