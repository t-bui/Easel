<?php
include_once("connection.php");
session_start();

 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sign up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
            <div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
                                                                <li><a href="login.php">Login</a></li>
								<li><a href="signup.php">Sign up</a></li>
							</ul>
						</nav>

				</div>
            </div>

			<!-- Main -->
             <div class="wrapper style1">
                <div class="container">
                    <article id="main" class="special">
                     <div class ="header_title">
			<h2><a href="#">Sign up</a></h2>
								
                        <h5>Join the coolest place to buy and sell art.</h5>
                     </div>
                                                            
                    
                         
           <!--  </div>-->
        <div class="col-lg-8 well">
            <div class="row">
                <form id="main-form" action="submit.php" method="post" onsubmit="return check_form();">
                    <br><br>    
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label> 
                                <input type="text" name='first-name' id='first-name' onfocus="clearInput('first-name')" placeholder="First Name"  pattern="[a-zA-z]{1,35}$" class="form-control" required title="no numbers or special characters">                       
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" name='last-name' id='last-name' onfocus="clearInput('last-name')" placeholder="Last Name" pattern="[a-zA-z]{1,35}$" class="form-control" required title = "no numbers or special characters">
                            </div>
                        </div>
                    
                    <br>
                    
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name='email' id='email' onfocus="clearInput('email')" placeholder="Email Address" pattern="[a-zA-z0-9._%+-]+@[a-zA-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required title = "characters@characters.domain">
                        </div>

                    <br>
                    
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name='address' id='address' onfocus = "clearInput('address')" placeholder="Address" class="form-control" required>
                        </div>	
                    
                    <br>
                    
                    <div class="row">
                        <div class="col-sm-4 form-group">
                            <label>City</label>
                            <input type="text" placeholder="City Name" onfocus = "clearInput('city')" name="city" id="city" pattern="[a-zA-z]{1,35}$" class="form-control" required title ="no numbers or special characters">
                        </div>	
                        <div class="col-sm-4 form-group">
                            <label>State</label>
                            <select form="main-form" class='form-control' id="state" name="state" required>
                                <option value="">N/A</option>
                                <option value="AK">Alaska</option>
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="AZ">Arizona</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DC">District of Columbia</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="IA">Iowa</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MD">Maryland</option>
                                <option value="ME">Maine</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MO">Missouri</option>
                                <option value="MS">Mississippi</option>
                                <option value="MT">Montana</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="NE">Nebraska</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NV">Nevada</option>
                                <option value="NY">New York</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VA">Virginia</option>
                                <option value="VT">Vermont</option>
                                <option value="WA">Washington</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WV">West Virginia</option>
                                <option value="WY">Wyoming</option>
                            </select>
                            <!--<input type="text" placeholder="Enter State Name Here.." class="form-control"> -->
                        </div>	
                        <div class="col-sm-4 form-group">
                            <label>Zip</label>
                            <input type="text" name="zip-code" id="zip-code" onfocus = "clearInput('zip-code')" placeholder="Zip Code" pattern="[0-9]{5,5}" class="form-control" required title="5 numbers">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Area Code</label>
                            <input type="text" name="area-code" id="area-code" onfocus = "clearInput('area-code')" placeholder="XXX" pattern="[0-9]{3,3}" class="form-control" required title="3 numbers">
                        </div>
                        <div class="col-sm-4 form-group">
                            <label>Number (No-hyphen)</label>
                            <input type="text" name="telephone" id="telephone" onfocus = "clearInput('telephone')" placeholder="XXXXXXX" pattern="[0-9]{7,7}" class="form-control" required title="7 numbers">
                        </div>	
                    </div>
                    
                    <br>
                    
                    <div class="form-group">
                        <label>Password <small id="passwordHelpInline" class="text-muted">
                            (must be 8-20 characters long)
                        </small></label>
                        
                        <input type="password" name = "password" onfocus = "clearInput('password')" data-minlength="8" id = "password" placeholder="Password" class="form-control" pattern=".{8,20}" required title="8-20 characters">
                    </div>
                    
                    <br>
                    
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" name = "password2" id = "password2" onfocus = "clearInput('password2')" data-data="#password" placeholder="Confirm Password" class="form-control" onkeyup="checkPasswordMatch(); return false;" required>
                    </div> 
                    
                    <br> 
                        <button style="float:right; margin-right: 25px;" type="submit" class="btn btn-lg btn-info">Sign Up</button>
                                
                    </article> 
                </form>
            </div>
        </div>
                      
    </div>
                                        
                                
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			
                        
                <script>
                function checkPasswordMatch() {
                    var password = document.getElementById("password");
                    var confirmPass = document.getElementById("password2");
                    var match = "#66cc66";
                    var noMatch = "#ff6666";
                    if (password.value !== confirmPass.value) {
                        document.getElementById("password2").style.backgroundColor = noMatch;
                    } else {
                        document.getElementById("password2").style.backgroundColor = match;
                    }
                }
                //$(document).ready(function(){
                //    $("#password, #password2").keyup(checkPasswordMatch);
                //});
                </script>  
                        
                        
                        
                        
                   </div>     
                          <div class="copyright">
					<ul class="menu">
						<li> &copy; Easel. All rights reserved.</li>
					</ul>
				</div>   
 <style type ="text/css" >
  
</style>
                                                        
</html>
