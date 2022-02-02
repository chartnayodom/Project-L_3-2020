<?php
    require "condb.php";
    $sql="SELECT * FROM `useraddress`";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    
    
    
?>
<html> <!--List Ver 0.1 22-05-2020 by Baipor-->
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
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color:#B0C4DE;">
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
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
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
            <a class="nav-link" href="product.php">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
                <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
              </svg>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="customer.php">
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
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customer</h1>
        
      </div>
        <!--ตารางรายการ-->
        <div class="container" style="margin-top: 30px;">
            <table class="table table-striped">
                <!--หัวตาราง-->
                <thead>
                    <tr>
                        <th>ชื่อจริง</th>
                        <th>นามสกุล</th>
                        <th>ที่อยู่</th>
                        <th>รหัสไปรษณีย์</th>
                        <th>โทรศัพท์</th>
                    </tr>
                </thead>
                <!--ส่วนรายการต่างๆ ขาดปุ่มเพื่มลดจำนวน ใส่เพิ่มก็แล้วแต่-->
                <tbody>
                <?php
                foreach($row as $user)
                {
                    ?>
                <tr>
                    <td><?php echo $user['F_name'];?></td>
                    <td><?php echo $user['L_name'];?></td>
                    <td><?php echo $user['Address'];?></td>
                    <td><?php echo $user['Postcode'];?></td>
                    <td><?php echo $user['Tel'];?></td>
                    
                    <!--<td><a href='delete.php?id=".$row['ReqID']."' class="btn btn-info" role="button"></a></td>-->
                    <!--<td><input type="submit"  value = "<?php echo $user['ID'];?>" class="btn btn-danger"></td>-->
                </tr>
               <?php 
               }
?>
            
            
                </tbody>
            </table>
        </div>
    </main>
  </div>
</div>
    
    </body>
</html>
<script src="confirm.js"></script>