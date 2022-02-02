<?php
    require "condb.php";
    session_start();
    $order = $_POST['orderid'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $bank = $_POST['bank'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $total = $_POST['total'];
    $fileupload = $_REQUEST['fileupload'];
    $name_file =  $_FILES['fileupload']['name'];
    $tmp_name =  $_FILES['fileupload']['tmp_name'];
    $locate_img ="endv2/admin/purchase/";
    move_uploaded_file($tmp_name,$locate_img.$name_file);
    $sql="INSERT INTO `tb_purchase` (`purchase_id`, `order_id`, `Name`, `tel`, `bank`, `date`, `time`, `purs_total`, `transfer_pic`) 
    VALUES ('NULL','$order','$name','$tel','$bank','$date','$time','$total','$name_file')";
    $result = mysqli_query($con,$sql) or die (mysqli_error($con));
    if($result){
      
      echo "<script>";
      echo "alert(\" ยืนยันการชำระสำเร็จ กรุณารอเจ้าหน้าที่ตรวจสอบการชำระเงิน\");";
      echo "</script>";
      Header("Location: index.php"); 
    }
    else{
      echo "<script>";
      echo "alert(\" มีบางอย่างผิดพลาด โปรดแจ้งเจ้าหน้าที่\");";
      echo "</script>";
      Header("Location: purchase.php"); 
    }   
?>