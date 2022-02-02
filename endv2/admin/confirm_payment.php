<?php
    require "condb.php";
    $order = $_POST['confirm'];
    $sql="UPDATE `tb_order` SET `paymentstatus`= 'ชำระเงินแล้ว' WHERE `tb_order`.`id_order`='$order'";
    $result=mysqli_query($con,$sql) or die (mysqli_error($con));
    //$sql2="SELECT * FROM `tb_orderdetail` WHERE `id_order`='$order'";
    //$result2=mysqli_query($con,$sql2) or die(mysqli_error($con));
    //$row2=mysqli_fetch_all($result2,MYSQLI_ASSOC);
    $sql3="SELECT * FROM `tb_order` WHERE `id_order`='$order'";
    $result3=mysqli_query($con,$sql3) or die(mysqli_error($con));;
    $row3=mysqli_fetch_array($result3);
    $email = $row3['email'];
    //$sql4="SELECT * FROM `useraddress` WHERE 1";
?>
<?php require($_SERVER['DOCUMENT_ROOT']."/test3/endv2/admin/phpmailer/PHPMailerAutoload.php");?>
<?php
header('Content-Type: text/html; charset=utf-8');

$mail = new PHPMailer;
$mail->CharSet = "utf-8";	
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tsl';
$mail->SMTPAuth = true;


$gmail_username = "jutemaster45@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "0910789810"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1


$sender = "Wut Sevice"; // ชื่อผู้ส่ง
$email_sender = "noreply@wutservice.com"; // เมล์ผู้ส่ง 
$email_receiver = $email; // เมล์ผู้รับ ***

$subject = "ใบเสร็จการสั่งซื้อ"; // หัวข้อเมล์


$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;
$mail->addAttachment('invoice/invoice.php');
$email_content = "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8'/>
        <title>ทดสอบการส่ง Email</title>
    </head>
    <body>
        <h1 style='background: #3b434c;padding: 10px 0 20px 10px;margin-bottom:10px;font-size:30px;color:white;' >
            Wut Service
        </h1>
        <div style='padding:20px;'>
            <div style='text-align:center;margin-bottom:50px;'>
                            
            </div>
            <div>				
            <style>
                    table {
                    width:100%;
                    }
                    table, th, td {
                    border: 1px solid black;
                    border-collapse: collapse;
                    }
                    th, td {
                    padding: 15px;
                    text-align: left;
                    }
                    #t01 tr:nth-child(even) {
                    background-color: #eee;
                    }
                    #t01 tr:nth-child(odd) {
                    background-color: #fff;
                    }
                    #t01 th {
                    background-color: black;
                    color: white;
                    }
                    </style>
            </head>
            
        <div style='padding:20px;'>
            <div style='text-align:center;margin-bottom:50px;'>
                <p>หมายเลขการสั่งซื้อที่: $order</p><br>
                <p>ได้รับการยืนยันการชำระเงินเรียบร้อยแล้ว</p><br>
                <p>หมายเลขการส่งจะแจ้งในภายหลัง</p>    
            </div>
            <div style='margin-top:30px;'>
                <hr>
                <address>
                    <h4>ติดต่อสอบถาม</h4>
                    <p>เบอร์โทรศัพท์:091-8193226</p>
                    <p>https://www.facebook.com/WutServiceZeer</p>
                </address>
            </div>
        </div>
        <div style='background: #3b434c;color: #a2abb7;padding:30px;'>
            <div style='text-align:center'> 
                2020 © WutService
            </div>
        </div>
    </body>
</html>
";

//  ถ้ามี email ผู้รับ   
if($email_receiver){
	$mail->msgHTML($email_content);


	if (!$mail->send()) {  // สั่งให้ส่ง email

		// กรณีส่ง email ไม่สำเร็จ
		echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
		echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
	}else{
		// กรณีส่ง email สำเร็จ
        echo "ระบบได้ส่งข้อความไปเรียบร้อย";
        header("Location:payment_list.php");
	}	
}



?>