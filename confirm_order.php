<?php

  require "condb.php";
  session_start();
  $name = $_SESSION['name'];
  if(!isset($_SESSION['ID'])){
    
      header("location:login.php");
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
  if(isset($_SESSION['ID'])){
    //header("location:main.php");
   include "bartest2.php";
}
else{
   include "bartest.php";

}
?>
<style>
.bgboom {
  margin: center;
}
</style>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<!--Navbar เมนูบาร์-->

<!------------------------------------------------------------------------------------------------------------------------------------>
<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">ยื่นยันคำสั่งซื้อ</h1>
     </div>
</section>

  <div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive" style="background-color :#F0F8FF">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">สินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col" class="text-center">รวม/รายการ</th>

                        </tr>
                    </thead>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $id_pro=>$qty)
	{
		$sql3	= "SELECT * FROM tb_product WHERE id_pro=$id_pro";
		$query3	= mysqli_query($con, $sql3);
		$row3	= mysqli_fetch_array($query3);
		$sum	= $row3['price_pro']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row3['name_pro'] . "</td>";
    echo "<td align='right'>" .number_format($row3['price_pro'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#87CEFA'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#ADD8E6'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
                  <div class="bgboom w-100 h-100"  style="background-color :#F0F8FF">
                      <div class="row mx-5 a-flex justify-content-center">
                          <div class="col-md-6">
                              <div class="container m-3 bg-light" style="height:400px ;  border-radius: 20px">
                                <h2>รายละเอียดในการติดต่อ</h2>

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="tel">ชื่อ</label>
                                            <input name="name" type="text" id="name" value="<?php echo $firstname;?> <?php echo $lastname;?> "required/>
                                          </div>
                                       </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="tel">ที่อยู่</label>
                                            <input name="address" style="height:100px"cols="35" rows="5" id="address" value="<?php echo $Address;?> <?php echo $post;?>" required></input>
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="tel">อีเมล</label>
                                            <input name="email" type="email" id="email" value="<?php echo $email;?>"  required/>  
                                        </div>
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="tel">เบอร์ติดต่อ</label>
                                            <input name="phone" type="text" id="phone"  value="<?php echo $phone;?>" required />
                                        </div>
                                      </div>
                                      <button class="btn btn-lg btn-block btn-info text-uppercase" type="submit" name="Submit2" value="<?php echo$total;?>">สั่งซื้อ</button>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

</form>
</body>
</html>