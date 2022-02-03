<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
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
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
	}
	#indexpic.carousel-caption {
    color: gray;
    right: 70.5%;
    text-align: center;
    max-width: 500px;
    left: auto;
    top: 75%;
	}
	#indexpic.btn {
	  background-color: Transparent ;
	  border: 2px solid #BDBEBE ;
	  color: #BDBEBE ;
	  padding: 16px 32px;
	  text-align: center;
	  font-size: 16px;
	  margin: 4px 2px;
	  opacity: 90%;
	  transition: 0.3s;
	}
	#indexpic.btn:hover {
	  background-color: #FFFFFF ;
	  color: #949494;
	}
	#indexpic2.carousel-caption {
    color: gray;
    right: 81.5%;
    text-align: center;
    max-width: 500px;
    left: auto;
    top: 77%;
	}
	#indexpic2.btn {
	  background-color: Transparent ;
	  border: 4px solid #BDBEBE ;
	  color: #BDBEBE;
	  padding: 16px 32px;
	  text-align: center;
	  font-size: 16px;
	  margin: 4px 2px;
	  opacity: 90%;
	  transition: 0.3s;
	}
	#indexpic2.btn:hover {
	  background-color: #FFFFFF ;
	  color: #949494;
	}
	#footeradd{
		color:#FFFFFF;
	}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header ">
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
		  <a href="/pizzanow/pizza/order"><button class="btn btn-warning navbar-btn">Order</button></a>
	  </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner" role="listbox">
    <div class="item">
      <img src="./images/indexpic.png" alt="New York" >
      <div class="carousel-caption" id="indexpic" >
		  <a href="/pizzanow/pizza/order"><button class="btn btn-default" id="indexpic2">Order Your Pizza</button></a>
      </div>
    </div>

    <div class="item active">
      <img src="./images/indexpic2.png" alt="Chicago">
      <div class="carousel-caption" id="indexpic2">
       <a href="/pizzanow/pizza/order"><button class="btn btn-default" id="indexpic2">Order Your Piece</button></a>
      </div>
    </div>


</div>

	
 <footer  style="background-color: #2c292f">
        <div class="container">
                <div class="row">
				 <div class="col-md-4 text-center text-md-left ">
                    
                    <div class="py-0">
                        <img src="./images/pizzalogo.png" width="200px" height="200px" >
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
