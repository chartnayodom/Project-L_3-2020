<?php
    require "condb.php";
    session_start();
    //echo $_POST['delete'];
    $id = $_POST['delete'];
    $sql = "DELETE FROM tb_admin WHERE `tb_admin`.`id_dash`='$id'";
    $result = mysqli_query($con,$sql);
    if(!$result){
        echo "alert(\"ไม่สำเร็จ\")";
    }
    else{
        echo "alert(\"สำเร็จ\");";
        Header("Location:dashboard.php");
    }
?>