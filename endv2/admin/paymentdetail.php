<?php
    require "condb.php";
    session_start();
    $pay=$_POST['pay'];
    $sql="SELECT * FROM `tb_purchase` WHERE `purchase_id`='$pay'";
    $result=mysqli_query($con,$sql) or die(mysqli_error($con));
    $row=mysqli_fetch_array($result);
    $order=$row['order_id'];
    $name=$row['Name'];
    $tel=$row['tel'];
    $bank=$row['bank'];
    $date=$row['date'];
    $time=$row['time'];
    $amount=$row['purs_total'];
    $picture=$row['transfer_pic'];    
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Product list Wut</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="main.css" rel="stylesheet">
  </head>
<body>
<nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#BCD2EE;">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">LOGO</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-light w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
   <!-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="dashboard.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 1h5v1H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6h1v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2z"/>
                <path d="M9 4.5V1l5 5h-3.5A1.5 1.5 0 0 1 9 4.5z"/>
              </svg>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="product.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
              </svg>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="customer.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
              </svg>
              Customers
            </a>
          </li>
          <li>
            <a class="nav-link" href="payment_list.php">รายการยืนยันการชำระเงิน</a>
          </li>
        </ul>
      </div>
    </nav>-->
    <div>
    <div class="row mx-5 a-flex justify-content-center">
        <div class="col-md-6">
            <div class="container m-3 bg-light" style="height:900px ;  width:900px; border-radius: 20px">
      <h1>หลักฐานการชำระเงิน</h1>
      <h3>หมายเลขการสั่งซื้อ: <?php echo $order;?></h3>
      <p>ชื่อ &nbsp;<?php echo $name;?></p><br>
      <p>เบอร์&nbsp;<?php echo $tel;?></p><br>
      <p>ธนาคาร&nbsp;<?php echo $bank;?></p><br>
      <p>วันที่&nbsp;<?php echo $date;?></p><br>
      <p>เวลา&nbsp;<?php echo $time;?></p><br>
      <p><?php echo $amount;?></p><br>
      <img src="purchase/<?php echo $picture;?>" width="50%"><br>
      <a href="payment_list.php">กลับ</a>
      <form action="pdf_mail.php" method="POST">
                    <button name="confirm" value ="<?php echo $order;?>"  class="btn btn-primary">ยืนยันการชำระเงิน</button>
                  </form>
            </div>
          </div>
        </div>
    </div>
</body>
</html>