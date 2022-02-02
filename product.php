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
 //require "condb.php";
 $sql2="SELECT * FROM `tb_product`";
    $result2=mysqli_query($con,$sql2);
    $row2=mysqli_fetch_all($result2, MYSQLI_ASSOC);
    mysqli_free_result($result2);

   
    
    ?>
<html>

<body class="w-100 h-100">

    <!--Content เนื้อหาในหน้าเว็บยัดได้เต็มที่ จะเพิ่มcssหรือBoostrapตามสะดวก (ห้ามแก้ในStructure.css)-->
  <main role="main" style="
  background-repeat: no-repeat;
  background-size: cover;
  background-image: -moz-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -ms-linear-gradient(to left, #87CEFA, #CCFFE5);
  background-image: -o-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: -webkit-linear-gradient(to left,  #87CEFA, #CCFFE5);
  background-image: linear-gradient(to left,  #87CEFA, #CCFFE5);">

<?php include 'Carousel.php';?>
     
        <div class="album py-5 " style="font-family: 'Kanit', sans-serif;">
          <div class="container">
            <div class="row">
              
              <?php
               foreach($row2 as $prod)
               {
                 ?>
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <form method="post" action="cart.php?p_id=<?php echo $prod['id_pro']; ?>&act=add">
                  <img src="endv2/admin/image/<?php echo $prod['fileupload'];?>"width="350px" height="400px">
                  <div class="card-body">
                    <p class="card-text"><?php echo $prod['name_pro'];?></p>
                    
                    <p class="card-text">Price = <?php echo $prod['price_pro'];?> บาท</p>                 
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <input type="text" name="quantity" value="1" size="2" /><input type="submit" class ="btn btn-outline-info" value="Add to Cart"/>

                      </div>
                    </div>
                  </div>
                </form>
                </div>
              </div>
              <?php }?>
              
            </div>
            </div>
          </div>
        </div>
      
      </main>
     <?php include 'footer.php';?>
    <!-- Footer -->
  </body>
  </html>