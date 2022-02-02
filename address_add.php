<?php
 require "condb.php";
 session_start();
 $name = $_SESSION['name'];
 $uid = $_SESSION['ID'];
 $sql = "SELECT U_ID FROM `useraddress` WHERE U_ID = '$uid' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
  $count_id = mysqli_num_rows($check_query);
  //Check ข้อมูลว่ามีเกิน 1 recordมั้ย
	if($count_id = 0){
    header("location:address_add.php");
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
    <link rel="stylesheet" href="css/new3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
    /* Make the image fully responsive */
    .carousel-inner img {
    width: 100%;
    height: 350px;
  }
    </style>
</head>
<body  img src="img/hallo.jpg">
    <!--Navbar เมนูบาร์-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top">
        <a class="navbar-brand" href="Index.php"><img src="LOGO1-01.png" height="75px"></a> <!--Logo-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#CollapseNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--Link menu แก้ในtag ul-->
        <div class="collapse navbar-collapse" id="CollapseNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="product.php">Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="Repair.php">Repair</a></li>
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        </ul>
        </div>
        <!--ปุ่มตอนลดแล้วจะอยู่ปกติ จนกว่าจะกดปุ่มดูเมนูเพิ่มเติม(Smartphone)-->
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#"><span class="material-icons">shopping_cart</span></a></li>
            <li class="nav-item"><a class="dropdown-toggle"  data-toggle="dropdown"><span class="material-icons">account_circle</span>Hi,<?php echo $name; ?></a>
            <ul class="dropdown-menu dropdown-menu-right">
                <li><a href="profile.php" class="dropdown-item">ข้อมูลส่วนตัว</a></li>
                <li><a href="loginout.php" class="dropdown-item">ลงชื่อออก</a></li>
            </ul>
        </li>
        </ul>
    </nav>
    <!--Content เนื้อหาในหน้าเว็บยัดได้เต็มที่ จะเพิ่มcssหรือBoostrapตามสะดวก (ห้ามแก้ในStructure.css)-->
    <div class="container-md mx-auto my-5">
      <h1>แก้ไขที่อยู่จัดส่ง</h1>
    <form class="form" action="addr_add.php" method="post" id="AddressForm">
        <div class="form-group">
            
            <div class="col-md-6 mx-auto">
                <label for="first_name"><h4>First name</h4></label>
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 mx-auto">
              <label for="last_name"><h4>Last name</h4></label>
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
            </div>
        </div>

        <div class="form-group">
            
            <div class="col-md-6 mx-auto">
                <label for="phone"><h4>Mobile</h4></label>
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter phone" title="enter your phone number if any.">
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-md-6 mx-auto">
                <label for="email"><h4>Location</h4></label>
                <input type="text" class="form-control" name="location" id="location" placeholder="address" title="enter a location">
            </div>
        </div>
        <div class="form-group">
            
            <div class="col-md-6 mx-auto">
                <label for="email"><h4>Postcode</h4></label>
                <input type="text" class="form-control" name="postcode" id="postcode" placeholder="postcode" title="enter a postcode">
            </div>
        </div>
        
        <div class="form-group">
             <div class="col-md-12 mx-auto">
                  <br>
                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> บันทึก</button>
                     <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
              </div>
        </div>
    </form>
    </div>
      <!-- Footer -->
      <footer class="py-5 bg-black">
        <div class="container">
          <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2019</p>
        </div>
        <!-- /.container -->
      </footer>
    
      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Footer แก้เติมภายในdivนี้เท่านั้น-->
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