<?php
  
  require "condb.php";
  session_start();
  $name_pro = $_POST["name_pro"];
  $price_pro = $_POST["price_pro"];
  $category_pro = $_POST["category_pro"];
  $fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
   
   	
      
  
  $sql = "INSERT INTO `tb_product`( `id_pro`, `name_pro`, `price_pro`, `category_pro`,`fileupload`) 
  VALUES ( 'NULL','$name_pro','$price_pro','$category_pro','$fileupload')";
  $result = mysqli_query($con,$sql);

 if(!$result) {
    echo "Error something wrong!";
 }else{
    header("Location:product.php");
 }
  
  
 

?>