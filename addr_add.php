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
  
  $sql = "INSERT INTO `useraddress`(`ID`, `U_ID`, `F_name`, `L_name`, `Address`, `Tel`, `Postcode`) VALUES ('NULL','$user','$f_name','$l_name','$address','$tel','$post')";
  $result = mysqli_query($con,$sql);

  if(strlen($tel) > 10);
  
 
 if(!$result) {
    echo "Error something wrong!";
 }else {
    echo "เพิ่มที่อยู่สำเร็จ!";
    header("location:profile.php");
 }
}

?>