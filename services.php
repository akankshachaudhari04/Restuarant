<html lang="en">
<head>
	<title>Royal Palace</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
	<meta name="description" content=""/>
	<meta name="author" content=""/>
	  
	  <!--botstrap-->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <!--jquery-->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--Favicon-->
	  <link rel="icon" type="iamge/x-icon" href="assets/favicon.ico"/>
	  <!--Bootstrap icons-->
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Google fonts-->
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com"><link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

	 <link rel="preconnect" href="https://fonts.googleapis.com">
	 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Sigmar&display=swap" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300;1,400;1,700&display=swap" rel="stylesheet">

     <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;1,300;1,400;1,700&display=swap" rel="stylesheet">
		<!--Core theme CSS(includes Bootstarp)-->
		<link href="css/style.css" rel="stylesheet"/>
		
		
		<style>
		*{
			margin:0;
			padding:0;
		}
		
		html{
			scroll-behavior: smooth;
			}
		:root{
			--navbar-height:59px;
			}
		#navbar{
			display: flex;
			align-item: center;
			position: relative;
			top: 0px;
			background: url('https://images.pexels.com/photos/1838640/pexels-photo-1838640.jpeg?auto=compress&cs=tinysrgb&w=1600')
			
			}
			
		#navbar::before{
			content: "";
			background-color: black;
			position: absolute;
			top: 0px;
			left: 0px;
			height: 70%
			width: 100%;
			
			z-index: -1;
			opacity:0.4;
			}
		#logo{
		}
		#logo img{
			height: 100px;
			margin: 3px 6px;
			}
		
		#navbar ul{
			display: flex;
			}
			
		#navbar ul li{
			list-style: none;
			font-size: 1.3rem;
			font-family: 'Oswald', sans-serif;
			}
			#navbar ul li a{
			color: white;
			display: block;
			padding: 3px 22px;
			border-radius: 20px;
			text-decoration: none;
			}
			
		#navbar ul li a:hover{
			color: black;
			background-color: white;
			}
			
		#head_css{
				height:150px;
				background-color:#E6E6FA;
			
				}
		
		#services{
			margin: 34px;
			display: flex;
			align-item: center;
						}
		
		#services-container h{
			text-align: center;
			font-family: 'Dancing Script', cursive;
			}
		#services-container h{
			text-align: center;
			font-family: 'Dancing Script', cursive;
			
				
			}
			
		#services-container p{
			color:black;
			text-align: center;
			font-family: 'Bree Serif',serif;
			
			}
		
		#services .box{
			border: 2px solid brown;
			border: 2px solid brown;
			padding: 20px 30px;
			margin: 4px 6px;
			border-radius:29px;
			beckground: #f2f2f2;
			
			}
			
		#services .box img{
				height: 160px;
				height: 160px;
				margin: auto;
				display: block;
				transition: 0.3% ease;
			}
			
		#services .box img:hover{
			transform: scale(1.04);
				
			}	
		#services .box p{
			font-family: 'Bree Serif',serif;
			font-size: 18spx;
			text-align: center;
			
			}
		#services .box:hover{
			background: #FFDEAD;
			cursor: pointer;
			}
			
		#services .box h2{
			
			text-align: center;
			font-family: 'Dancing Script', cursive;
			font-weight: bold;
			color:#A52A2A;
			line-height: 22px;
			fon-size: 70px;
			
			}
		#container .h5{
			text-align: center;
			font-family: my boli;
			line-height: 22px;
			fon-size: 70px;
			}
			
		.h-primary{
				font-size: 3.5rem;
				padding: 12px;
				text-align:center;
				font-family: 'Oswald', sans-serif;
				color: #000000;
				font-weight: bold;
			
				}
				
		.s-primary{
				font-size: 3.5rem;
				padding: 12px;
				text-align:center;
				font-family: Franklin Gothic Medium;
				color: #FFA500;
				font-weight: bold;
				}
				
		.services-con{
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(240px, auto));
			grid-gap: 1.5rem;
			margin-top: 4rem;
			}
		.s-box{
			text-align: center;
			padding: 20px 30px;
			background-color:#E6E6FA;
			}
		.s-box img{
			width: 90px;
			}
		.s-box h3{
			margin: 4px 0 10px;
			color: var(--main-color);
			font-size: 1.2rem;
			}
		.s-box img:hover{
			transform: scale(1.04);
		}
		.s-box:hover{
			transform: scale(1.04);
			}
		.s-box p{
			line-height: 1.7;
			font-size: 18px;

			}
		.s-box h3{
			text-align: center;
			font-family: 'Oswald', sans-serif;
			font-size: 3rem;
			font-weight: bold;
			color:#A52A2A;
			line-height: 22px;
			fon-size: 100px;
			}
			
		.cta{
			
			padding: 70px 0;
			text-align: center;
			height: 200%;
			width: 66%;
			margin: 100px auto;
			color:white;
			font-weight: bold;
			border-radius: 10px;
			background: url('https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&w=500');
			}
		
		.cta h2{
			font-size: 3rem;
			font-family: 'Dancing Script', cursive;
			color: var(--bg-color);
			margin-bottom: 30px;
			}
		.cta h2:hover{
			transform: scale(1.04);
			}
		.heading{
			text-align: center;
			font-family: 'Dancing Script', cursive;
			color: #FFA500;
			}
			
	</style>
