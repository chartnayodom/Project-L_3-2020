<?php
session_start();
    include "condb.php";
    //กำหนดตัวแปร
    $u_username = $_POST["username"];
    $u_email = $_POST["email"];
    //Check การกรอกข้อมูล
    if(empty($u_username)){
        echo "<script>";
        echo "alert(\" โปรดกรอกชื่อผู้ใช้\");"; 
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
      $sql="SELECT * FROM login
        WHERE  username='".$u_username."' 
        AND  email='".$u_email."' ";
        $result = mysqli_query($con,$sql);

        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION["user"] = $row["username"];
            $_SESSION["email"] = $row["email"];
            header("location:resetpass.php");
            
        }
        else{
            echo "<script>";
                echo "alert(\" user หรือ  email ไม่ถูกต้อง\");"; 
                echo "window.history.back()";
            echo "</script>";
        }
    
?>