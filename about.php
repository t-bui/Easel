<?php
include_once("connection.php");
session_start();
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>about us</title>
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
								

								<!--
								<li>
									<a href="#">Dropdown</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Magna phasellus</a></li>
										<li><a href="#">Etiam dolore nisl</a></li>
										<li>
											<a href="#">And a submenu &hellip;</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Phasellus consequat</a></li>
												<li><a href="#">Magna phasellus</a></li>
												<li><a href="#">Etiam dolore nisl</a></li>
											</ul>
										</li>
										<li><a href="#">Veroeros feugiat</a></li>
									</ul>
								</li>
								-->
                                                                 <?php 
                                                                 if(isset($_SESSION['email'])){ ?>
                                                                    <!--<li><a href="account.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['email'] ?></a></li> -->
                                                                <li>Logged in as <i><?php echo $_SESSION['email'] ?></i></li>    
                                                                <li><a href="memberHome.php">Home</a></li>
                                                                    <li><a href="about.php">About Us</a></li>
                                                                   
                                                                    <li><a href="logout.php">Log out</a></li>
                                                                <?php }
                                                                else{ ?>
                                                                <li><a href="index.php">Home</a></li>
								<li><a href="about.php">About Us</a></li>
                                                                <li><a href="login.php">Login</a></li>
								<li><a href="signup.php">Sign up</a></li>
                                                                <?php } ?>
							</ul>
						</nav>

				</div>
		</div>

			<!-- Main -->
				<div class="wrapper style1">

					<div class="container">
						<article id="main" class="special">
							<header>
                                                            <div class ="header_title">
								<h2><a href="#">About Us</a></h2>
								
                                                                <h5>This is the coolest place to buy and sell art.</h5>
                                                            </div>
                                                            
                                                            <br>
                                                                            <article id="main" class="nonspecial"> 
                                                               
										<p style="font-size:20px">	<b><i>What is Easel?</i></b> 
										<br>
										<br>
										Easel is an online art market platform within the Charlottesville area. The brainchild of three University of Virginia students, Easel’s goal is to bring recognition and promote local artists, regardless of skill level and age. </p>
                                                                                
										<br>

										<p style="font-size:20px">	<b><i>Who is Easel for?</i></b> 
										<br>
										<br>
										Easel works just like a physical art market with buyers and sellers. Anyone can be a customer. Easel streamlines the shopping experience and makes it easier than ever for you to discover local artists and buy their work.

										<br> <br>

										Easel also provides services to artists intending to sell and promote their artwork. We welcome artists of all mediums and ages, from painters and sculptors to photographers. This is a website for you to display your work and have an admirer purchase your art. </p>

										<br>

										<p style="font-size:20px">	<b><i>Who are we?</i></b> 
										<br>
										<br>
										As lovers of art, we strongly believe in the power of using technology to help make local art more easily accessible and marketable. We value creativity and opportunities for every individual, so we want to encourage everyone to share their art work. With these dreams, we set off to build Easel and thus, Charlottesville’s premier boutique art market on the web was born.  </p>

										<br>

										<p style="font-size:20px">	<b><i>Our slogan</i></b> 
										<br>
										<br>
										The slogan emphasizes the easy access Easel provides. Easel’s central motto revolves around <b><i>ease</i></b> of use and enjoyment by providing effortless 24/7 access to the local art market, whether one simply wants to browse the art to ease their mind or buy artwork to decorate their home.</p>

										<br>

										<p style="font-size:20px">	<b><i>Why choose Easel?</i></b> 
										<br>
										<br>
										There are numerous art shops from modern to antique in Charlottesville, but Easel is the one and only platform that brings the art shop experience online. 
										<br> <br>
										Also as local students, we want to give back to the community as well as foster community spirit and involvement. For every item sold, we donate 2% of the profits to local charity. </p>

										<br> <br>


										


									</article>
									
									

									 <!-- (for later)--> 
                                                                        <a class="about"><img src="images/profs.jpg"  height = "1100"/></a>
<!--                                                                        <div class="wrapper style1">-->
                                                                            <div class="container">
<!--                                                                        <article id="main" class="special">-->
                                                                            <div class="header_title">
                                                                            <b>Tiffany Bui, Cynthia Zheng, and Amy Zhao</b>
                                                                            <br>
										<i>Founders</i>
                                                                                <br>
                                                                                <br>
                                                                                
									
                                                                        
                                                                        
                                                                          <?php 
                                                                 if(isset($_SESSION['email'])){ ?>
                                                                  
                                                                <?php }
                                                                else{ ?>
								<button onclick="location.href='signup.php'" type="button">Sign up!</button>
                                                                <?php } ?>
<!--                                                                        </article>-->
                                                                                
                                                                        </div>
                                                                        </div>
<!--                                                                            </div>-->
							</header>
							

						</article>
					</div>
                                   
				</div>
                         <div class="copyright">
					<ul class="menu">
						<li> &copy; Easel. All rights reserved.</li>
					</ul>
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
			 
 <style type ="text/css" >
  
</style>
</head>


	</body>
</html>