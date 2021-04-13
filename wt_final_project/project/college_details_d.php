<?php
require 'pass.php';
if(!isset($_SESSION['name']))
	header('Location:homepage.html');
?>
<!doctype html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">

		  <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!--link to jquery*essential*-->
		<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/styleCollegedetails.css"></link>
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css"></link>
		<link rel="icon" href="C:\Users\lenovo\Desktop\website\login page\images\students-cap.png" type="image/x-icon">
		<title>College details | College Spree</title>
		<!--#fedc3d/*#88d317/*#fedcd2/*#565656/*#07889b*/-->
		<style>/*css*/
			body{
			padding-top:50px;
			position: relative;
			background-color:#fedc3d/*#88d317/*#fedcd2/*#565656/*#07889b*/;

		}		
		#my_canvas{/*rating circular progress*/
			padding-left:40%;
		}
	  .affix {
	      top: 150px;
	  }
	  div.col-sm-9 div {
	      height: 250px;
	      font-size: 28px;
	  }
	 #section1 {color: #fff; background-color: #262c3a/*#01abaa/*#4cdef5*/;}/*style for */
	  #section2 {color: #fff; background-color: #262c3a/*#01abaa/*#673ab7*/;}
	  #section3 {color: #fff; background-color: #262c3a/*#01abaa/*#ff9800;*/;}
	  #section4 {color: #fff; background-color: #262c3a/*#01abaa/*#00bcd4;*/;}
	  @media screen and (max-width: 810px) {
	    #section1, #section2, #section3, #section41, #section42  {
	        margin-left: 150px;
	    }
	  }
	  #college_pic{/*image of college (from database)*/
	  	padding-top:15px;
	  	  display: block;
    	margin-left: auto;
    	margin-right: auto;
	  }
  </style>
</head>

	<body data-spy="scroll" data-target="#myScrollspy" data-offset="15" >

	<!--navbar-->
	<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="../project/about_us.html" class="navbar-brand">College Spree</a>
			</div><!--navbar header-->
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../project/home.html">Home</a></li>
					<li class="dropdown active">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Stream
       					<span class="caret"></span></a>
						
  					</li>
  					<li class="dropdown">
        				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Admission Process
       					<span class="caret"></span></a>
						<ul class="dropdown-menu">
						    <li><a href="../project/sciAndComProcess.html">Science and Commerce</a></li>
						    <li><a href="../project/diplomaAdd.html">Diploma</a></li>
						    <li><a href="../project/enggAddProcess.html">Engineering</a></li>
  						</ul>

  					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    <li id="Logout" class="disable_reg"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>
			    </ul>
			</div>
		</div><!--end of container-->
	</nav><!--End navbar-->

<div class="container-fluid" align="center" style="background-color:#49274a/*#2196F3*/;color:#ff0;height:320px;"> 

<?php
include('db_connect.php');
$num = $_GET['eid'];
$result = mysql_query("select * from diploma_clg_db where id='".$num."'") or die(mysql_error());
while($row = mysql_fetch_array( $result )) {
$img = $row['img_url'];
$name = $row['name'];
echo '<figure>';
//echo '<div class="w3-third w3-section" style="width:30%;height:300px;padding-top:1px;padding-right:10px;padding-bottom:10px;padding-left:60px;">';
echo "<br><figcaption align='center'><h1>".$name."</h1></figcaption>";
  echo "<img src='".$img."' align='middle' width='30%' height='200px' vspace='20'>";	
echo '</figure>';
}
?>

</div>
<br>

<div class="container">
  <div class="row">
    <nav class="col-sm-3" id="myScrollspy">
      <ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="205"> 
        <li><a href="#section1" style="color:#00ddd8;background-color:#262c3a"><span class="glyphicon glyphicon-map-marker"></span> Address</a></li>
        <li><a href="#section2" style="color:#00ddd8/*#262c3a*/;background-color:#262c3a"><span class="glyphicon glyphicon-map-marker"></span> Map</a></li>
        <li><a href="#section3" style="color:#00ddd8/*#262c3a*/;background-color:#262c3a"><span class="glyphicon glyphicon-globe"></span> College link</a></li>
        <li><a href="#section4" style="color:#00ddd8/*#262c3a*/;background-color:#262c3a"><span class="glyphicon glyphicon-star"></span> Rating</a></li>
        
      </ul>
    </nav>
    <div class="col-sm-9">
      <div id="section1" style="height:150px;">
<?php
$num = $_GET['eid'];
$result = mysql_query("select * from diploma_clg_db where id='".$num."'") or die(mysql_error());
while($row = mysql_fetch_array( $result )) {
$name = $row['name'];
$address = $row['address'];

	echo "<h2><br>".$address."</h2>";
	echo '</div>';
      echo '<div id="section2" style="height:150px;">';
      
		
		$location = $row['location'];
		$map = $row['map_link'];
		$link = $row['clg_link'];
		$r = $row['rating'];

        echo "<h1><br>".$location."</h1>";
        echo "<h2>Map location:<a href=".$map.">Visit here</a></h2>";
        //echo "<a href=".$map.">Visit here</a>";
        
        echo '</div>';
        echo '<div id="section3" style="height:150px;">';
        echo '<h1><br></h1>';
        echo "<p>For addmission procedure and other details:<a href=".$link.">Visit here</a></p>";
        
        
      echo '</div>';

      echo '<div id="section4" style="margin-bottom:200px;height:200px;">';
      echo '<h1>Rating</h1>';

	     echo '<canvas id="my_canvas" width="140" height="140"></canvas><!--code for circular rating-->';
		echo '<script>';
				echo "var ctx = document.getElementById('my_canvas').getContext('2d');";
				echo 'var al = 0;';
				echo 'var start = 4.72;';
				
				echo 'var cw = ctx.canvas.width;';
				echo 'var ch = ctx.canvas.height; ';
				echo 'var diff;';
				echo 'function progressSim(){';
				echo '	diff = ((al / 100) * Math.PI*2*10).toFixed(2);';
				echo '	ctx.clearRect(0, 0, cw, ch);';
				echo '	ctx.lineWidth = 20/*outer line*/;';
				echo '	ctx.fillStyle = "orange";/*for text color*/';
				echo '	ctx.strokeStyle = "orange";/*color for circular filling*/';
				echo '	ctx.textAlign = "center";';
				echo '	ctx.font="20px Arial";';
				echo "	ctx.fillText(".$r."/*retrive rating from database to here*/, cw*.5, ch*.5+2, cw*50);";
					echo 'ctx.beginPath();';
					echo 'ctx.arc(70,70, 60, start, diff/10+start, false);';
					echo 'ctx.stroke();';
					echo "if(al >= ".$r."/*retrive rating from database to here*/*20){";
						echo 'clearTimeout(sim);';
					echo '}';
					echo 'al++;';
				echo '}';
				echo 'var sim = setInterval(progressSim,20/*parameter which decides speed of circular filling*/)';
		echo '</script>';
		
	echo '</div>';
    }?>
    </div>
  </div>
</div>
</body>
</html>