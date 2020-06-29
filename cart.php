<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body class="container">
	<h5 style="font-size: 30px; color: red;" align="center">weclome for online shopping</h5>
	<div class="row">
	


<?php
$con = mysqli_connect('localhost' ,'root' , '' ,'shoppingfalak');
// if($con)
// {
// 	echo "yes";
// }

$q = "SELECT `id`, `name`, `image`, `price`, `discount` FROM `shoppingcard`  order by id ASC";

$qfire = mysqli_query($con,$q);
$row = mysqli_num_rows($qfire);

if($row > 0)
{		
		while ($product =mysqli_fetch_array($qfire)) {
?>
	<div class="col-lg-3 col-md-3 col-sm-12">
		<form>
			<div class="card">
				<h6 class="card-title bg-info text-white p-2 text-uppercase"><?php echo $product['name']; ?></h6>
				<div class="card-body">
					<img src="<?php echo $product['image']; ?>" alt="phone" class="img-fluid">
					<h6> &#8377; <?php echo $product['price']; ?></h6>
					<span><?php echo $product['discount']; ?>%off</span>
					<h6 class="badge badge-success">4.4<i class="fa fa-star"></i></h6>
					<input type="text" name="" class="form-control" placeholder="quantity">
				
					
				</div>

				<div class="btn-group">
					<button class="btn btn-success flex-fill">Add to cart</button>
					<button class="btn btn-warning flex-fill">buy now</button>
				</div>
				
			</div>
		</form>
	
	</div>
			
<?php		# code...
	}
}
?>
	
</div>
</body>
