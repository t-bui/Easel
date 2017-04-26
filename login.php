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
			<h2><a href="#">Login</a></h2>
								
                        <h5>Enter the coolest place to buy and sell art.</h5>
                        <br><br>
                     </div>
                        
                        
                    <div style="width: 1250px; padding-left: 400px;" class="regContainer">
                    <div class="row">
                        <form id = "main-form" action="signin.php" method="post" onsubmit = "return check_form();">
                       
                        <b>
                        <?php
                            if( isset($_SESSION['error']) )
                            {
                                    echo $_SESSION['error'];

                                    unset($_SESSION['error']);

                            }
                            ?>
                        </b>    
                            
                            <div class="col-sm-12">
                                <div class="row">
                                <div class="col-sm-6 form-group">
                                    <label>Email Address</label>
                                    
                                    <input type="text" name='email' id='email' onfocus="clearInput('email')" placeholder="Email Address" pattern="[a-zA-z0-9._%+-]+@[a-zA-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required title = "characters@characters.domain">
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label>Password</label>
                                    <input type="password" name = "password" data-minlength="8" id = "password" placeholder="Password" class="form-control">
                                </div>
                                    
                                
       
                                </div>
                                
                                
                                <div class="col-sm-6 form-group">
                                     <label> <a href="signup.php"> (or...create an account!)</a></label>
                                    <div style="padding-right: 110px;" class="regContainer">   
                                        <br>
                                    <button style="float:right; margin-right: 25px;" type="submit" class="btn btn-lg btn-info">Log In</button>
                                    
                                    </div>
                                </div>
                                 
                            <div>
                               
                            </div>
                                <br>
                                <br>
                            
                            
                        </div>
                               
                        </form> 
                   
                    </div>
                    </div>
                    </article>
                </div>
                </div>
             </div>
        </div>
             
                        
                                                            
                    
                         
           <!--  </div>-->
      
                        
                        
                        
                        
      
                          <div class="copyright">
					<ul class="menu">
						<li> &copy; Easel. All rights reserved.</li>
					</ul>
				</div>   
 <style type ="text/css" >
  
</style>
                                                        
</html>

