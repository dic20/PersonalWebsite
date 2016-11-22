<!DOCTYPE html5>
<html>
	<head>
			<title>Daniel Critchfield Personal Website2</title>

			<meta name="author" content="Daniel Critchfield">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">

			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
			<link rel="stylesheet" href="../CSS/mainPage.css">
			<link rel="stylesheet" href="../CSS/LandingPage.css">
			<link rel="stylesheet" href="../CSS/navItems.css">
	</head>
	<body>
		<nav class="navbar navbar-static-top navbar-dark bg-inverse">
			<a class="navbar-brand" href="#">Logo</a>
			<form method="get" action="checkUserInfo.php">
				<button class="btn btn-primary" id="signIn">Sign In</button>
				<input id="password" type="password" name="password" value="" placeholder=" ***********" required>
				<input id="username" type="username" name="username" value="" placeholder=" Username" required>
			</form>
		</nav>
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-3">Personal Promotional Website</h1>
        <button class="btn btn-secondary" id="newUser" onclick="NewUser()">New User</button>
      </div>
    </div>
    <div class="container">
      <div class="row">
	      <div class="col-md-4">
	        <h2>Purpose</h2>
	      	<p class="left-align">
	      		This site was created to demonstrate some of the skills that I have as a web developer. This site makes use of HTML5, CSS, Javascript/JQuery, PHP, and MySQL as well as a front-end framework called bootstrap.
					</p>
	      </div>
	      <div class="col-md-4">
	        <h2>Description</h2>
	        <p class="left-align">
          	This website contains professional information about myself as an aspiring developer as studying computer engineering at the University of Pittsburgh.
					</p>
	     	</div>
	      <div class="col-md-4">
	        <h2>Welcome</h2>
	        <p class="left-align">
	        	Feel free to make a free account through the new user portal, and explore the website. This site does not sell or use any personal information for anything except potentially contact information if you choose to fill out the contact form inside the site.
          </p>
      	</div>
	    </div>
		</div>
		<div class="row" id="resume">
			<div class="left-align container-fluid">
	      <h1>Résumé</h1>
	      <div class="text-container">
					<article>
						<br />
						<h4>College Education</h4>
						<ul>
							<li>Enrolled in Swanson’s Computer Engineering Program</li>
							<li>Previously enrolled in Swanson’s Mechanical Engineering and Material Sciences Program</li>
							<li>Program QPA: 3.25</li>
							<li>Pitt QPA: 3.17</li>
							<li>Courses Taken:
								<ul>
									<li>Data Structures</li>
									<li>Intro to System Software</li>
									<li>Web Development</li>
								</ul>
							</li>
							<li>Knowledge of:
								<ul>
									<li>Java</li>
									<li>C</li>
									<li>C#</li>
									<li>HTML</li>
									<li>Javascript</li>
									<li>JQuery</li>
									<li>php</li>
									<li>CSS</li>
									<li>MySQL</li>
								</ul>
							</li>
							<li>Structure and Design
								<ul>
									<li>Basics of Solidworks</li>
								</ul>
							</li>
							<li>Statics Analysis</li>
							<li>Understanding of Microsoft Office products: Word, Excel, PowerPoint</li>
						</ul>
						<h4>Work Experience</h4>
						<ul>
							<li>QA Internship at Confluence (2016)</li>
							<li>Head developer of a web-based startup (2016)</li>
							<li>Property maintenance and painting (2015)</li>
							<li>Internship with young Entrepreneurs Across America (2014/2015)</li>
							<li>Salesman at Hollister as well as Abercrombie and Fitch Clothing Store (2013)</li>
							<li>Lifeguard at Bower Hill Apartments (Summer of 2013)</li>
							<li>Lifeguard at Manorview Apartments (Summer of 2011, 2012)</li>
						</ul>
						<h4>Outside School Activities</h4>
						<ul>
							<li>Tang-Soo-Do Korean Martial Arts (2005-2008)</li>
							<li>Mixed Martial Arts (2011)</li>
							<li>Guitar lessons (2008-2013)</li>
							<li>Formerly part of a Band (2013)
								<ul>
									<li>Performed Pulse concert  (2013)</li>
								</ul>
							</li>
						</ul>
						<h4>College Activities</h4>
						<ul>
							<li>Participated in research study, measuring I-V characteristics of GaN transistors (Junior year)</li>
							<li>Participated in Birthright program through Hillel (Sophomore year)</li>
							<li>Mixed Martial Arts Club (Freshman year)</li>
							<li>Guitar Club (Freshman year)</li>
							<li>Parkour Club (Freshman year)</li>
						</ul>
					</article>
	      </div>
	    </div>
		</div>
    <noscript>You must turn on javascript to use this site!</noscript>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
		<script src="../JS/LandingPage.js"></script>
	</body>
</html>
