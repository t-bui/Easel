<?php
include_once("connection.php");


session_start();
if(isset($_SESSION["email"])) {
  
    header("Location: memberHome.php");
    echo "fail";
      
       //session_unset();
} else {
    if(isset($_SESSION["success"])) {
        echo $_SESSION["success"]; //what does success mean!!!!!!????
        unset ($_SESSION["success"]);
    }
}

 ?>

<!DOCTYPE html>
<!--
Tiffany Bui (tvb4sh)
Cynthia Zheng (xz7uy)
Amy Zhao(awz4pc)

Template: Helios by HTML5 UP
-->
<html>
    <head>
		<title>EASEL</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.php" id="logo">E A S E L</a></h1>
                                                                	<p>Art in Charlottesville? Find it with <i>ease</i>.</p>
								<hr />
								<p>Where a percentage of what you purchase can go to a local charity of your choice.</p>
                                                                
							</header>
							<footer>
								<button onclick="location.href='about.php'" type="button">Learn more!</button>
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php">Home</a></li>
								<!---
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

								<li><a href="about.php">About Us</a></li>
                                                                <li><a href="login.php">Login</a></li>
								<li><a href="signup.php">Sign up</a></li>
							</ul>
						</nav>

				</div>

			<!-- Banner 
				<section id="banner">
					<header>
						<h2>Hi. You're looking at <strong>Helios</strong>.</h2>
						<p>
							A (free) responsive site template by <a href="http://html5up.net">HTML5 UP</a>.
							Built on <strong>skel</strong> and released under the <a href="http://html5up.net/license">CCA</a> license.
						</p>
					</header>
				</section>
				-->

			<!-- Carousel -->

			<!--
	
			Note the following images/descriptions are dummy data! The carousel is later intended to display featured artwork that's on sale on
			the Easel website. 
			
			-->
                        
				<section class="carousel">
					<div class="reel">

						<article>
							<a href="#" class="image featured"><img src="images/test.png" alt="" height ="200"/></a>
							<header>
								<h3><a href="#">The Sun</a></h3>
							</header>
							<p>A painting by Tiffany Bui. <br> $15.00 </p>
                                                        
                                                     
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/flower.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">Flower Power</a></h3>
							</header>
							<p>A photo taken by Cynthia Zheng. <br> $20.00 </p>
                                                        
						</article>

						<!--
						<article>
							<a href="#" class="image featured"><img src="images/tribute.jpg" alt="" /></a>
							<header>
								<h3><a href="#"><i>Tribute<i></a></h3>
							</header>
							<p> <i>A drawing by Amy Zhao </i> <br> $10.00 </p>
						</article>
						--> 

                                                
						<article>
							<a href="#" class="image featured"><img src="images/intrique.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">Intrigue</a></h3>
							</header>
							<p>A painting by Amy Zhao. <br> $20.00 </p>
                                                        
  
						</article>

                                                
                                                
						<article>
							<a href="#" class="image featured"><img src="images/paradise.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">Peace in Paradise</a></h3>
							</header>
							<p> A photo taken by Cynthia Zheng. <br> $10.00 </p>
                                                        
						</article>
                                                
                                                <article>
                                                      
                                                    <a href="#" alt="" height = "500" /></a>
                                                    <br><br><br>
                                                    <br><br>
                                                    <br><br>
                                                    <h3><a href="#" height = "500" >
                                                            <label> <a href="login.php">Log In</a></label>
                                                             or 
                                                            <label> <a href="signup.php">Sign Up</a></label>
                                                             to buy these pieces of art and more!</a></h3>
                                                    
                                                    <br><br><br>
                                                    <br><br>
                                    
							
                                                        
						</article>
                                                
                                                <!--
                                                
						<article>
							<a href="#" class="image featured"><img src="images/test2.png" alt="" height = "200" /></a>
							<header>
								<h3><a href="#">The Scent of Durian</a></h3>
							</header>
							<p>A painting by Tiffany Bui. <br> $12.50 </p>
                                                        
						</article>
                                                
                                                -->
						<!--
						<article>
							<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Artwork 7</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Artwork 8</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Artwork 9</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>

						<article>
							<a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
							<header>
								<h3><a href="#">Artwork 10</a></h3>
							</header>
							<p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
						</article>
						-->

					</div>
				</section>

				<!-- Copyright -->
				<div class="copyright">
					<ul class="menu">
						<li> &copy; Easel. All rights reserved.</li>
					</ul>
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

	</body>
</html>