<?php
include_once("connection.php");
session_start();

 ?>

<!DOCTYPE HTML>
<html>
    <head>
		<title>You are already registered!</title>
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
								<li><a href="signup.php">Sign up</a></li>
							</ul>
						</nav>

				</div>
            </div>
        
        
        <div class="wrapper style1">
                <div class="container">
                    <article id="main" class="special">
                         <div class ="header_title">
                            <h2><a href="#">You are already registered!</a></h2>
                            <br>
                            <h5>The email address you entered is already registered.</h5>
                            <br>
                            <h5>Please sign up with a different email address or log in with your current email address.</h5>
                            <br>
                            <br>
                            <button onclick="location.href='index.php'" type="button">Go back to Home</button>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                         </div>
                    </article>  
                </div>   
            </div>
                    <!-- <p>Email already exists. You've already signed up!</p> -->

                   
    </body>
    <div class="copyright">
					<ul class="menu">
						<li> &copy; Easel. All rights reserved.</li>
					</ul>
				</div>   
</html>




