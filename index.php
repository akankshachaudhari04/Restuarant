<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
*{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}
nav{
	width: 100%;
	height: 8%;
	line-height: 75%;
	padding: 0px 100px;
	position: fixed;
	background-color:gray;
}
nav .logo p{
	 font-size: 30px;
	 font-weight: bold;
	 float: left;
	 color: white;
	 text-transform: uppercase;
	 letter-spacing: 1.5px;
	 cursor: pointer;
	 padding-top: 20px;
}
nav ul{
	float: right;
}
nav li {
	display: inline-block;
	list-style: none;
	padding-top: 20px;
}
nav li a{
	font-size: 18px;
	text-transform: uppercase;
	padding: 0px 30px;
	color: white;
	text-decoration: none;
}
nav li a:hover{
	color: black;
	transition: all 0.4s ease 0s;
} 

.top{
	font-size: 60px;
	font-weight:bold;
	color: black;
	text-decoration: none;
	position: absolute;
	top:350px;
	left:380px;
	padding-right: 0px;
	padding-left: 10px;
}



.centered{
	font-size: 30px;
	font-weight:bold;
	text-transform: uppercase;
	color: black;
	text-decoration: none;
	position: absolute;
	top:300px;
	left:440px;
	padding-right: 0px;
	padding-left: 10px;
}
    
</style>

<body>

            <nav>
                <div class="logo">
                    <p>restaurant</p>
                </div>
                <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Menu.php">MENU</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booking.php">BOOKING</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="rule.php">RULE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="rating.php">RATING</a>
      </li>
        
      </li>
    </ul>
            </nav>
             <div class="Content-items">
                <img src="https://images.squarespace-cdn.com/content/v1/5913aca79f7456878ba347d8/1510954838436-01P1CNWQNJKKFTPPM1IZ/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/The+Silver+Palace+Reception+Hall+La+Porte+Indiana"width="1535" height="710">

                <div class="centered">Welcome to Our Restaurant</div>
                <div class="top">Amazing & Delicious Food</div>
            </div>
            
</body>

</html>