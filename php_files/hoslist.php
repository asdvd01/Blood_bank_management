<?php
require('connect.php');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>BLOOD BANK MANAGEMENT SYSTEM</title>
		<meta name="description" content="Sticky Table Headers Revisited: Creating functional and flexible sticky table headers" />
		<meta name="keywords" content="Sticky Table Headers Revisited" />
		<meta name="author" content="Codrops" />
		<link rel="icon"  type="image/png"   href="favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/normalize1.css" />
		<link rel="stylesheet" type="text/css" href="css/demo1.css" />
		<link rel="stylesheet" type="text/css" href="css/component1.css" />
	</head>
	<body>
	
	<div class="component">
	<p padding="20px 20px 20px 20px"; align="right";><a href="index.php">Back to Home Page</a></p>
	<p>List of hospitals in Rourkela</p>
	<table>
					<thead>
						<tr>
							<th>Name of Hospital</th>
							<th>Address of Hospital</th>
							<th>Phone Number</th>
						</tr>
					</thead>
					<tbody>
					<?php
                  $arr1 = "select HNAME,HADD,HPHONE from hospital";
				 $arr1 = mysql_query($arr1) or die(mysql_error());
               while(   $row1=mysql_fetch_array($arr1))
                  {   echo '<tr><td class="user-name">'.$row1['HNAME'].'</td><td class="user-phone">'.$row1['HADD'].'</td><td class="user-phone">'.$row1['HPHONE'].'</td></tr>';
				    }
						?>
			
					</tbody>
				</table>
				</div>
	</body>
