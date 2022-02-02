<?php
	require "condb.php";
    session_start();
    $name = $_SESSION['name'];
    if(!isset($_SESSION['ID'])){
        header("location:index.php");
    }
    else{
        //ตัวแปรข้อมูลAddress
        $uid = $_SESSION['ID'];
        $sql = "SELECT `ID`, `U_ID`, `F_name`, `L_name`, `Address`, `Tel`, `Postcode` FROM `useraddress` WHERE U_ID='$uid'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $firstname = $row['F_name'];
        $lastname = $row['L_name'];
        $Address = $row['Address'];
        $phone = $row['Tel'];
        $post = $row['Postcode'];
        //ตัวแปรข้อมูลUser profile
        $sql2 = "SELECT * FROM `login` WHERE U_ID='$uid'";
        $result2 = mysqli_query($con,$sql2);
        $row2 = mysqli_fetch_array($result2);
        $username = $row2['username'];
        $email = $row2['email'];
    };  
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirm</title>
</head>
<body>
<!--สร้างตัวแปรสำหรับบันทึกการสั่งซื้อ -->
<?php
	$names = $_REQUEST["name"];
	$addresss = $_REQUEST["address"];
	$emails = $_REQUEST["email"];
	$phones = $_REQUEST["phone"];
	$total_qty = $_REQUEST["total_qty"];
	$totals = $_REQUEST['Submit2'];
	$dttm = Date("Y-m-d G:i:s");
	//บันทึกการสั่งซื้อลงใน order_detail
	mysqli_query($con, "BEGIN"); 
	$sql3	= "INSERT INTO `tb_order` (`id_order`, `username`, `name`, `address`, `email`, `phone`, `date_order`, `total`, `paymentstatus`) 
	VALUES(null, '$username', '$names', '$addresss', '$emails', '$phones', '$dttm', '$totals', 'รอการชำระเงิน')";
	$query3	= mysqli_query($con, $sql3) or die(mysqli_error($con));
	//ฟังก์ชั่น MAX() จะคืนค่าที่มากที่สุดในคอลัมน์ที่ระบุ ออกมา หรือจะพูดง่ายๆก็ว่า ใช้สำหรับหาค่าที่มากที่สุด นั่นเอง.
	$sql4 = "SELECT max(id_order) AS id_order FROM `tb_order` WHERE name='$names' and email='$emails' and date_order='$dttm' ";
	$query4	= mysqli_query($con, $sql4) or die(mysqli_error($con));
	$row4 = mysqli_fetch_array($query4);
	$o_id = $row4["id_order"];
//PHP foreach() เป็นคำสั่งเพื่อนำข้อมูลออกมาจากตัวแปลที่เป็นประเภท array โดยสามารถเรียกค่าได้ทั้ง $key และ $value ของ array
	foreach($_SESSION['cart'] as $id_pro=>$qty)
	{
		$sql5	= "SELECT * FROM `tb_product` WHERE id_pro=$id_pro";
		$query5	= mysqli_query($con, $sql5) or die(mysqli_error($con));
		$row5	= mysqli_fetch_array($query5);
		$total	= $row5['price_pro']*$qty;
		$code = $row5['code'];
		$product = $row5['name_pro'];
		
		$sql6	= "INSERT INTO `tb_orderdetail` (`id`, `id_order`, `product_name`, `product_code`, `quantity`, `total`) 
		VALUES(null, '$o_id', '$product', '$code', '$qty', '$total')";
		$query6	= mysqli_query($con, $sql6) or die(mysqli_error($con));
	}
	
	if($query3 && $query6){
		mysqli_query($con, "COMMIT");
		$msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
		foreach($_SESSION['cart'] as $id_pro)
		{	
			//unset($_SESSION['cart'][$p_id]);
			unset($_SESSION['cart']);
		}
	}
	else{
		mysqli_query($con, "ROLLBACK");  
		$msg = "บันทึกข้อมูลไม่สำเร็จ กรุณาติดต่อเจ้าหน้าที่ค่ะ ";	
	}
?>
<script type="text/javascript">
	alert("<?php echo $msg;?>");
	window.location ='product.php';
</script>

 




</body>
</html>