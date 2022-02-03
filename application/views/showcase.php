<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
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
#container{
	background: url("../../images/pizzalogo.png");
	background-color: #BBBBBB;
	height:100%;
	padding:100px;
	
} 
    /* Add a gray background color and some padding to the footer */
    footer {
      padding: 25px;
    }
    
	#footeradd{
		color:#FFFFFF;
	}

body {

    background-color: #eee
}
#product-container{
	
	padding: 15px;
}
.product {
    box-shadow: 5px 10px 20px grey;
    background-color: #fff;
    position: relative;
	border-radius: 2%;
}
#product-img{
	width:360px;
	height:330px;
	border-color: #FFFFFF;
	border-radius: 2% 2% 0 0;
}
#product-des{
	padding:15px;
}
.about h4 {
    margin-bottom: -3px
}

#price {
    color: #4F4F4F
	font-family: Lato;
}

.about span {
    font-size: 13px
}
#name{
	padding-bottom: 10px;
	font-family: "Roboto Slab";
	font-size: 30px;
}
   .nav-tabs
   {
	   border-color:#FFFFFF;
	   width:100%;
   }

   .nav-tabs > li a {
	   /*border: 1px solid #004A00;*/
	   background-color:#FFFFFF;
	   color:dimgrey;
	   font-size:1.2em;
	   font-family: "Sitka Heading";
   }
   .nav-tabs > li.active > a,
   .nav-tabs > li.active > a:focus,
   .nav-tabs > li.active > a:hover{
	   background-color: #FF4040 ;
	   color:floralwhite;
   }

   .nav-tabs > li > a:hover{
	   background-color:#FF3C3C;
   border-radius: 5px;
	   color:#FFFFFF;

   }

   .dot {
    height: 60px;
    width: 180px;
    background-color:#696969;
    border-radius: 5%;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    cursor: pointer;
    right: 10%;
    z-index: 10;
    bottom: -5%
}
.text-muted{
	padding-top: 10px;
	font-family: "Roboto Slab";
	font-color:#4F4F4F

}

.inner-dot {
    height: 50px;
    width: 170px;
    background-color: #4F4F4F ;
    border-radius: 5%;
    display: inline-block;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    cursor: pointer

}
#customise{
	font-family: "Century Gothic";
	font-weight: bold;
	color: #FFFFFF;
}
.quantity{
	padding: 3%;
	   width: 20%;
	   border: none;
	   background: gainsboro;
	   border-radius: 5px;
	   color: darkslategray;
	   cursor: pointer;
	   font-weight: 100;
}
	
 
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
		<a href="/pizzanow/"><img class="navbar-brand" src="../images/pizzalogo.png"  width="50" height="100"></a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/pizzanow/">PizzaNow</a>
	   
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-dark navbar-nav  navbar-right">
        <li id="nav"><a href="#">Home</a></li>
        <li id="nav"><a href="#">About</a></li>
        <li id="nav"><a href="#">Projects</a></li>
        <li id="nav"><a href="#">Contact</a></li>
      </ul>
	  <ul class="nav navbar-dark navbar-nav ">
		  <a href="/pizzanow/pizza/cart"><button class="btn btn-warning navbar-btn"><span class="glyphicon glyphicon-shopping-cart"></span>  Cart</button></a>
	  </ul>
    </div>
  </div>
</nav>