</head>
<body>
		<section id="services-container">
		<header id="head_css" class="masthead">
		<h1 class="h-primary">Welcome to Silver Palace Services</h1>
		<p>Silver Palace is the best solution of your family for the enjoy your day</p>
		<p>Visit Our Hotel and enjoy our Services with your Family</p>
		<h1 class="s-primary center">Our Services</h1>
		<div id="services">
			<div class="box">
				<img src="https://tse2.mm.bing.net/th?id=OIP.X_nFfc10BfOO2nN7xb6eHAHaE7&pid=Api&P=0"alt"">
				<h2 class="h-secondary center">Food Catering</h2>
				<p class="center">It provide some really amazing food in quite affortable price.</p>
			</div>
			
			<div class="box">
				<img src="https://tse1.mm.bing.net/th?id=OIP.U8SLjsryZA9Yqb8mmZ_GIAHaEn&pid=Api&P=0">
				<h2 class="h-secondary center">Logging</h2>
				<p class="center">Here we provide logging also. please visit our hotel and enjoy it</p>
			</div>
			
			<div class="box">
				<img src="https://images.pexels.com/photos/1189261/pexels-photo-1189261.jpeg?auto=compress&cs=tinysrgb&w=1600">
				<h2 class="h-secondary center">Drinks</h2>
				<p class="center">Here we provide logging also. please visit our hotel and enjoy it</p>
			</div>
			
			<div class="box">
				<img src="https://tse2.mm.bing.net/th?id=OIP.AK6vbQp6KctnzvpLRvgnjQHaE8&pid=Api&P=0"alt"">
				<h2 class="h-secondary center">Room Servicing</h2>
				<p class="center"> Our hotel provides you all type of Services such as all time Room service.</p>
			</div>
		</div>
		
		<div class="heading">
			
			<h2>We provide best quality food</h2>
		</div>
		
		<div class="services-con">
			<div class="s-box">
				<img src="https://img.icons8.com/?size=512&id=12143&format=png">
				<h3>Order</h3>
				<p> Your Favorite Food delivery Partner.
					Directly to your doorstep. Good food within mimutes.
				</p>
			</div>
			<div class="s-box">
				<img src="https://img.freepik.com/free-vector/contactless-delivery-during-covid-19-outbreak_53876-116584.jpg?size=626&ext=jpg&ga=GA1.2.352701513.1682254812&semt=ais">
				<h3>Shipping</h3>
				<p>We set the standard. We are always one step ahead of the competition when it comes to shipping.</p>
			</div>
			<div class="s-box">
				<img src="https://cdn1.iconfinder.com/data/icons/business-line-filled-rui/660/Hand_Over_Package_Delivery_hand_package-512.png">
				<h3>Delivered</h3>
				<p>We care, We listen, We deliver.
					Up all night, for you. Go for the impossible .
				</p>
			</div>
		</div>
		
		<div class="cta">
			<h2>We make quality food<br> Everyday</h2>
			<a href="#" class="btn">Let's talk</a>
		</div>
		</header>
		</section>
	</body>
</html>