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
  <style class="cp-pen-styles">



#nav{
		  font-family: "Open Sans Semibold" ;
}
.navbar-brand{
		  font-family: "Berlin Sans FB";
}

#container{
	background: url("../../images/pizzalogo.png") ;
	background-color: #484748 ;
	height:100%;
	padding:140px;
	
}
#item-container {
  width: 990px;
  height: 490px;
  margin: 0 auto;
  box-shadow: 5px 5px 20px 0px rgba(0, 0, 0, 0.7);
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  position: relative;
  background: #dadfe1;
  background: -moz-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  background: -webkit-linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  background: linear-gradient(45deg, #dadfe1 0%, #e8edef 30%, #f9feff 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#dadfe1', endColorstr='#f9feff',GradientType=1 );
}

#img-wrap {
  width: 550px;
  height: 70%;
  float: left;
  position: relative;
 
}
#img-wrap .images {
  width: 100%;
  overflow: hidden;
  margin: 300px auto 0 auto;
  padding: 5px;
  -webkit-filter: drop-shadow(#6C7A89);
}
#img-wrap .images li {
  list-style: none;
  width: 33.33%;
  float: left;
  padding: 5px;
  text-align: center;
  cursor: pointer;
}
#img-wrap .images li img {
  width: 100%;
  
}
#big-img{
	max-height:200px;
}
#img-wrap .images .big-img {
	
  width: 70%;
  float: none;
  padding: 0;
  margin: 0 12.5%;
  text-align: center;
  opacity: 1;
  position: absolute;
  top: -50px;
  left: 0;
}
#img-wrap .images .big-img img {
  -webkit-filter: drop-shadow(0px 7px 3px #6C7A89);
  filter: drop-shadow(0px 7px 3px #6C7A89);
}
#small{
	background-color:transparent;
}
.colors {
  width: 125px;
  margin: 20px auto;
}
.colors li{
  width: 25px;
  height: 25px;
  margin-right: 25px;
  list-style: none;
  float: left;
  background: #F3C9BF;
  cursor: pointer;
  position: relative;
  position: relative;
  opacity: 0.7;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  -ms-border-radius: 100%;
  border-radius: 100%;
  -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
  -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.3);
}

.colors li:hover, .colors li.target{
  opacity: 1;
  -webkit-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
  -moz-box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
  box-shadow: 0px 1px 4px 0px rgba(0, 0, 0, 0.5);
}

.info {
  width: 440px;
  height: 100%;
  float: right;
  padding: 20px 50px 50px 50px;
  background-color:#F84A5D;
  background-opacity:0.57;
  background-position: 80% 0%;
  background-size: 65%;
}
.info h1 {
  font-size: 1.8em;
  font-weight: 400;
  float: left;
  text-transform: uppercase;
  letter-spacing: 2px;
  color:white;
  font-family:Arial Bold;
}
.info h2 {
  font-size: 1em;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  padding: 5px 0 20px 0;
  float: left;
  color:white;
}
.info p {
  clear: both;
  margin-bottom: 7px;
  line-height: 1.2em;
  font-size: 1.4em;
  letter-spacing: 0.5px;
  color: #E8DFE0;
  font-family:Helvetica Neue;
}
.info #coloring,#sizing {
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 1em;
  color: #E8DFE0 ;
}
.info #price {
  text-transform: capitalize;
  float: none;
}
#sizePrice{
	font-size: 1.2em;
	font-weight: 400;
	letter-spacing: 2px;
	color:#E8DFE0;
	font-family:Cambria;
	text-align: left;
}

.important {
  width: 50%;
  float: left;
  margin-top: 15px;
}
.quantiy-div {
  width: 30%;
  float: left;
  margin-top: 15px;
}

.form {
  width: 50%;
  float: right;
  margin-top: 15px;
}
.addcart-div {
  width: 70%;
  float: right;
  margin-top: 15px;
}
.form .color, .size{
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0 20px;
  width: 95%;
  height: 40px;
  border: none;
  background: #F8F5F5 ;
  font-size: 1em;
  letter-spacing: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  color: grey;
  cursor: pointer;
  font-weight: 400;
}
.quantity{
	-webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 20px;
  width: 80%;
  border: none;
  background: #F8F5F5 ;
  font-size: 1em;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  color: grey;
  cursor: pointer;
  font-weight: 100;
}
.form .color:hover, .size:hover {
  background: #efb7b7;
}

#add-cart{
  width: 100%;
  margin-top: 10px;
  border: none;
  background: #1abc9c;
  padding: 20px;
  font-size: 1.1em;
  line-height: 1.1em;
  letter-spacing: 1px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  color: #F2F2F2;
  cursor: pointer;
}
#add-cart:hover {
  background: #16a085;
}
@media screen and (max-width: 1440px) {
  #wrapper {
    transform: scale(0.7);
  }
}
#footer{
	height:250px;
	background-color: #2c292f;
	padding: 25px;
}
#footeradd{
		color:#FFFFFF;
	}
	
  </style>
</head>
<body>

<nav class="navbar navbar-inverse  navbar-fixed-top">
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
      <button class="btn btn-warning navbar-btn">Order</button>
	  </ul>
    </div>
  </div>
</nav>


<div id="container">
<div id="item-container">
	<?php if(!empty($data)):?>
    <div id="img-wrap">
      
      <ul class="images">
        <li class="big-img">
          <img src="../../images/pizza1.png" id="big-img	">
        </li>
        <li>
          <img src="../../images/pizza1.png" id="small">
        </li>
        <li>
          <img src="../../images/pizza1.png"id="small">
        </li>
        <li>
          <img src="../../images/pizza1.png" id="small">
        </li>
      </ul>
      
    </div>
    
    <div class="info">
      <form action="/pizzanow/pizza/cart" method="post">
      <h1><?php echo $data['name']?></h1>
		  <input type="hidden" name="prodName" value="<?php echo $data['name']?>">
		  <input type="hidden" name="id" value="<?php echo $data['id']?>">
		  <input type="hidden" name="prodtype" value="pizza">
      <p><?php echo $data['description'] ?></p>
	   <h1 id="price">Starting From Rs.<?php echo $data['price']?><br></h1>
		  <?php foreach ($size as $size):?>
		  <h4 id="sizePrice"><?php echo $size['size'].": "."Rs.".$size['price']?></h4>
		  <?php endforeach;?>
		  <h6>*Only 1 extra toppings is allowed for this item.</h6>
      <div class="important">
        <p id="sizing">Choose size</p>
	   <select class="size" name="size" required>
          <option value="large">Large</option>
          <option value="medium">Medium</option>
          <option value="small">Small</option>
        </select>
      </div>
      
      
      <div class="form">
        <p id="coloring">Choose toppings</p>
        <select class="color" name="topping">
		  <option value="none">None</option>
          <option value="Onion">Onion</option>
		  <option value="Sausages">Sausages</option>
		  <option value="BBQ">BBQ</option>
        </select>
      </div>
	  <div class="quantiy-div">
        <p id="sizing"></p>
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
	   <div class="addcart-div">
        <button id="add-cart" type="submit" value="submit">Add to cart</button>
      </div>
	  </form>
      
    </div>
	<?php endif ?>
	<?php if(empty($data)){
		echo "No details  available";
	}?>
    <?php
	if(isset($_POST['submit'])){
		$_SESSION['cart']=array(
				'id'=>$_POST['id'],
				'size'=>$_POST['size'],
				'quantity'=>$_POST['quantity']
		);
	}
	?>
</div>
</div>



 <footer  id="footer">
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
