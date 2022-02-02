<?php
  require "condb.php";
  session_start();
  $name = $_SESSION['name'];
  if(isset($_SESSION['ID'])){
  $f_name = $_POST["first_name"];
  $l_name = $_POST["last_name"];
  $address = $_POST["location"];
  $tel = $_POST["mobile"];
  $user = $_SESSION['ID'];
  $post = $_POST["postcode"];
  
  $sql = "UPDATE `useraddress` SET `F_name`='$f_name',`L_name`='$l_name',`Address`='$address',`Tel`='$tel',`Postcode`='$post' WHERE `useraddress`.`U_ID`='$user'";
  $result = mysqli_query($con,$sql);

  
 
 if(!$result) {
    echo "Error something wrong!";
 }else {
    echo "แก้ไขสำเร็จ!";
    header("location:profile.php");
 }
}
  

?>
