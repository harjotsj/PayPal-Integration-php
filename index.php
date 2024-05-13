<?php 
include('header.php');
include('config.php');
$productName = "Demo Product";
$currency = "USD";
$productPrice = 10;
$productId = 123456;
$orderNumber = '000999';
?>
<title>Paypal Express Checkout Integration with PHP</title>
<?php include('container.php');?>
<div class="container">
	<h2>Paypal Express Checkout Demo with PHP</h2>	
	<br>
	<table class="table">
	    <tr>
          <td style="width:150px"><img src="demo_product.png" style="width:50px" /></td>
          <td style="width:150px">$<?php echo $productPrice; ?></td>
          <td style="width:150px">
          <?php include 'paypalCheckout.php'; ?>
          </td>
        </tr>
    </table>	
	<div style="margin:50px 0px 0px 0px;">
				
	</div>
</div>
<?php include('footer.php');?>
