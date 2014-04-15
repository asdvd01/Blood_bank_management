<?php
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Blood_Bank</title>
  <meta name="description" content="blood bank management system NIT Rourkela" />
  <meta name="keywords" content="blood bank,donate blood in rourkela,blood information,hospital detail rourkela" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style_index.css" />
  <link rel="icon"  type="image/png"   href="favicon.png" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min_i.js"></script>
</head>

<body>
  
  <div id="main">
    <div id="top_container">
	  <header>
        <div id="logo"><h1>Blood <a href="#">Bank</a></h1></div>
        <nav>
          <ul class="lavaLampWithImage" id="lava_menu">
            <li class="current"><a href="index.php">home</a></li>
            <li><a href="hoslist.php">hospital list</a></li>
            <li><a href="main.php">Log In</a></li>
            <li><a href="search.php">Search a Blood Group</a></li>
			<li><a href="admin.php"> Administrator </a><li>
          </ul>
        </nav>
      </header>
      <div class="slideshow">
        <ul class="slideshow">
          <li class="show"><img width="950" height="350" src="images/giveblood_logo.jpg" alt="&quot;To give blood you need neither extra strength nor extra food,and you will save a life.&quot;" /></li>
          <li><img width="950" height="350" src="images/bloodbank.jpg" alt="&quot;Tears of a mother cannot save her Child. But your Blood can..&quot;" /></li>
          <li><img width="950" height="350" src="images/image3.jpg" alt="&quot;Blood Donation will cost you nothing but it will save a life!.&quot;" /></li>
                    <li><img width="950" height="350" src="images/DonateBlood.png" /></li>

		</ul>
	  </div>		
    </div>	  

    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>Organising 14th blood donation camp in this month</h4>
          <h5>April 1st, 2014</h5>
          <p>Date and time of campaign is Updated soon.. <br /></p>
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="hoslist.php">List of Hospitals</a></li>
            <li><a href="search.php">Search a Blood Group</a></li>
      
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>why donate blood ?</h1>
        <p>Blood is vital to life and for many people blood donors are their lifeline. Currently only 1in 30 people give blood, but 1in 3 people will need blood in their lifetime..</p>
        <p>Modern processing techniques mean that a single blood donation, when separated into its components, can help at least 3 different patients and contribute to making up to 22 different products (including potentially life-saving immunisations for chicken pox, hepatitis B and tetanus).</p>
        <h2>HEALTH BENEFITS OF DONATING BLOOD</h2>
        
        <ul>
          <li>IMPROVES HEART HEALTH</li>
          <li>ENHANCES THE PRODUCTION OF NEW BLOOD CELLS</li>
          <li>BURNS CALORIES</li>
          <li>ENHANCES FEELING OF WELL BEING IN ELDERLY PEOPLE</li>
		  <li>REDUCES CANCER RISK</li>
		  <li>FREE HEALTH SCREENING DONE</li>
		  <li>SAVES LIVES</li>
		  <li>It feels Good</li>
		  
        </ul>
      </div>
    </div>
    
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min_i.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min_i.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min_i.js"></script>
  <script type="text/javascript" src="js/image_fade_i.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>
