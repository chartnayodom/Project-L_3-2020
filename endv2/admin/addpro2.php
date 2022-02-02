<?php
  
  require "condb.php";
  session_start();
  $name_pro = $_POST["name_pro"];
  $price_pro = $_POST["price_pro"];
  $code = $_POST["code"];
  $category_pro = $_POST["category_pro"];
  $fileupload = $_REQUEST['fileupload']; //รับค่าไฟล์จากฟอร์ม	
   
   	//ฟังก์ชั่นวันที่
   date_default_timezone_set('Asia/Bangkok');
	$date = date("Ymd");	
//ฟังก์ชั่นสุ่มตัวเลข
         $numrand = (mt_rand());
//เพิ่มไฟล์
$upload=$_FILES['fileupload'];
if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="image/";  

//เอาชื่อไฟล์เก่าออกให้เหลือแต่นามสกุล
 $type = strrchr($_FILES['fileupload']['name'],".");
	
//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
$newname = $date.$numrand.$type;
$path_copy=$path.$newname;
$path_link="fileupload/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['fileupload']['tmp_name'],$path_copy);  	
	}   
  
  $sql = "INSERT INTO `tb_product`( `id_pro`, `name_pro`, `price_pro`, `category_pro`, `fileupload`) 
  VALUES ( 'NULL','$name_pro','$price_pro','$category_pro','$newname')";
  $result = mysqli_query($con,$sql);

 if(!$result) {
    echo "Error something wrong!";
 }else{
    header("Location:product.php");
 }
  
  
 

?>