<div id="container">
	<ul class="nav nav-tabs" role="tablist" >
		<li class="active"><a href="#pizza" role="tab" data-toggle="tab">Pizza</a></li>
		<li ><a href="#sides" role="tab" data-toggle="tab">Sides</a></li>
		<li><a href="#combines" role="tab" data-toggle="tab">Combines</a></li>
	</ul>
	<div class="tab-content">
	<div class="tab-pane active" id="pizza">
	<div class="container mt-5">
		<div class="row d-flex justify-content-center g-1">
			<?php foreach($pizza as $dataitem):?>
			<div class="col-md-4" id="product-container">
				<div class="product text-center">
					<form action="/pizzanow/pizza/viewitem" method="post">
						<input type="hidden" name="id" value="<?php echo $dataitem['id'];?>">
						<button type="submit" id="product-img" style="background:url(../images/<?php echo $dataitem['image'].'.png';?>);"></button>
					<div class="about text-left px-3" id="product-des">
						<h4 id="name"><?php echo $dataitem['name'];?></h4> <span class="text-muted"><h4>Sizes: <?php echo $dataitem['size'];?></h4></span>
						<h3 id="price">Rs.<?php echo $dataitem['price'].".00";?></h3>
					</div>
					<button type="submit"><span class="dot"><span class="inner-dot"><h4 id="customise">Customize Now</h4></span></span></button>
					</form>
				</div>
			</div>
			<?php endforeach;?>
		</div>
	</div>
	</div>

	<div class="tab-pane" id="sides">
		<div class="container mt-5">
			<div class="row d-flex justify-content-center g-1">
				<?php foreach($sides as $dataitem1):?>
					<div class="col-md-4" id="product-container">
						<div class="product text-center">
							<form action="/pizzanow/pizza/cart" method="post">
								<input type="hidden" name="id" value="<?php echo $dataitem1['id'];?>">
								<input type="hidden" name="name" value="<?php echo $dataitem1['name'];?>">
								<input type="hidden" name="type" value="sides">
								<button type="submit" id="product-img" style="background:url(../../images/<?php echo $dataitem1['image'].'.jpg';?>);"></button>
								<div class="about text-left px-3" id="product-des">
									<h4 id="name"><?php echo $dataitem1['name'];?></h4> <span class="text-muted"><h4><?php echo $dataitem1['description'];?></h4></span>
									<h3 id="price">Rs.<?php echo $dataitem1['price'].".00";?></h3>
									<select class="quantity" name="quantity">
										<?php
										for ($i=1; $i<=10; $i++)
										{
											?>
											<option value="<?php echo $i;?>"><?php echo $i;?></option>
											<?php
										}
										?>
									</select>
								</div>

								<button type="submit"><span class="dot"><span class="inner-dot"><h4 id="customise">Add to <cart>					</cart></h4></span></span></button>
							</form>
						</div>
					</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>

		<div class="tab-pane" id="combines">
			<div class="container mt-5">
				<div class="row d-flex justify-content-center g-1">
					<?php foreach($combines as $dataitem2):?>
						<div class="col-md-4" id="product-container">
							<div class="product text-center">
								<form action="/pizzanow/pizza/cart" method="post">
									<input type="hidden" name="id" value="<?php echo $dataitem2['id'];?>">
									<input type="hidden" name="name" value="<?php echo $dataitem2['name'];?>">
									<input type="hidden" name="type" value="combines">
									<button type="submit" id="product-img" style="background:url(../../images/<?php echo $dataitem2['image'].'.jpg';?>);"></button>
									<div class="about text-left px-3" id="product-des">
										<h4 id="name"><?php echo $dataitem2['name'];?></h4> <span class="text-muted"><h4><?php echo $dataitem2['description'];?></h4></span>
										<h3 id="price">Rs.<?php echo $dataitem2['price'].".00";?></h3>
										<select class="quantity" name="quantity">
											<?php
											for ($i=1; $i<=10; $i++)
											{
												?>
												<option value="<?php echo $i;?>"><?php echo $i;?></option>
												<?php
											}
											?>
										</select>
									</div>
									<button type="submit"><span class="dot"><span class="inner-dot"><h4 id="customise">Add to cart</h4></span></span></button>
								</form>
							</div>
						</div>
					<?php endforeach;?>
				</div>
			</div>
		</div>

	</div>


</div>






 <footer  style="background-color: #2c292f">
        <div class="container">
                <div class="row">
				 <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <img src="../images/pizzalogo.png" width="200px" height="200px" >
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
