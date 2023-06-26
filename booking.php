<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->
	<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
	<!-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> -->
</head>
<style>
	body {
		background-color: rgb(238 233 233);
	}

	form {
		margin: 0 10px 20px 20px;
	}

	section {
		width: 800px;
		margin: auto;
		border: 5px solid rgba(20, 5, 5, 0.908);
		border-radius: 10px;
		background-color:white ;
		background-size: 100% 50%;
	}
	
	.party-form-wrapper .w3-center .header {
		background-color: rgb(180 173 174);
		padding: 10px;
	}

	h1 {
		text-align: center;
		color: rgb(3, 3, 12);
		font-family: Lucida Handwriting;
		font-size: 35px;
		font-style: italic;
		text-shadow: 1px 1px 2px black, 0 0 25px white, 0 0 5px darkgray;
	}

	p {
		font-size: 16.5px;
		text-color: white;
	}

	.occasion-wrap .w3-container {}

	h5 {
		font-size: 20px;
		font-family: cursive;
	}

	.cost-wrap .w3-container {}

	.occasion-wrap .w3-container ul {
		display: flex;
		list-style-type: none;
		width: 500px;
		flex-wrap: wrap;
		margin-right: 2px;

		.radio {
			width: 150px;
			accent-color: rgb(224 47 83);
		}
	}

	.party-time-wrap .w3-container ul {
		list-style-type: none;
		display: flex;
		margin-left: 0px;

		.radio {
			accent-color: rgb(224 47 83);
		}
	}

	.food-options-wrap .w3-container ul {
		list-style-type: none;
		display: flex;
		margin: 2px;
		padding: 10px;

		.checkbox {
			accent-color: rgb(224 47 83);
		}
	}

	.cost-wrap .w3-container ul {
		list-style-type: none;

		.radio {
			accent-color: rgb(224 47 83);
		}
	}

	.guest-count-wrap .w3-container .row {
		display: flex;

		.input-wrapper {
			width: 200px;
		}

		.form-field {
			width: 60px;
		}
	}

	.tc-wrap .w3-container .checkbox {
			accent-color: rgb(224 47 83);
	}

	.submit-btn {
		text-align: center;
		width: 100%;
		margin: 10px;
		
	}
	.submit-btn button {
		margin: auto;
    border-radius: 10px;
    font-size: 18px;
	}
	.submit-btn button:hover{
		background-color:cadetblue;
	}
	.dropbtn {
  		background-color: #d8135b;
  		color: white;
  		margin-right: 10px;
  		padding: 20px;
  		font-size: 15px;
  		border: none;
  		cursor: pointer;
	}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #fcf9f9;
  width: 350px;
    border-radius: 10px;
    padding: 15px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content .items li{
    min-width: fit-content;
	padding: 5px;
}

.dropdown-content a:hover {background-color: #75d4df}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #1c6871;
}
</style>

