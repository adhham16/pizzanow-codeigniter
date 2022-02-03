<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../../images/favicon.ico" type="image/x-icon" />
  <title>PizzaNow</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
	  #nav{
		  font-family: "Open Sans Semibold" ;
	  }
	  .navbar-brand{
		  font-family: "Berlin Sans FB";
	  }
    footer {
      padding: 25px;
    }
    #container{
	background: url("../../images/pizzalogo.png") ;
	background-color: #BBBBBB;
	height:100%;
	padding:100px;

	}
	#footeradd{
		color:#FFFFFF;
	}
	.cart-container{
		background-color:#FFFFFF;
		height:100%;
		width:90%;
		left:100%;
		padding:40px;

	}
	.image{
		width:20%;
		float: left;
	}
	.media-object{

		border-radius: 5px;
		width:80px;
		height:80px;


	}
	.media-heading{
		padding-left: 15px;
	}

	input[type=text], input[type=email] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;
	}


  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
	<img class="navbar-brand" src="../../images/pizzalogo.png"  width="50" height="100">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/pizzanow1/">PizzaNow</a>

    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-dark navbar-nav  navbar-right" >
        <li class="active" id="nav"><a href="#">Home</a></li>
        <li id="nav"><a href="#">About</a></li>
        <li id="nav"><a href="#">Projects</a></li>
        <li id="nav"><a href="#">Contact</a></li>
      </ul>
	  <ul class="nav navbar-dark navbar-nav ">
		  <a href="/pizzanow1/index.php/pizza/order">	<button class="btn btn-warning navbar-btn" id="nav">Order</button></a>
	  </ul>
    </div>
  </div>
</nav>

<div id="container">

	<div class="cart-container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<table class="table">
					<thead>
						<tr>
							<th>Product</th>
							<th>Quantity</th>
							<th class="text-center">Price</th>
							<th class="text-center">Total</th>
							<th> </th>
						</tr>
					</thead>

					<tbody>

					<?php $subTotal=array(); ?>
					<?php $itemId=count($allItem)-1;$i=0;?>
					<?php while($i<$itemId) :?>
					<?php foreach($allItem as $value):?>


						<form action="/pizzanow1/index.php/pizza/cart" method="post">
						<tr>
							<td class="col-md-6">
							<div class="media">
								<a class="image" href="#"> <img class="media-object" src="../../images/<?php echo $images[$i].".png";?>" > </a>
								<div class="media-body">
									<h4 class="media-heading"><?php echo $value['productName'];?></h4>
									<h5 class="media-heading"> Size: <?php echo $value['productSize'];?></h5>
									<h5 class="media-heading"> Topping: <?php echo $value['productTopping'];?></h5>
								</div>
							</div></td>
							<td class="col-md-1" style="text-align: center">
							<input type="text" class="form-control" id="quantity" value="<?php echo $value['productQuantity'];?>" readonly>
							</td>
							<td class="col-md-1 text-center"><strong>Rs <?php echo $price[$i];?></strong></td>
							<td class="col-md-1 text-center"><strong>Rs <?php $total= $price[$i]*$value['productQuantity'];echo $total;?></strong></td>
							<?php array_push($subTotal,$total);?>
							<?php $i++;?>
							<td class="col-md-1">
								<input type="hidden" name="itemId" value="<?php echo $value['itemId'];?>">
							<button type="submit" class="btn btn-danger">
								<span class="glyphicon glyphicon-remove"></span> Remove
							</button></td>
						</tr>
						</form>
					<?php endforeach;?>
					<?php endwhile;?>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td><h3>Total</h3></td>
							<td class="text-right"><h3><strong>Rs.<?php echo array_sum($subTotal);?></strong></h3></td>
						</tr>
						<tr>
							<td>   </td>
							<td>   </td>
							<td>   </td>
							<td>
							<a href="/pizzanow1/index.php/pizza/order">
							<button type="button" class="btn btn-default">
								<span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
							</button></a></td>
							<td>
							<button type="button" class="btn btn-success"  data-toggle="modal" data-target="#detailsForm"">
								Checkout <span class="glyphicon glyphicon-play"></span>
							</button></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="detailsForm" role="dialog">
	<div class="modal-dialog" role="document">

		<form action="" method="post">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Please Enter yor Details to Complete your Order</h4>
			</div>
			<div class="modal-body">
				<label for="name">Name :</label>
				<input type="text" name="name" required>
				<label for="email">Email :</label>
				<input type="email"  name="email" required>
				<label for="contactNo">Contact No :</label>
				<input type="text"  name="contactNo" required>
				<label for="address">Address :</label>
				<input type="text"  name="address" required>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit"  class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#confirm">
					Order <span class="glyphicon glyphicon-play"></span>
				</button>
			</div>

		</div>
		</form>

	</div>
</div>
<div class="modal fade" id="confirm" role="dialog">
	<div class="modal-dialog" role="document">

			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h3 class="modal-title" style="text-align: center;">Order Summary</h3>

				</div>
				<div class="modal-body">
						<h4>Total Price: Rs.<?php echo array_sum($subTotal);?></h4>
						<h4>Ordered Date & Time:<?php echo date("d/m/Y H:i:s", strtotime("now"));?></h4>
						<h4>Delivery Time:<?php echo date("H:i:s", strtotime("+30 minutes"));?><br></h4>
				</div>
				<div class="modal-footer">
					<h4 style="text-align: left;">Thank for your order! Enjoy Your Meal!</h4>
					<a href="/pizzanow1/"><button type="button" class="btn btn-default" >Close</button></a>
				</div>

			</div>
		</form>

	</div>
</div>





 <footer  style="background-color: #2c292f">
        <div class="container">
                <div class="row">
				 <div class="col-md-4 text-center text-md-left ">

                    <div class="py-0">
                        <img src="../../images/pizzalogo.png" width="200px" height="200px" >
                    </div>
                </div>

                <div class="col-md-4 text-white text-left text-md-left">
                    <div class="py-1 my-4">
                        <div>
                            <p class="text-white" id="footeradd"> <i class="fa fa-map-marker mx-2 "></i>
									PizzaNow,<br>
                                    309 - Rupa Solitaire,<br>
                                   Bldg. No. A - 1,<br> Sector - 1
                                  Mahape, <br>Navi Mumbai - 400710</p>
                        </div>

                        <div>
                            <p id="footeradd"><i class="fa fa-phone  mx-2 "></i> +911 22-27782183</p>
                        </div>
                        <div>
                            <p><i class="fa fa-envelope  mx-2" id="footeradd"></i><a href="mailto:support@pizzanow.com">support@pizzanow.com</a></p>
							<p class="text-light py-4 mb-4" id="footeradd">&copy;2019 PizzaNow Pvt. Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

</body>
</html>
