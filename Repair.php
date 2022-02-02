<?php
 require "condb.php";
 session_start();
 $name = $_SESSION['name'];
 if(!isset($_SESSION['ID'])){
     //header("location:index.php");
     include "bartest.php";
 }
 else{
    include "bartest2.php";
 }
?>
<!--about 17/6/63-->
<html> 
<!--<head>
    <title>ช่างวุฒิเซอร์วิส</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="vendors/animate-css/animate.css">
    <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
    
    <link rel="stylesheet" href="css/new.css">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
    width: 100%;
    height: 350px;
  }
    </style>
</head>-->
<body class="w-100 h-100">
    <!--Content เนื้อหาในหน้าเว็บยัดได้เต็มที่ จะเพิ่มcssหรือBoostrapตามสะดวก (ห้ามแก้ในStructure.css)-->
    <div class="Content">
        <div class="jumbotron">
            <div class="container">
              <h1 class="display-3">คุณต้องการซ่อมรึป่าว ?</h1>
              <p>ถ้าคุณต้องการซ่อม สามารถติดต่อได้ทาง Facebook หรือ ท่านสามารถมาหาทางร้านได้เลย</p>
              <p><a class="btn btn-primary btn-lg" href="https://www.facebook.com/WutServiceZeer/reviews/?ref=page_internal" role="button">กดติดต่อทาง Facebook »</a></p>
            
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5475.745266383946!2d100.62035890941866!3d13.96237880163079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d7e006638fca5%3A0x3a9f978be5da1908!2zWmVlciBSYW5nc2l0IOC5gOC4i-C4teC4ouC4o-C5jOC4o-C4seC4h-C4quC4tOC4lQ!5e0!3m2!1sth!2sth!4v1592397517037!5m2!1sth!2sth" 
        width="1080" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mapform" ></iframe>
    </div>
</div>
</div>
<!--Footer แก้เติมภายในdivนี้เท่านั้น-->
    <!-- Footer -->
    <footer >
        <?php include 'footer.php';?>
      </footer>
      <!-- Footer -->
    </body>
    </html>