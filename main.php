<?php
 require "condb.php";
 session_start();
 /*if(isset($_SESSION['ID'])){
     //header("location:main.php");
    include "bartest2.php";
 }
 else{
    include "bartest.php";

 }*/
?>

<html> <!--Index หน้าหลัก Ver 0.1.3 30-05-2020-->
<!--<head>
    <title>ช่างวุฒิเซอร์วิส</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/New.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
    width: 100%;
    height: 350px;
  }
    </style>
</head>-->
<body>
    
    <!--Content เนื้อหาในหน้าเว็บยัดได้เต็มที่ จะเพิ่มcssหรือBoostrapตามสะดวก (ห้ามแก้ในStructure.css)-->
    <div class="Content">
        <div class="col-lg-9 mx-auto">

            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="productimg/banner001.png" alt="#">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="productimg/banner002.png" alt="#">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="productimg/banner003.png" alt="#">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
    
            <div class="row">
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="product.php"><img class="card-img-top" src="productimg/product.jpg" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="product.php">Read More</a>
                    </h4>
                    <h5>Computer set</h5>
                    <p class="card-text">เรามีเซ็ทคอมประกอบเองหลากหลาย เหมาะสมกับผู้ใช้ทุกระดับ</p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="about.html"><img class="card-img-top" src="productimg/Pwut.jpg" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title ">
                      <a href="about.html">Read More</a>
                    </h4>
                    <h5>รายละเอียดต่างๆ</h5>
                    <p class="card-text">นี่คือเจ้าของร้าน และ รายละเอียดต่างๆ เกี่ยวกับร้าน</p>
                  </div>
                </div>
              </div>
    
              <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                  <a href="Repair.html"><img class="card-img-top" src="productimg/shop.jpg" alt=""></a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="Repair.html">Read More</a>
                    </h4>
                    <h5>Laptop Repair</h5>
                    <p class="card-text">แล็ปท็อปของคุณมีปัญหา!? ทางเรามีบริการรับซ่อมแล็ปท็อปนะครับ</p>
                  </div>
                  
                </div>
              </div>
    

            </div>
            <!-- /.row -->
    
          </div>
          <!-- /.col-lg-9 -->
    </div>
    <!-- Footer -->
    <footer class="page-footer font-small stylish-color-dark pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-4 mx-auto">
      
              <!-- Content -->
            
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
              <p>ชั้น 3 เซี้ยร์ ห้อง TB 086
                 เลขที่ 99 หมู้ 8 ถ.พหลโยธิน ต.คูคต อ.ลำลูกกา จ.ปทุมธานี 12130
              </p>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none">
      
            <!-- Grid column -->
            <div class="col-md-2 mx-auto">
      
              <!-- Links -->
              <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
      
              <ul class="list-unstyled">
                <li>
                  <a href="#!">Link 1</a>
                </li>
                <li>
                  <a href="#!">Link 2</a>
                </li>
                <li>
                  <a href="#!">Link 3</a>
                </li>
                <li>
                  <a href="#!">Link 4</a>
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <hr>
      
        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <h5 class="mb-1">Can Register now</h5>
          </li>
          <li class="list-inline-item">
            <a href="register.php" class="btn btn-danger btn-rounded">Sign up!</a>
          </li>
        </ul>
        <!-- Call to action -->
      
        <hr>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>
      <!-- Footer -->
    </body>
    </html>