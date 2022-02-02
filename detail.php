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
<html> <!--Index หน้าหลัก Ver 0.1 23-05-2020 by Baipor-->
<head>
    <script type="text/javascript" src="js/javecom.js"></script>
</head>
<body>
    <!--Navbar เมนูบาร์-->
    
    <!--Content เนื้อหาในหน้าเว็บยัดได้เต็มที่ จะเพิ่มcssหรือBoostrapตามสะดวก (ห้ามแก้ในStructure.css)-->
    <main onload='hideTotal()'>
      <form action="" id="comwutform" onsubmit="return false;">
        <div>
          <div class="cont_order">
             <fieldset>
                 <!-- Left Column / product Image -->
                 <div class="row mx-auto text-center">
                   <div class="col-sm">
                    <img data-image="red" class="active" src="Pictures/set1.jpg" alt="set1" width="100" height="100">
                   </div>
                   <!-- Product Description -->
                   <div class="col-sm">
                    <h1>Setcomputer 1</h1>
                     <p>Intel Core i3 2100(3.10GHz)<br>
                         MB : GA H61<br>
                         RAM : DDR3 4GB<br>
                         VGA :GTX750Ti<br>
                     </p>
                     
                   </div>
                  </div>
                  <!--Custom select-->
                  <div class="row">
                    <div class="col-sm-8 mx-auto">
                      <h3>Custom Spec/ปรับแต่งสเปค</h3>
                      <form>
                        <div id="select-cpu">
                          <label>CPU</label>
                          <select id="cpu" name='cpu' onchange="calculateTotal()" class="custom-select">
                            <option selected>Select CPU</option>
                            <option value="I3">Intel Core i3</option>
                            <option value="I5">Intel Core i5</option>
                            <option value="I7">Intel Core i7</option>
                          </select>
                        </div>
                        <div id="select-ram">
                          <label>RAM</label>
                          <select id="mainboard" name='mainboard' class="custom-select" onchange="calculateTotal()">
                            <option value="mainboard">Select mainboard</option>
                            <option value="mainboard1">mainboard1(1500)</option>
                            <option value="mainboard2">mainboard2(1600)</option>
                            <option value="mainboard3">mainboard3(1700)</option>
                          </select>
                        </div>

                        <div id="select-VGA">
                          <label>VGA CARD</label>
                          <select id="card" name='card' class="custom-select" onchange="calculateTotal()">
                            <option value="VGA">Select VGA Card</option>
                            <option value="G1030">GTX 1030(1950)</option>
                            <option value="G1650">GTX 1650(4670)</option>
                            <option value="G1660">GTX 1660(6750)</option>
                          </select>
                        </div>

                        <div id="select-memory">
                          <label>Memory</label>
                          <select id="memory" name='memory' class="custom-select" onchange="calculateTotal()">
                            <option value="memory">Select Memory</option>
                            <option value="DDR48">HyperX FURY DDR4 8GB (8GBx1) 2666 Black(1400)</option>
                            <option value="DDR416">HyperX FURY DDR4 32GB (16GBx2) 3200 Black(5200)</option>
                          </select>
                        </div>

                        <div id="select-harddisk">
                          <label>Memory</label>
                          <select id="harddisk" name='harddisk' class="custom-select" onchange="calculateTotal()">
                            <option value="harddisk">Select harddisk</option>
                            <option value="1TB">1TB (1200)</option>
                            <option value="2TB">2TB (1890)</option>
                          </select>
                        </div>

                        <div id="totalPrice">Total:</div>
                        <button type="submit" class="btn btn-primary" id='submit' value='Submit' onclick="calculateTotal()">SUMMIT</button>
                    </fieldset>
                  
                  
                </div>
                        
                     
                      </form>
                    </div>
                  </div>
              </main>
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