<?php
    require "condb.php";
    session_start();
    //echo $_POST['delete'];
    $id = $_POST['delete'];
    $sql = "SELECT * FROM `tb_product` WHERE id_pro = '$id'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
    $image = $row['fileupload'];
    unlink("image/$image");
    //หลังลบรูปเสร็จ
    $sql = "DELETE FROM tb_product WHERE `tb_product`.`id_pro`='$id'";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "alert(\"ไม่สำเร็จ\")";
    }
    else{
        echo "alert(\"สำเร็จ\");";
        Header("Location:product.php");
    }
?>