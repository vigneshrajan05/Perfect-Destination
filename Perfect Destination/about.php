<?php

error_reporting(0);
?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>About us</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Aldrich' rel='stylesheet'>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
 

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="about us.css">

	

</head>


<body>


<!--Navbar-->
   <nav class="navbar">
        <span class="navbar-toggle" id="js-navbar-toggle">
            <i class="fas fa-bars"></i>
        </span>
        <a href="#" class="logo">Perfect Destination</a>
        <ul class="main-nav" id="js-menu">
            <li>
                <a href="home.php" class="nav-links">HOME</a>
            </li>
            <li>
                <a href="#" class="nav-links">ABOUT US</a>
            </li>
            <li> 
                <a href="cancel.php" class="nav-links">CANCEL TICKET</a>
            </li>
            
        </ul>
</nav>

<script type="text/javascript">
let mainNav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () 
{
  mainNav.classList.toggle('active');
});
</script>
<body> 
   <div class="booking-cta">
    <img class="img1" src="img/team.jpg" alt ="team">
   	  
      <div class="booking">
         <div class="about">About us</div>
          <p>Perfect destination,is a small platform which provides customers a way for reservation of buses. We have a number of buses going through almost every corners of india. Through this website we make sure that you get your preferred seats in bus and  a peaceful journey.</p> 
      </div>
    </div>
    <div class="team1">OUR TEAM</div>
    <div class="team2">We have a team of 6 members to monitor the working of the application and ensure the details of the passengers are stored securely. The team works 24/7 to monitor the customer problems.</div>

    <div class="provide">
       <div class="dib1"><img src="img/promise.png" alt="promise" height="100"></div>
       <div class="book"><p>We Provide</p><br></div>
       <div class="box1">
           <div class="dib"><img src="img/maximum_choices.png" alt="maxchoice" height="100"></div>
           <div class="booking2"><p>Maximum Choices</p><br></div>
           <div class="booking1"><p>We give you the widest number of travel options across thousands of routes throughtout India.</p></div>
       </div>
       <div class="box2">
           <div class="dib"><img src="img/customer_care.png" alt="24/7" height="100"></div>
           <div class="booking2"><p>Superior Customer Service</p><br></div>
           <div class="booking1"><p>We put our experience and relationships to good use and are available to solve your travel issues.</p></div>
       </div>
       <div class="box3">
           <div class="dib"><img src="img/lowest_Fare.png" alt="rupee" height="100"></div>
           <div class="booking2"><p>Lowest Prices</p><br></div>
           <div class="booking1"><p>We always give you the lowest price with the best partner offers and also hassle-free cancellation.</p></div>
       </div>
</div>
<!--
<div class="provide">
       <div class="dib"><img src="img/promise.png" alt="promise" height="100" style="padding-left: 1vw;"></div>
       <div class="book"><p>We Provide</p><br></div>
       <div class="box1">
        <div class="dib"><img src="img/maximum_choices.png" alt="maxchoice" height="100"></div>
           <div class="booking1"><b><p>Maximum Choices</p></b><br></div>
           <div class="booking1"><p>We give you the widest number of travel options across thousands of routes.</p></div>
       </div>

       <div class="box2">
         <div class="dib"><img src="img/customer_care.png" alt="maxchoice" height="100"></div>
           <div class="booking1"><b><p>Superior Customer Service</p></b><br></div>
           <div class="booking1"><p>We put our experience and relationships to good use and are available to solve your travel issues.</p></div>
       </div>
       <div class="box3"></div>-->
       
</div>
</body>
</html>