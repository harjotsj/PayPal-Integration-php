<?php 
include('header.php');
?>
<title>Paypal Express Checkout Integration with PHP</title>
<?php include('container.php');?>
<div class="container">
	<h2>Paypal Express Checkout Demo with PHP</h2>	
	<?php 
	$orderNumber = '000999';
	if(!empty($_GET['paymentID']) && !empty($_GET['payerID']) && !empty($_GET['token']) && !empty($_GET['pid']) ){
		$paymentID = $_GET['paymentID'];
		$payerID = $_GET['payerID'];
		$token = $_GET['token'];
		$pid = $_GET['pid'];   
		?>
		<div class="alert alert-success">
		  <strong>Success!</strong> Your order processed successfully.
		</div>
		<table>       
			<tr>
			  <td>Payment Id:  <?php echo $paymentID; ?></td>
			  <td>Payer Id: <?php echo $payerID; ?></td>
			  <td>product Id: <?php echo $pid; ?></td>
			  <td><?php echo ; ?></td>
			</tr>       
		</table>
	<?php	
	} else {
		header('Location:index.php');
	}
	?>
	<div style="margin:50px 0px 0px 0px;">
		</div>
</div>
<?php include('footer.php');?>