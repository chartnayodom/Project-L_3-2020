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
     //ตัวแปรข้อมูลการสั่งซื้อ
     $sql3 = "SELECT * FROM `tb_order` WHERE username='$username'";
     $result3 = mysqli_query($con,$sql3);
     $row3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
     //$username2 = $row3['username'];
     //$order = $row3['id_order'];
     //$d_order = $row3['date_order'];
     //$status = $row3['paymentstatus']; 
 }
?>
<html> <!--Index หน้าหลัก Ver 0.1.3 30-05-2020-->
<head>
    <title>ช่างวุฒิเซอร์วิส</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="images/png" href="images/r3.png">
    <!--<link rel="stylesheet" href="css/new3.css">-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
    width: 100%;
    height: 350px;
  }
    
    .bgboom {
      margin: center;
    }
    </style>
</head>
<body>
    <!--Navbar เมนูบาร์-->
    <nav class="navbar navbar-expand-md  navbar-dack sticky-top" style="background-color :#35D6ED">
        <a class="navbar-brand" href="Index.php"><img src="LOGO1-01.png" height="75px"></a> <!--Logo-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CollapseNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Link menu แก้ในtag ul-->
        <div class="collapse navbar-collapse" id="CollapseNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="product.php">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="Repair.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>
        </div>
        
        <div>
        <ul class="navbar-nav">
        <li><a href="cart.php"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-basket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.243 1.071a.5.5 0 0 1 .686.172l3 5a.5.5 0 1 1-.858.514l-3-5a.5.5 0 0 1 .172-.686zm-4.486 0a.5.5 0 0 0-.686.172l-3 5a.5.5 0 1 0 .858.514l3-5a.5.5 0 0 0-.172-.686z"/>
                <path fill-rule="evenodd" d="M1 7v1h14V7H1zM.5 6a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h15a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.5-.5H.5z"/>
                <path fill-rule="evenodd" d="M14 9H2v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V9zM2 8a1 1 0 0 0-1 1v5a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V9a1 1 0 0 0-1-1H2z"/>
                <path fill-rule="evenodd" d="M4 10a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 1 1-1 0v-3a.5.5 0 0 1 .5-.5z"/>
                </svg></a></li>
            &nbsp;&nbsp;
        <li class="nav-item"><a class="dropdown-toggle"  data-toggle="dropdown"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
            </svg>Hi,<?php echo $name; ?></a>
        <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="profile.php" class="dropdown-item">ข้อมูลส่วนตัว</a></li>
                <li><a href="loginout.php" class="dropdown-item">ลงชื่อออก</a></li>
        </ul>
    </nav>

    <!--เทสแปบนะ-->
    <div class="container-fluid">
    <!--<div class="bgboom w-100 h-50"  style="background-color :#d8f0ff">-->
    <div class="row a-flex justify-content-center" style="background-color :#d8f0ff">
        <div class="col-md-6">
            <div class="container m-3 bg-light" style="height:400px ;  border-radius: 20px">
                <br>
                <h2>ข้อมูลส่วนตัว</h2>
                
                <label>ชื่อผู้ใช้:<?php echo $username; ?></label><br>
                <label>อีเมล:<?php echo $email; ?></label>
                <br><br>
                <h2>ที่อยู่จัดส่ง</h2>
                
                <label>ชื่อ-นามสกุล:<?php echo $firstname; echo $lastname; ?></label><br>
                <label>ที่อยู่:<?php echo  $Address;?></label><br>
                <label>รหัสไปรษณีย์:<?php echo $post;?></label><br>
                <br>

                <div class="btn-group" role="group" aria-label="Basic example">
                <a type="button" class="btn btn-warning" href="address_edit.php">แก้ไขที่อยู่จัดส่ง</a>
                <a type="button" class="btn btn-info" href="purchase.php">ชำระเงิน</a>
                </div>

                
                
                
            </div>
        </div>
    </div>
    </div>
    <!--<div class="bgboom w-100 h-100"  style="background-color :#d8f0ff">-->
        <div class="row" style="background-color :#d8f0ff" >
            <div class="col mx-5">
                <div>
                    <h2>ประวัติการสินค้า</h2>
                    <table class="table table-striped">
                    <!--หัวตาราง-->
                        <thead>
                            <tr>
                             <th>รหัสการสั่งซื้อ</th>
                             <th>วันที่สั่งซื้อ</th>
                             <th>ราคา</th>
                             <th>สถานะ</th>
                             <th></th>
                         </tr>
                        </thead>
                    <!--ส่วนรายการต่างๆ ขาดปุ่มเพื่มลดจำนวน ใส่เพิ่มก็แล้วแต่-->
                        <tbody>
                        <?php 
                            foreach($row3 as $order)
                            {
                                ?>
                            <tr>
                                <th><?php echo $order['id_order'];?></th>
                                <th><?php echo $order['date_order'];?></th>
                                <th><?php echo $order['total'];?></th>
                                <th><?php echo $order['paymentstatus'];?></th>
                                <th>
                                    <form method="post" action="orderdetail.php">
                                    <button name="detail" id="detail" value ="<?php echo $order['id_order'];?>"  class="btn btn-primary">รายละเอียด</button>
                                    </form>
                                </th>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>   
            </div>
        </div>
    </div>        

    
    <?php include 'footer.php';?>
</body>
</html>