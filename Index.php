<?php
 require "condb.php";
 session_start();
 if(isset($_SESSION['ID'])){
     //header("location:main.php");
    include "bartest2.php";
 }
 else{
    include "bartest.php";

 }
?>
<!doctype html>
<html lang="en">
<body class="w-100 h-100">

    <main role="main" style="
  background-repeat: no-repeat;
  background-size: cover;
  background-image: -moz-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -ms-linear-gradient(to left, #87CEFA, #CCFFE5);
  background-image: -o-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -webkit-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: linear-gradient(to left,  #87CEFA, #CCFFE5);"
>
      <?php include 'Carousel.php';?>
      <div class="container marketing" style="font-family: 'Kanit', sans-serif;">
      
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
          <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          </svg>
            <h2>รายละเอียด ลูกค้า</h2>
            <p><a class="btn btn-secondary" href="profile.php" role="button">View details &raquo;</a></p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-bag" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
          <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
        </svg>
            <h2>สินค้า</h2>
            <p><a class="btn btn-secondary" href="product.php" role="button">View details &raquo;</a></p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
          <svg width="6em" height="6em" viewBox="0 0 16 16" class="bi bi-chat" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
          </svg>
            <h2>รายละเอียด</h2>
            <p><a class="btn btn-secondary" href="about.php" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <!-- test -->
        
        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">คุณมีปัญหาเกี่ยวกับแล็บท็อป หรือ คอมพิวเตอร์ ? <span class="text-muted"> สามารถติดทางเราได้เลยครับ</span></h2>
            <p class="lead" ></p>
          </div>
          <div class="col-md-5">
          <div class="w3-content w3-section rounded" style="max-width:500px">
            <img class="mySlides w3-animate-top"    src="productimg/set1.jpg" style="width:100%">
            <img class="mySlides w3-animate-bottom" src="productimg/set2.jpg" style="width:100%">
            <img class="mySlides w3-animate-top"    src="productimg/set3.jpg" style="width:100%">
            <img class="mySlides w3-animate-bottom" src="productimg/set4.jpg" style="width:100%">
          </div>
          </div>
        </div>

        <script>
          var myIndex = 0;
          carousel();

          function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";  
            }
            myIndex++;
            if (myIndex > x.length) {myIndex = 1}    
            x[myIndex-1].style.display = "block";  
            setTimeout(carousel, 1000);    
          }
        </script>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">อยากได้คอมพิวเตอร์ประกอบ ราคาประหยัด หรือไม่? <span class="text-muted">สามารถติดทางเราได้เลยครับ</span></h2>
            

          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto rounded" src="images/13.png" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Address and<span class="text-muted"> Contact</span></h2>
            <p class="lead">ชั้น 3 เซี้ยร์ ห้อง TB 086 </p>
            <p class="lead">เลขที่ 99 หมู่ 8 ถ.พหลโยธิน ต.คูคต อ.ลำลูกกา จ.ปทุมธานี 12130</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto rounded" src="images/store.jpg" alt="Generic placeholder image">
          </div>
          &nbsp;
        </div>

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      
    </main>
    <?php include 'footer.php';?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
  </body>
</html>