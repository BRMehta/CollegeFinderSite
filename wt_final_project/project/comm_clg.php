
<!DOCTYPE html>
<html>
<title>College Spree</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<body><style>.dis {pointer-events:none; //This makes it not clickable}</style>
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
          <li class="dropdown active dis">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stream
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="../project/science_clg.php">Science</a></li>
                    <li><a href="../project/comm_clg.php">Commerce</a></li>
                    <li><a href="../project/diploma_clg.php">Diploma</a></li>
                    <li><a href="../project/engg_clg.php">Engineering</a></li>
              </ul>
            </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li id="Logout" class="disable_reg"><a href="logout.php"><span class="glyphicon glyphicon-user"></span> Log out</a></li>      
          </ul>
          <!--search-->
          <form action="../project/search_c.php" method="POST" class="navbar-form navbar-right" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Find colleges by name..." name="srch-term" id="srch-term">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit" name="submit"><i class="glyphicon glyphicon-search"></i></button>
                 </div>
            </div>
          </form><!--end of search-->
      </div>
    </div><!--end of container-->
  </nav><!--End navbar-->
 


  
  <div class="w3-quarter">
    <ul class="w3-navbar">
      <li class="w3-left"><a href="#"><i class="fa fa-search"></i></a></li>
      <li class="w3-navitem w3-right w3-hide-small"><img class="w3-circle" src="img_avtar.jpg" style="height:35px;"></li>
    </ul>
  </div>


<div class="w3-row-padding w3-theme">
  <h1></h1>
</div>



<div class="w3-row-padding w3-theme" >
<form action="../project/percent_c.php"  method="POST">
<center><label for="percentage">Enter percentage.</label><input type=number name="num" step=0.01 min=35 max=100 color:blue value="35"><input type="submit" name="Submit" ></center></form>
<div class="w3-row-padding w3-theme" >

<?php
include('db_connect.php');

$result = mysql_query("SELECT * FROM comm_clg_db") or die(mysql_error());
while($row = mysql_fetch_array( $result )) {
$id = $row['id'];
$name = $row['name'];
$loc = $row['location'];
$img = $row['img_url'];

echo '<div class="w3-third w3-section" style="width:30%;height:300px;padding-top:1px;padding-right:10px;padding-bottom:10px;padding-left:60px;">';
echo '<div id="123" class="w3-card-4">';

echo "<a href='college_details_c.php?eid=".$id."' style='text-decoration:none;'>";

echo "<img src='".$img."' style='width:100%;height:200px'>";
echo '<div class="w3-container w3-white" style="height=300px">';
echo '<h6>'.$name .'</h6>';
//echo '<p>'. $loc.'</p>';
//echo '<p>5.7</p>';
echo '</a>';
//echo '<button id="123"><a href="info.html">More info</a></button>';
echo '</div></div></div>';
//echo '<script>function myFunction() { <a href="../project/info.html"}</script>';*/
}
?>
</div>
</body>
</html>
