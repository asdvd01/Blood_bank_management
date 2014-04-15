<?php
require('connect.php');
session_start();
if (!isset($_SESSION['admin']))
header("location:admin.php");
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Blood Bank</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  	<link rel="icon"  type="image/png"   href="favicon.png" />
  <!-- stylesheets -->
  <link href="css/style2.css" rel="stylesheet" type="text/css" />
  <link href="css/dark2.css" rel="stylesheet" type="text/css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min2.js"></script>
</head>

<body>
  <div id="main">
    <div style="padding:20; margin-left:505; font-size:25;">
Welcome <?php echo $_SESSION['admin'] ?>
</div>
    <!-- begin header -->
    <header>
      <div id="logo"><h1>Blood<a href="#">Ba</a>nk</h1></div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li class="selected"><a href="index.php">home</a></li>
          
          <li><a href="">Information</a>
            <ul>
              <li><a href="donorlista.php">Donor's List</a></li>
              <li><a href="search3.php">Blood Stock</a></li>
            </ul>
          </li>
		  <li><a href="">Hospital</a>
            <ul>
              <li><a href="addhosp.php">Add new</a></li>
              <li><a href="hospupdate.php">Update</a></li>
			  <li><a href="hospremove.php">Remove</a></li>
            </ul>
          </li>
		  <li><a href="">Receptionist</a>
            <ul>
              <li><a href="addrecep.php">Add</a></li>
              <li><a href="receppc.php">Change Password</a></li>
			  <li><a href="recepre.php">Remove</a></li>
			  <li><a href="receperf.php">Perfromance Check</a></li>
            </ul>
          </li>
		 <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </header>
    <!-- end header -->

    <!-- begin content -->
    <div id="site_content">
      <ul class="slideshow">
	     <li><img width="950" height="450" src="images/BloodDay.jpg" alt="&quot;.If you’re a blood donor, you’re a hero to someone, somewhere, who received your gracious gift of life..&quot;" /></li>
        <li class="show"><img width="950" height="450" src="images/June.jpg" alt="&quot;The Blood Donor of today may be recipient of tomorrow.&quot;" /></li>
        <li><img width="950" height="450" src="images/thanks.jpg" alt="&quot;To the young and healthy it’s no loss. To sick it’s hope of life. Donate Blood to give back life.&quot;" /></li>
        
      </ul>
    </div>
    <!-- end content -->

    <!-- begin footer -->
    <footer>
      <p>Copyright &copy; 2014 Sudhanshu & Ashutosh. All Rights Reserved.</p>
      
    </footer>
    <!-- end footer -->

  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min2.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper2.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish2.js"></script>
  <script type="text/javascript" src="js/image_fade2.js"></script>
  <!-- initialise sooperfish menu -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
