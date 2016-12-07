<?php
session_start();
require_once 'FunctionList.php';

$userId = getUserId($_SESSION['username']);
$first_name = getUserName($userId);
?>

<!DOCTYPE html5>
<html>
<head>
  <title>Daniel Critchfield Personal Website2</title>

  <meta name="author" content="Daniel Critchfield">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link to bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- links to my stylesheets -->
  <link rel="stylesheet" href="../CSS/navItems.css">
  <link rel="stylesheet" href="../CSS/mainPage.css">

  <!-- link to font awesome icons -->
  <link rel="stylesheet" href="../CSS/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="200">
  <div class="row">
    <!-- converting bootstrap's fixed top navbar into a fixed left navbar -->
    <div class="navbar-fixed-top col-md-2 left-nav">
      <nav class="nav-formatter">
        <div id="logoDiv">
          <img src="../IMG/9728.jpg">
        </div>
        <div class="nav-div" id="topNavDiv" onclick="displayDiv('home', ['about', 'contact', 'services', 'previousWork'], 'topNavDiv', ['secondNavDiv', 'thirdNavDiv', 'fourthNavDiv', 'fifthNavDiv'])">
          <p>
            <i class="fa fa-home fa-2x" aria-hidden="true"><br />Home</i>
          </p>
        </div>
        <div class="nav-div" id="secondNavDiv" onclick="displayDiv('about', ['home', 'contact', 'services', 'previousWork'], 'secondNavDiv', ['topNavDiv', 'thirdNavDiv', 'fourthNavDiv', 'fifthNavDiv'])">
          <p>
            <i class="fa fa-info fa-2x" aria-hidden="true"><br />About</i>
          </p>
        </div>
        <div class="nav-div" id="thirdNavDiv" onclick="displayDiv('contact', ['about', 'home', 'services', 'previousWork'], 'thirdNavDiv', ['topNavDiv', 'secondNavDiv', 'fourthNavDiv', 'fifthNavDiv'])">
          <p>
            <i class="fa fa-envelope-open-o fa-2x" aria-hidden="true"><br />Contact</i>
          </p>
        </div>
        <div class="nav-div" id="fourthNavDiv" onclick="displayDiv('services', ['about', 'home', 'contact', 'previousWork'], 'fourthNavDiv', ['topNavDiv', 'secondNavDiv', 'thirdNavDiv', 'fifthNavDiv'])">
          <p>
            <i class="fa fa-street-view fa-2x" aria-hidden="true"><br />Services</i>
          </p>
        </div>
        <div class="nav-div" id="fifthNavDiv" onclick="displayDiv('previousWork', ['about', 'home', 'services', 'contact'], 'fifthNavDiv', ['topNavDiv', 'secondNavDiv', 'fourthNavDiv', 'thirdNavDiv'])">
          <p>
            <i class="fa fa-folder-open-o fa-2x" aria-hidden="true"><br />Previous Work</i>
          </p>
        </div>
      </nav>
    </div>
    <div class="col-lg-8 my-right">
      <div id="home" class="container-fluid">
        <h1>Hi
          <?php
          echo $first_name;
          ?>
        </h1>
        <hr />
        <br />
        <div class="content container-fluid">
          <h3>Welcome to my website!</h3>

        </div>
      </div>
      <div id="about" class="container-fluid">
        <h1>About</h1>
        <hr />
        <div class="format-container">
          <div class="tri-format">
            <h4>Who am I?</h4>
            <p>My name is Daniel Critchfield. I am a computer engineering student at the University of Pittsbrugh, who is currently in my fourth year of study.</p>
          </div>
          <div class="tri-format">
            <h4>Purpose of this Site</h4>
            <p>I created this site to play around with different web technologies, so that I could use those technologies to promote myself, and learn how to apply new skills to future projects. Such an exmple of this is the fact that my site has a login portion to it. I made this because I plan on creating future sites that will need this functionality, and this seemed like a perfect time to learn how to implement a login funcitonlaity.</p>
          </div>
          <div class="tri-format">
            <h4>Background</h4>
            <p>As stated already, I am a computer engineering student. I started out studying mechanical engineering, and after studying phsycis and mathematics as well as 3D modeling, I decided that I enjoyed programming more than what I had previously studied. I switched to computer engineering, and have been pursuing an interest in software design over the mechanical design aspects of computer engineering.</p>
          </div>
        </div>
      </div>
      <div id="contact" class="container-fluid">
        <h1>Contact</h1>
        <hr />
        <div class="row">
          <div class='col-6 col-lg-4'></div>
          <!-- still need to write validate.php -->
          <div class="col-12 col-lg-8 ">
          <form class="form-horizontal" id="contactForm" method="POST" action="LeaveComment.php">
            <div class="form-group">
              <label class="labelFormat" for="fname">First Name:</label><br />
              <input type="text" id="fname" value="" name="fname" required><br /><br />
            </div>
            <div class="form-group">
              <label class="labelFormat" for="lname">Last Name:</label><br /><br />
              <input type="text" id="lname" value="" name="lname" required><br /><br />
            </div>
            <div class="form-group">
              <label class="labelFormat" for="email">Email:</label><br /><br />
              <input type="email" id="email" value="" name="email" required><br /><br />
            </div>
            <div class="form-group">
              <label class="labelFormat" for="comments">Comments:</label><br /><br />
              <textarea type="text-area" id="comments" value="" name="comments" required></textarea>
            </div>
            <button id="submitFormat" name="submit" value="submit">Submit</button>
          </form>
        </div>
        </div>
      </div>
      <div id="services" class="container-fluid">
        <h1>Services</h1>
        <hr />
        <div class="container-fluid">
          <p>Web Development</p>
          <p>Object oriented programming</p>
        </div>
      </div>
      <div id="previousWork">
        <h1>Previous Work</h1>
        <hr />
        <br />
        <div class="container-fluid">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="../IMG/circuit-board-background_649729.jpg" alt="Circuit Board" width="460" height="345">
                <div class="carousel-caption">
                  <h3>Tech</h3>
                  <p>Cool circuit board picture.</p>
                </div>
              </div>

              <div class="item">
                <img src="../IMG/SuitPictureMe.jpg" alt="Me" width="460" height="345">
                <div class="carousel-caption">
                  <h3>Me</h3>
                  <p>This is a picture of me.</p>
                </div>
              </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- link to add in jQuery scripts and bootstrap scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- link to page specific script(s) -->
  <script src="../JS/index.js"></script>
  <script>window.onload = displayDiv('home', ['about', 'contact', 'services', 'previousWork'], 'topNavDiv', ['secondNavDiv', 'thirdNavDiv', 'fourthNavDiv', 'fifthNavDiv'])</script>
  <noscript>Please enable javascript for full page functionality</noscript>
</body>
</html>
