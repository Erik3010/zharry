<!DOCTYPE html>

<!--This page was Fully Made by Harry-->
<!--This is not a real tour company-->
<!--This page is for my Geography Project-->
<!--If you are viewing this Thank You for Visiting the page!-->

<html style="background-color: #D8D8D8;">

	<head>
	<title>Berkshire, England</title>
	<link rel="icon" type="image/ico" href="picture/favicon.ico"/>
	<meta name="author" content="Harry Zhang">
	</head>
	<body>
	<div class="header">
		<center><a href="index.php"><img src="picture/header.jpg" title="Welcome to Tour101" /></a><br/>
		<div class="topmenu">
			<a href="index.php" style="text-decoration: none; border: 1px solid black;"> &nbsp Home &nbsp </a> &nbsp 
			<a href="salt_lake_city.php" style="text-decoration: none; border: 1px solid black;"> &nbsp Salt Lake City &nbsp </a> &nbsp 
			<a href="berkshire.php" style="text-decoration: none; border: 1px solid black;"> &nbsp Berkshire &nbsp </a> &nbsp 
			<a href="finish.php" style="text-decoration: none; border: 1px solid black;"> &nbsp Recommendation &nbsp </a> &nbsp 
			<a href="bibliography.php" style="text-decoration: none; border: 1px solid black;"> &nbsp Bibliography &nbsp </a><br/><br/>
		</div>
		</center>
	</div>
	<div class="sidemenu" style="text-indent: 5px; border: 1px solid black; float: left; width: 20%;">
		<p>Site Contents:<br/></p>
        <a href="index.php" style="text-decoration: none"> &nbsp Home</a><br/>
        <a href="cost.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Flight Costs</a><br/>
        <a href="finish.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Recommendation</a><br/>
        <a href="bibliography.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Bibliography</a><br/><br/>
		<a href="salt_lake_city.php" style="text-decoration: none"> &nbsp Salt Lake City</a><br/>
		<a href="features_salt_lake_city.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Salt Lake City Physical Features</a><br/>
		<a href="climate_salt_lake_city.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Salt Lake City Climate</a><br/>
		<a href="vegetation_salt_lake_city.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Salt Lake City Vegetation</a><br/>
		<a href="activities_salt_lake_city.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Salt Lake City Activities</a><br/><br/>
		<a href="berkshire.php" style="text-decoration: none"> &nbsp Berkshire</a><br/>
		<a href="features_berkshire.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Berkshire Physical Features</a><br/>
		<a href="climate_berkshire.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Berkshire Climate</a><br/>
		<a href="vegetation_berkshire.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Berkshire Vegetation</a><br/>
		<a href="activities_berkshire.php" style="text-decoration: none"> &nbsp &nbsp &nbsp Berkshire Activities</a><br/><br/><hr/><br/>
		
		<div class="php-date">
		<?
			//Creates Today's Date
			function EnglishDate($date) {
			$arrDay = array("Today is: Sunday","Today is: Monday","Today is: Tuesday","Today is: Wednesday","Today is: Thursday","Today is: Friday","Today is: Saturday");
			$arrMonth = array("","January","February","March","April","May","June","July","August","September","October","November","December");
			$EnglishDate = $arrDay[(date("w",$date))] . ", " . $arrMonth[date("n",$date)];
			$EnglishDate = $EnglishDate  . " " . date("d",$date) . ", " . date("Y",$date);
			return $EnglishDate;
			}
			echo EnglishDate(time());
		?></div>
		
	</div>
	<div class="spacing" style="float: left; width: 5%;"><br/>
	</div>
	<div class="body" style="float: left; width: 60%;">
	
		<!--Page Begins Here-->
		
		<h3>Berkshire, England</h3>
		<p><b><i>Latitude/Longtitude:</i></b> 51.2902*N, 0.3616*W</p><hr/>
		<center><p>Berkshire is Located in England to the West of London. The Next Picture will show a more detailed map of England.
		On this map Berkshire is located on the Black Dot.<br/><br/>
		<a href="picture/berkshire/world_map_berkshire.jpg"><img src="picture/berkshire/world_map_berkshire.jpg" title="Click to Enlarge." width="700px" height="400px"/></a></p><hr/>
		<p>Berkshire is a State located right to the left of London State.<br/> Surrounding the Berkshire State is Oxon, Bucks, Surrey, Hampshire ,Whiltshire and London.<br/><br/>
		<a href="picture/berkshire/eng_map.png"><img src="picture/berkshire/eng_map.png" title="Click to Enlarge." width="450px" height="560px"/></a><br/>Topographical Map of England with the biggest city in Berkshire labeled (Reading).<br/><br/><a href="picture/berkshire/topo_eng_map.png"><img src="picture/berkshire/topo_eng_map.png" title="Click to Enlarge." width="450px" height="560px"/></a></p><hr/>
		<p>This is a city map of Berkshire State and Inner Towns.<br/><br/>
		<a href="picture/berkshire/berkshire_map.png"><img src="picture/berkshire/berkshire_map.png" title="Click to Enlarge." width="700px" height="300px"/></a></p><br/><br/></center>
		
		<!--Foot-->
		
		<a href="#top" style="float:left">Back To Top</a>&nbsp &nbsp <a href="index.php">Back: (Home)</a><a href="features_berkshire.php" style="float:right">Next: (Berkshire Physical Features)</a>
		
		
	</div>
	<div class="spacing" style="float: left; width: 15%;"><br/>
	</div>
	</body>

</html>