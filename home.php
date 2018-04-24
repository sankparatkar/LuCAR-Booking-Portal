<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Spimmer,Ltd.-Fastest growing automation firm</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="home_style.css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Spimmer,Ltd.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size:20px">Welcome, <?php echo $_SESSION['username']; ?></li>
		<li><a href="home.html">LOG OUT</a></li>
        <li><a href="ContactUs.html">CONTACT US</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#Bot">ABOUT US</a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li> 
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

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
        <img src="lucar1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Love Travelling with Aeroplanes??</h3>
          <p></p>
        </div>      
      </div>

      <div class="item">
        <img src="lucar2.jpeg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>But,Carrying Luggage is tedious after all...</h3>
          <p></p>
        </div>      
      </div>
    
      <div class="item">
        <img src="lucar3.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Stop worrying and Stay Relaxed..</h3>
          <p></p>
        </div>      
      </div>

	<div class="item">
        <img src="lucar4.gif" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Because, LuCAR is only a Click Away!</h3>
		<h3>Book Now!!</h3>
          <p></p>
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
<br>
<marquee> Attention : Flight no.367 Passengers, Change in pickup point from Gate 24,Terminal B to Gate 25,Terminal B due to ongoing Airport Maintainance. Sorry for the inconvinience caused. </marquee>
<br>
<button class="button" style="vertical-align:middle"><span><a href=booknow.html>Book Now</a></span></button>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>LuCAR-Luggage Carrying Autonomous Robot</h3>
  <p><em>We Love Automation!</em></p>
  <p>Our product LuCAR is a Lugggage Carrying Autonomous Robot which assists the passengers at airports for carrying the luggage from pickup point to destination. It reduces the Human efforts by providing the a Hands Free mechanism to carry the luggage. The service is available 24x7 at all major airports across USA, Europe, Asia and Pacific. LuCAR is user-friendly, interactive, secure robot which made it the most popular and trending gadget in 2025. So, stop worrying about luggage and start booking. <br> Happy Luggaging:)!!! </p>
  <br>
</div>




<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>2017@Spimmer,Ltd. All rights reserved</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
