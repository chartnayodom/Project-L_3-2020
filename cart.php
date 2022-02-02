<?php
	session_start();
	require "condb.php";
	
	$id_pro = $_REQUEST['p_id']; 
	$act = $_REQUEST['act'];

	if($act=='add' && !empty($id_pro))
	{
		if(isset($_SESSION['cart'][$id_pro]))
		{
			$_SESSION['cart'][$id_pro]++;
		}
		else
		{
			$_SESSION['cart'][$id_pro]=1;
		}
	}

	if($act=='remove' && !empty($id_pro))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$id_pro]);
	}

	if($act=='update')
	{
		$amount_array = $_POST['amount'];
		foreach($amount_array as $id_pro=>$amount)
		{
			$_SESSION['cart'][$id_pro]=$amount;
		}
    }
    if(isset($_SESSION['ID'])){
        //header("location:main.php");
       include "bartest2.php";
    }
    else{
       include "bartest.php";
   
    }
?>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.bloc_left_price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 150%;
}
.category_block li:hover {
    background-color: #007bff;
}
.category_block li:hover a {
    color: #ffffff;
}
.category_block li a {
    color: #343a40;
}
.add_to_cart_block .price {
    color: #c01508;
    text-align: center;
    font-weight: bold;
    font-size: 200%;
    margin-bottom: 0;
}
.add_to_cart_block .price_discounted {
    color: #343a40;
    text-align: center;
    text-decoration: line-through;
    font-size: 140%;
}
.product_rassurance {
    padding: 10px;
    margin-top: 15px;
    background: #ffffff;
    border: 1px solid #6c757d;
    color: #6c757d;
}
.product_rassurance .list-inline {
    margin-bottom: 0;
    text-transform: uppercase;
    text-align: center;
}
.product_rassurance .list-inline li:hover {
    color: #343a40;
}
.reviews_product .fa-star {
    color: gold;
}
.pagination {
    margin-top: 20px;
}
.context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}

</style>
<!DOCTYPE html>
<html>
<head>

</head>

<body class="w-100 h-100" style="font-family: 'Kanit', sans-serif;">
<!--Navbar เมนูบาร์-->

	<!-------------------------------------------------------------------------------->

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">ตะกร้าสินค้า</h1>
     </div>
</section>

<form id="frmcart" name="frmcart" method="post" action="?act=update">

<div class="container mb-5">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">สินค้า</th>
                            <th scope="col">ราคา</th>
                            <th scope="col">จำนวน</th>
                            <th scope="col" class="text-center">รวม(บาท)</th>
                            <th scope="col" class="text-right"></th>

                        </tr>
                    </thead>

<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	//include("condb.php");
	foreach($_SESSION['cart'] as $id_pro=>$qty)
	{
		$sql = "SELECT * FROM tb_product WHERE id_pro=$id_pro";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query,);
		$sum = $row['price_pro'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row['name_pro'] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row['price_pro'],2) . "</td>";
		echo "<td width='57' align='right'>";  
		echo "<input type='text' name='amount[$id_pro]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='center'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='cart.php?p_id=$id_pro&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>

<tr>
<td><a href="product.php">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
            <div class="row">
            	<div class="col-sm-12 col-md-6 text-right">
                    <p><a class="btn btn-lg btn-block btn-warning text-uppercase" href="#" role="button">ปรับปรุง</a></p>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button type="button" name="Submit2" value="สั่งซื้อ" class="btn btn-lg btn-block btn-info text-uppercase" onclick="window.location='confirm_order.php';" >สั่งซื้อ</button>
                </div>
            </div>
            

</td>
</tr>
</table>
</div>
</div>
</div>
</div>
<div style="padding:100px"></div>
</form>
<?php include 'footer.php';?>
</body>
</html>