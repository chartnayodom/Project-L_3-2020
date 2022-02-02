<?php
    require "condb.php";
    $order = $_POST['confirm'];
    $sql="UPDATE `tb_order` SET `paymentstatus`= 'ชำระเงินแล้ว' WHERE `tb_order`.`id_order`='$order'";
    $result=mysqli_query($con,$sql) or die (mysqli_error($con));
    $sql2="SELECT * FROM `tb_orderdetail` WHERE `id_order`='$order'";
    $result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
    $row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $sql3="SELECT * FROM `tb_order` WHERE `id_order`='$order'";
    $result3=mysqli_query($con,$sql3) or die(mysqli_error($con));;
    $row3=mysqli_fetch_array($result3);
    $email = $row3['email'];
    $email_receiver = $email;
    echo "$order";

?>