<?php 
session_start();
$products = $_SESSION['cart'] ;
// echo "<pre>";
// print_r($products);
// echo "</pre>";

// require_once('data.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	td a{
		padding: 5px 10px;
		background-color: blue;
		color: white;
		text-decoration: none;
	}
	td a:hover{
		color: red;
	}
</style>
<body>
	<h1>CART</h1>
	<a href="allproducts.php">home</a>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">Code</th>
				<th scope="col">Name</th>
				<th scope="col">Prices</th>
				<th scope="col">Quantity</th>
				<th scope="col">Amount</th>
				<th scope="col">Image</th>
				<th scope="col">Action</th>
			</tr>
		</thead>
		<?php 
		$sum = 0;
		foreach ($products as $code => $product){ 
				$sum += $product['quantity']*$product['price'];
			?>
			<tr>
				<td><?=$code?></td>
				<td><?=$product['name']?></td>
				<td><?=number_format($product['price'])?></td>
				<td> 
					<a href="add-to-cart-process.php?code=<?=$code?>">+</a>

					<?=$product['quantity']?>
					
					<a href="remove.php0?code=<?=$code?>">-</a>

				</td>		
				<td><?=number_format($product['quantity']*$product['price'])?></td>		
				<td><img src="<?=$product['image']?>"></td>		
				<td>
					<a href="remove.php?code=<?=$code?>">Remove</a>
				</td>
			</tr>

		<?php } ?>
		<tr>
					<td colspan="4">Tổng Tiền: </td>
					<td colspan="4"><?=number_format($sum)?></td>
			</tr>

	</table>
</body>
</html>