<?php

?>

<!DOCTYPE html5>
<html>
    <head>
      <title>Daniel Critchfield Personal Website2</title>

      <meta name="author" content="Daniel Critchfield">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- link to bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

      <!-- links to my stylesheets -->
      <link rel="stylesheet" href="../CSS/mainPage.css">
      <link rel="stylesheet" href="../CSS/navItems.css">

      <!-- link to font awesome icons -->
      <link rel="stylesheet" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="200">
      <div class="row">
        <!-- converting bootstrap's fixed top navbar into a fixed left navbar -->
				<div class="navbar-fixed-top col-md-2 left-nav">
	        <nav class="nav-formatter">
            <div id="logoDiv">
              <p>
                <a class="navbar-brand" id="logo" href="#">Logo</a>
              </p>
            </div>
            <div class="nav-div">
              <p>
                <i class="fa fa-info fa-2x" aria-hidden="true"><br /><a class="nav-link" href="#about">About</a></i>
              </p>
            </div>
            <div class="nav-div">
              <p>
                <i class="fa fa-envelope-open-o fa-2x" aria-hidden="true"><br /><a class="nav-link" href="#contact">Contact</a></i>
              </p>
            </div>
	        </nav>
        </div>
				<div class="col-lg-8 right">
					<div id="about" class="container-fluid">
						<h1>About</h1>
						<div class="format-container">
							<div class="tri-format">
								<h4>Section 1</h4>
								<p>Here is some text on the right</p>
							</div>
							<div class="tri-format">
								<h4>Section 2</h4>
								<p>Here is some text in the center</p>
							</div>
							<div class="tri-format">
								<h4>Section 3</h4>
								<p>Here is some text on the left</p>
							</div>
						</div>
					</div>
		      <div id="contact" class="container-fluid">
						<h1>Contact</h1>
						<div class="row">
							<form id="contactForm" method="POST" action="validate.php">
								<div class="col-md-4">
									<label class="labelFormat" for="fname">First Name:</label><br />
									<label class="labelFormat" for="lname">Last Name:</label><br /><br />
									<label class="labelFormat" for="email">Email:</label><br /><br />
									<label class="labelFormat" for="comments">Comments:</label><br /><br />
									<button id="submitFormat" name="submit" value="submit">Submit</button>
								</div>
								<div class="col-md-4">
									<input type="text" id="fname" value="" name="fname" required><br /><br />
									<input type="text" id="lname" value="" name="lname" required><br /><br />
									<input type="email" id="email" value="" name="email" required><br /><br />
									<textarea type="text-area" id="comments" value="" name="comments" required></textarea>
								</div>
							</form>
						</div>
		      </div>
          <footer id="footer" class="container-fluid">
              <h1>Daniel Critchfield</h1>
              <p>2016</p>
          </footer>
				</div>
			</div>

      <!-- link to add in jQuery scripts and bootstrap scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    </body>
</html>
