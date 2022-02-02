<?php
    require "condb.php";
    $order = $_POST['confirm'];
    $sql="UPDATE `tb_order` SET `paymentstatus`= 'ชำระเงินแล้ว' WHERE `tb_order`.`id_order`='$order'";
    $result=mysqli_query($con,$sql) or die (mysqli_error($con));
    if($result){
        header("location:order.php");
    }
    else{
        echo "something wrong!";
    }
?>