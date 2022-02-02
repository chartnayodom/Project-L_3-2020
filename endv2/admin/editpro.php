<?php
  require "condb.php";
  session_start();
  $name = $_POST["name_pro"];
  $price = $_POST["price_pro"];
  $code = $_POST["code"];
  $category = $_POST["category_pro"];
  $uid = $_POST['edit'];
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
  
  $sql = "UPDATE `tb_product` SET `name_pro`='$name',`code`='$code',`price_pro`='$price',`category_pro`='$category',`fileupload`='$newname'
  WHERE `tb_product`.`id_pro`='$uid'";
  $result = mysqli_query($con,$sql) or die("Error: " . mysqli_error($con));

  
 
 if(!$result) {
    echo "Error something wrong!";
 }else {
    echo "แก้ไขสำเร็จ!";
    header("location:product.php");
 }
?>