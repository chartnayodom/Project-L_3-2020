<?php
    require "condb.php";
    session_start();
    $order_id = $_POST['purchase'];
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
    }
?>
<html>
<head>
                        <title>ช่างวุฒิเซอร์วิส</title>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <link rel="shortcut icon" type="images/png" href="images/r3.png">
                            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
                            <link rel="stylesheet" type="text/css" href="css/new3.css">
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
                            <div>

<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>
<div class="bgboom w-100 h-100"  style="background-color :#d8f0ff">
    <div class="row mx-5 a-flex justify-content-center">
        <div class="col-md-6">
            <div class="container m-3 bg-light" style="height:500px ;  border-radius: 20px">
            <div class="signup-content">
                    <form method="POST" action="add_purchase.php" class="needs-validation" enctype="multipart/form-data">
                        <h2 class="form-title">ชำระรายการสินค้า</h2>
                        <div class="form-group">
                            <label class="label">รหัสการสั่งซื้อ</label>
                            <input type="text" name="orderid" id="orderid" class="form-input" placeholder="กรอกรหัสการสั่งซื้อ" value="<?php echo $order_id;?>">
                            
                        </div>
                        <div class="form-group">
                            <label class="label">ชื่อ</label>
                            <input type="text" name="name" id="name" class="form-input" placeholder="ชื่อ" value="<?php echo $firstname;?> <?php echo $lastname;?>">
                            
                        </div>
                        <div class="form-group">
                            <label class="label">เบอร์โทรศัพท์</label>
                            <input type="text" name="tel" id="tel" class="form-input" placeholder="เบอร์โทรศัพท์">
                            
                        </div>
                        <div class="form-group">
                            <label class="label">ธนาคารที่ชำระเงิน</label>
                                <select name="bank" id="bank" class="form-input">
                                    <option selected>เลือกธนาคารที่ชำระเงิน</option>
                                    <option value="ธนาคารไทยพานิชย์">ธนาคารไทยพานิชย์ เลขที่บัญชี x-xx-xxxx-xxxx-xx-x</option>
                                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย เลขที่บัญชี x-xx-xxxx-xxxx-xx-x</option>
                                </select>
                        </div>

                        <div class="form-group">
                            <label class="label">วันที่</label>
                            <input type="date" name="date" id="date">
                        </div>

                        <div class="form-group">
                            <label class="label">เวลา</label>
                            <input type="text" name="time" id="time" class="form-input" placeholder="เวลา(ชม:นท)">
                        </div>

                        <div class="form-group">
                            <label class="label">จำนวนที่ชำระ</label>
                            <input tyoe="text" name="total" id="total" class="form-input" placeholder="จำนวนที่ชำระ">  
                        </div>

                        <div class="form-group">
                            <label class="label">หลักฐานการชำระเงิน</label>
                            <input type="file" name="fileupload" class="form-input">  
                        </div>

                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="btn btn-info" value="ยืนยัน"/>
                        </div>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</div>
<!------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>      
</body>
</html>