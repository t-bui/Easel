<?php
include_once("connection.php");

session_start();
if(!isset($_SESSION["email"])) {
  
    header("Location: index.php");
    echo "fail";
      
       //session_unset();
} else {
    if(isset($_SESSION["success"])) {
        echo $_SESSION["success"]; //what does success mean!!!!!!????
        unset ($_SESSION["success"]);
    }
    //echo "Fail";
//    session_start();
//    session_unset();
}

 ?>

<!DOCTYPE html>
<!--
Tiffany Bui (tvb4sh)
Cynthia Zheng (xz7uy)
Amy Zhao(awz4pc)

Template: Helios by HTML5 UP
Sample artist profile picture and artwork pictures from: https://unsplash.com/
No real artist information used
Quote by Thomas Merton
-->
<html>
    <head>
		<title>EASEL Logged in</title>
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
                                                            <h1>W E L C O M E</h1>
                                                            <br>
                                                            <p>Featuring Artist of the Month: <i>Jill Matthews</i></p>
                                                            <br>
								<!-- <h1><a href="index.php" id="logo">E A S E L</a></h1>
                                                                	<p>Art in Charlottesville? Find it with <i>ease</i>.</p>
								<hr />
								<p>Where a percentage of what you purchase can go to a local charity of your choice.</p>
                                                                -->
                                                                <img src="images/artist1.png" width = "250" height = "250"/></a>
                                                                
							</header>
                                                <p>"Art enables us to find ourselves and lose ourselves at the same time." - Jill Matthews<br>
                                                <center>Head of Graphic Design at Gingko. Brooklyn, NY.</center> </p>
                             
							<footer>
								<!-- <button onclick="location.href='about.php'" type="button">Learn more!</button> -->
							</footer>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
                                                                 <li>Logged in as <i><?php echo $_SESSION['email'] ?></i></li>
								<li><a href="memberHome.php">Home</a></li>
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
                                                                
								<li><a href="logout.php">Log out</a></li>
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
                                                    <a href="#" class="image featured"><img src="images/artist1art2.jpg" alt="" height ="200"/></a>
							<header>
								<h3><a href="#">Split</a></h3>
							</header>
							<p>A painting by Jill Matthews. <br> $15.00 </p>
                                                        
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  
  <input type="hidden" name="business" value="uva.easel-facilitator@gmail.com">
  <input type="hidden" name="item_name" value="Split">
  <input type="hidden" name="item_number" value="123">
  <input type="hidden" name="amount" value="15.00">
  <input type="hidden" name="first_name" value="Jill">
  <input type="hidden" name="last_name" value="Matthews">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <INPUT TYPE="hidden" NAME="return" value="http://localhost/submiteasel/index.php">
</form>
						</article>

						<article>
                                                    <a href="#" class="image featured"><img src="images/artist1art3.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">The Mustached Man</a></h3>
							</header>
							<p>A photo taken by Jill Matthews.<br> $15.00 </p>
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  
  <input type="hidden" name="business" value="uva.easel-facilitator@gmail.com">
  <input type="hidden" name="item_name" value="The Mustached Man">
  <input type="hidden" name="item_number" value="124">
  <input type="hidden" name="amount" value="15.00">
  <input type="hidden" name="first_name" value="Jill">
  <input type="hidden" name="last_name" value="Matthews">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <INPUT TYPE="hidden" NAME="return" value="http://localhost/submiteasel/index.php">
</form>
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
                                                    <a href="#" class="image featured"><img src="images/artist1art4.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">Uncle Sam</a></h3>
							</header>
							<p>A painting by Jill Matthews. <br> $20.00 </p>
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  
  <input type="hidden" name="business" value="uva.easel-facilitator@gmail.com">
  <input type="hidden" name="item_name" value="Uncle Sam">
  <input type="hidden" name="item_number" value="632">
  <input type="hidden" name="amount" value="20.00">
  <input type="hidden" name="first_name" value="Jill">
  <input type="hidden" name="last_name" value="Matthews">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <INPUT TYPE="hidden" NAME="return" value="http://localhost/submiteasel/index.php">
</form>
						</article>

						<article>
                                                    <a href="#" class="image featured"><img src="images/artist1art5.jpg" alt="" height = "200"/></a>
							<header>
								<h3><a href="#">Rainbow Einstein</a></h3>
							</header>
							<p> A photo taken by Jill Matthews. <br> $15.00 </p>
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  
  <input type="hidden" name="business" value="uva.easel-facilitator@gmail.com">
  <input type="hidden" name="item_name" value="Rainbow Einstein">
  <input type="hidden" name="item_number" value="126">
  <input type="hidden" name="amount" value="15.00">
  <input type="hidden" name="first_name" value="Jill">
  <input type="hidden" name="last_name" value="Matthews">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <INPUT TYPE="hidden" NAME="return" value="http://localhost/submiteasel/index.php">
</form>
						</article>


						<article>
							<a href="#" class="image featured"><img src="images/artist1art.jpg" alt="" height = "200" /></a>
							<header>
                                                            <h3><a href="#">Graffiti</a></h3>
							</header>
							<p>A painting by Jill Matthews. <br> $12.50 </p>
                                                        <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input type="hidden" name="cmd" value="_xclick">
  
  <input type="hidden" name="business" value="uva.easel-facilitator@gmail.com">
  <input type="hidden" name="item_name" value="Graffiti">
  <input type="hidden" name="item_number" value="999">
  <input type="hidden" name="amount" value="12.50">
  <input type="hidden" name="first_name" value="Jill">
  <input type="hidden" name="last_name" value="Matthews">
  <input type="image" name="submit"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  <INPUT TYPE="hidden" NAME="return" value="http://localhost/submiteasel/index.php">
</form>
						</article>

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
