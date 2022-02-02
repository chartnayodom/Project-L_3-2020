<?php 
require('fpdf.php');
require('condb.php');
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
    $id = $row3['id_order'];
class PDF extends FPDF
{
    // Page header
function Header()
{
    
    // Title
    $this->SetFont('THSarabunNew','B',20);
    
    //$this->Cell(80,10,iconv('UTF-8', 'cp874', 'สวัสดี'),0,0,'C',false);
    $this->Text(20,25,iconv('UTF-8', 'cp874', 'ใบเสร็จการสั่งซื้อ'));
    $this->Text(20,45,iconv('UTF-8', 'cp874', "หมายเลขการสั่งซื้อที่:"));
    $this->SetFont('THSarabunNew','B',16);
    $this->Text(165,15,iconv('UTF-8', 'cp874', "ช่างวุฒิเซอร์วิส"),0,0,'R',false);
    $this->Text(127,25,iconv('UTF-8', 'cp874', "ห้องTB 086 ชั้น3ศูนย์การค้าเซียร์ รังสิต"));
    $this->Text(123,35,iconv('UTF-8', 'cp874', "ต.คูคต อ.ลำลูกกา จังหวัดปทุมธานี 12130"));
    $this->SetFont('THSarabunNew','B',18);
    $this->Text(20,55,iconv('UTF-8', 'cp874', "รายการสั่งซื้อ"));
    $this->Line(20,37,190,37);

    // Line break
    $this->Ln(50);
}
function Footer(){
    $this->SetFont('THSarabunNew','B',16);
    $this->Text(20,280,iconv('UTF-8', 'cp874', "สินค้ามีปัญหาโปรดติดต่อ ช่างวุฒ: 091-819-3226 หรือ Facebook Fanpage: ช่างวุฒเซอร์วิส"));
    $this->Line(20,270,190,270);
}
}
$pdf = new PDF();
//$header = array('XD', 'XD', 'XD', 'XD');
//เพิ่มฟ้อนต์ในตัวPDF
$pdf->SetMargins(20,10,20);
$pdf->AddFont('THSarabunNew','','THSarabunNew.php');
$pdf->AddFont('THSarabunNew','B','THSarabunNew_b.php');
$pdf->Addpage();
$pdf->SetFont('THSarabunNew','B',20);
$pdf->Text(62,45,iconv('UTF-8', 'cp874',"$order"));
// Header starts /// 
$pdf->SetFont('THSarabunNew','',16);
$width_cell=array(20,105,20,25);
$pdf->Cell($width_cell[0],10,iconv('UTF-8', 'cp874',"รหัสสินค้า"),'1',0,'C',false); // First header column 
$pdf->Cell($width_cell[1],10,iconv('UTF-8', 'cp874',"ชื่อสินค้า"),'1',0,'C',false); // Second header column
$pdf->Cell($width_cell[2],10,iconv('UTF-8', 'cp874',"จำนวน"),'1',0,'C',false); // Third header column 
$pdf->Cell($width_cell[3],10,iconv('UTF-8', 'cp874',"ราคา"),'1',1,'C',false); // Fourth header column
//ตั้งค่าฟ้อนตในไฟล์PDF
$pdf->SetFont('THSarabunNew','',16);

foreach ($row2 as $product) {
    $total += $product['total'];
    $pdf->Cell($width_cell[0],10,$product['product_code'],'L,R',0,'C',false);
    $pdf->Cell($width_cell[1],10,$product['product_name'],'R',0,'C',false);
    $pdf->Cell($width_cell[2],10,$product['quantity'],'R',0,'C',false);
    $pdf->Cell($width_cell[3],10,$product['total'],'R',0,'C',false);
    //$pdf->Cell($width_cell[4],10,$product['level'],0,1,'C',false);
    $fill = !$fill; // to give alternate background fill  color to rows
    }
    $pdf->Ln(10);
    $pdf->Cell($width_cell[0],10,iconv('UTF-8', 'cp874',""),'T,B,L',0,'C',false); 
$pdf->Cell($width_cell[1],10,iconv('UTF-8', 'cp874',""),'T,B',0,'C',false); 
$pdf->Cell($width_cell[2],10,iconv('UTF-8', 'cp874',"ยอดทั้งหมด"),'T,B',0,'C',false);  
$pdf->Cell($width_cell[3],10,iconv('UTF-8', 'cp874',"$total"),'T,B,R',1,'C',false); 
$pdf->Output('invoice/invoice.pdf','F');
?>
<?php require($_SERVER['DOCUMENT_ROOT']."/test4/endv2/admin/phpmailer/PHPMailerAutoload.php");?>
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
$mail->addAttachment('invoice/invoice.pdf');
$mail->Subject = $subject;

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