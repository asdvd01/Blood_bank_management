<?php
require('connect.php');
session_start();
if (!isset($_SESSION['admin']))
header("location:index.php");
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
	
	
		
                 <a href="admin2.php" style="padding:20px; margin-left:1000px ;font-size:25px;" >Back</a>
                                   
				<div class="component">
				
				<p>List of Employees and Number of donations they  made possible</p>
				
				<table>
					<thead>
						<tr>
							<th>Employee's Name</th>
							<th>Number of Donations</th>
							
						</tr>
					</thead>
					<tbody
						<?php
                  $arr2 = "select RNAME,count(*) from donate group by RNAME";
				 $arr2 = mysql_query($arr2) or die(mysql_error());
               while(   $row2=mysql_fetch_array($arr2))
                  {   echo '<tr><td class="user-name">'.$row2['RNAME'].'</td><td class="user-email">'.$row2['count(*)'].'</td></tr>';
				    }
						?>
						
					</tbody>
				</table>
				</div>
			</body>
</html>			