<body>
	<section>
		<div class="party-form-wrapper">
			<div class="w3-container w3-center">
				<div class="header">
					<h1>PARTY BOOKINGS</h1>
					<p>Please complete the following information to get the best party quotes.</p>
				</div>
			</div>
		</div>
		<input type="hidden" id="locarea" name="locarea" value="">
		<form action="adddata.php" method="post">
			<div class="bookingBox">
				<div class="row row-wrap">
					<div class="input-wrapper col-md-12">
						<div class="w3-container w3-center">
						</div>
					</div>

					<div class="row-wrap occasion-wrap margin-left">
						<div class="w3-container w3-center">
							<h5>Select Occasion</h5>
							<ul>
								<li>
									<div class="radio">
										<input type="radio" name="occasion" id="birthday" value="Birthday"
											checked="checked">
										<label for="birthday">Birthday</label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input type="radio" name="occasion" id="wedding" value="Wedding">
										<label for="wedding">Wedding</label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input type="radio" name="occasion" id="team" value="Team Party">
										<label for="team">Team Party</label>
									</div>
								</li>
								<li>
									<div class="radio">
										<input type="radio" name="occasion" id="social" value="Social Gathering">
										<label for="social">Social Gathering</label>
									</div>
								</li>
								<li id="othersLink">
									<div class="radio">
										<input type="radio" name="occasion" id="other" value="Others">
										<label for="other">Others</label>
									</div>
								</li>
							</ul>

						</div>

						<div class="row-wrap cost-wrap">
							<div class="w3-container w3-center">
								<h5 class="marginB0">Party Date </h5>
								<div class="row">
									<input type="date" id="partyDate" name="partyDate">
									<br>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row-wrap party-time-wrap">
					<div class="w3-container w3-center">
						<h5>Party Time</h5>
						<ul>
							<li>
								<div class="radio">
									<input type="radio" name="meal" id="lunch" value="Lunch">
									<label for="lunch">Lunch (11:00am - 3:00pm)</label>
								</div>
							</li>
							<li>
								<div class="radio">
									<input type="radio" name="meal" id="dinner" value="Dinner">
									<label for="dinner">Dinner (7:00pm - 11:00pm)</label>
								</div>
							</li>
						</ul>
					</div>
				</div>

				<div class="row-wrap food-options-wrap">
					<div class="w3-container w3-center">
						<h5>Food Options </h5>
						<ul id="foodopt">
							<li>
								<div class="checkbox">
									<input type="checkbox" name="foodOptions[]" id="vegetarian" value="Vegetarian"
										checked="checked" class="foodOptions">
									<label for="vegetarian">Vegetarian</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" name="foodOptions[]" id="n-vegetarian" value="Non Vegetarian"
										class="foodOptions">
									<label for="n-vegetarian">Non-Vegetarian</label>
								</div>
							</li>
							<li>
								<div class="checkbox">
									<input type="checkbox" name="foodOptions[]" id="Coldc-drinks" value="Cold Drink"
										class="foodOptions">
									<label for="n-vegetarian">Cold Drink</label>
								</div>
							</li>
						</ul>
						<div class="error-msg hide" id="foodOptions_err">
							*Please select food options.
						</div>
					</div>
				</div>

				<div class="row-wrap food-options-wrap">
					<div class="w3-container w3-center">
						<h5>Food Options </h5>
						<ul id="foodopt">
							<li>
									<div class="dropdown">
										<button class="dropbtn">Vegetarian</button>
										<div class="dropdown-content">
                                            <input type="checkbox" name="courseList[]" id="Starter" value="Starter">
											  <span class="anchor">Starter</span>
											<ul class="items">
												<li><input type="checkbox" name="vstartar[]" />Dhokala </li>
												<li><input type="checkbox" name="vstartar[]"/>Veg Kabab</li>
												<li><input type="checkbox" name="vstartar[]"/>Veg Cutlet </li>
											  </ul>
                                                <br>
                                              <input type="checkbox" name="courseList[]" id="main-course" value="Main course">
											<span class="anchor">Main course</span>
											<ul class="items">
												<li><input type="checkbox" name="vmainCourse[]"/>PanchPakvan </li>
												<li><input type="checkbox" name="vmainCourse[]"/>PavBhaji</li>
												<li><input type="checkbox" name="vmainCourse[]"/>Indian Thali </li>
											  </ul>
                                              <br>
											  <input type="checkbox" name="courseList[]" id="sweet" value="Sweet">
											  <span class="anchor">Dessert</span>
												<ul class="items">
												<li><input type="checkbox" name="sweet[]"/>Ice-Cream </li>
												<li><input type="checkbox" name="sweet[]"/>Cake</li>
												<li><input type="checkbox" name="sweet[]"/>Shake </li>
											  </ul>
										</div>
									</div>
							</li>
						
							<li>
									<div class="dropdown">
										<button class="dropbtn">Non - Vegetarian</button>
										<div class="dropdown-content">
                                            <input type="checkbox" name="courseList[]" id="startar" value="Startar">
											  <span class="anchor">Startar</span>
											<ul class="items">
												<li><input type="checkbox" name="nvstartar[]" />non-veg cutlet </li>
												<li><input type="checkbox" name="nvstartar[]"/>non-veg kabab</li>
												<li><input type="checkbox" name="nvstartar[]"/>non-veg momos </li>
											  </ul>
                                                <br>
                                              <input type="checkbox" name="courseList[]" id="main-course" value="Main course">
											<span class="anchor">Main course</span>
											<ul class="items">
												<li><input type="checkbox" name="nvmainCourse[]"/>fish-fry </li>
												<li><input type="checkbox" name="nvmainCourse[]"/>Latpat</li>
												<li><input type="checkbox" name="nvmainCourse[]"/>Biryani </li>
											  </ul>
                                              <br>
											  <input type="checkbox" name="courseList[]" id="sweet" value="Sweet">
											  <span class="anchor">Sweet</span>
											  <ul class="items">
												<li><input type="checkbox" name="sweet[]"/>ice-cream </li>
												<li><input type="checkbox" name="sweet[]"/>cake</li>
												<li><input type="checkbox" name="sweet[]"/>Shake </li>
											  </ul>
										</div>
									</div>
									  </div>
									  </div>
								</div>
							</li>
						</ul>
						<!--<div class="error-msg hide" id="foodOptions_err">
							*Please select food options.
						</div>-->
					</div>
				</div>

				<div class="row-wrap guest-count-wrap">
					<div class="w3-container w3-center">
						<h5>Total Guest Count <span class="txt-grey fs12">(Min. 15 guests needed for party
								booking)</span></h5>
						<div class="row">
									<div class="dropdown" >
										<button class="dropbtn">Total Guest</button>
										<div class="dropdown-content" style="width: 100px !important;">
										<a href="#">100</a>
										<a href="#">200</a>
										<a href="#">300</a>
										<a href="#">400</a>
										<a href="#">500</a>
										</div>
									</div>
						</div>
					</>
				</div>
				<div class="row-wrap cost-wrap">
					<div class="w3-container w3-center">
						<h5>Cost per head</h5>
						<ul>


							<li>
								<div class="radio">
									<input type="radio" id="filled-in-box" name="cost" value="50_100">
									  <label for="filled-in-box">
										<i class="fa fa-inr"></i> 50 to <i class="fa fa-inr"></i>100</label><br>
								</div>
							</li>

							<li>
								<div class="radio">
									<input type="radio" id="filled-in-box" name="cost" value="100_150">
									<label for="filled-in-box">
										  <i class="fa fa-inr"></i> 100 to <i class="fa fa-inr"></i> 150</label><br>
								</div>
							</li>

							<li>
								<div class="radio">
									<input type="radio" id="filled-in-box" name="cost" value="150_200">
									<label for="filled-in-box">
										  <i class="fa fa-inr"></i> 150 to <i class="fa fa-inr"></i>200 </label><br>
								</div>
							</li>

							<li>
								<div class="radio">
									<input type="radio" id="filled-in-box" name="cost" value="200_250">
									<label for="filled-in-box">
										  <i class="fa fa-inr"></i> 200 to <i class="fa fa-inr"></i> 250 </label><br>
								</div>
							</li>

							<li>
								<div class="radio">
									<input type="radio" id="filled-in-box" name="cost" value="250_300">
									<label for="filled-in-box">
										  <i class="fa fa-inr"></i> 250 to <i class="fa fa-inr"></i> 300</label><br>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class="row-wrap tc-wrap">
					<div class="w3-container w3-center">
						<h5>Terms &amp; Conditions</h5>
						<div class="tc-details">
							<ol>
								<li>
									The Dineout team will call you to better understand your requirements for the party
								</li>
								<li>
									The final prices quoted by Dineout will be based on the restaurant’s prices and
									policies
								</li>
								<li>
									You may have to pay a token booking amount to finalize your party reservation. This
									amount will be calculated from the final estimate based on the restaurant’s
									policies.
								</li>
								<li>
									Payments made for Party Bookings are non-refundable and non-transferable.
								</li>
								<li>
									In the event of a cancellation (for any reason whatsoever) deposits will not be
									refunded. In certain circumstances, the deposit may be valid if the party gets
									rescheduled at the same venue, but is at the absolute discretion of the restaurant.
								</li>
							</ol>
						</div>
						<div class="checkbox">
							<input type="checkbox" name="tc" id="tc">
							<label for="tc">Accept Terms &amp; Conditions</label>
						</div>
					</div>
				</div>
				<div class="submit-btn">
                <input type="submit" name="submit" id="submit" class="btn btn-primary">
				</div>
			</div>
		</form>
		</div>
	</section>
</body>

</html>