<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
//$http_referer = $_SERVER['HTTP_REFERER'];
if(isset($_POST['submit']) && isset($_SESSION))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('college_db') or die(mysql_error());

 $name=$_POST['username'];
 $password=$_POST['password'];
 $pwd=md5($password);
  if($name!=''&&$pwd!=''){
    $query=mysql_query("select 'id' from student_db where username='".$name."' and password='".$pwd."'") or die(mysql_error());
    $res=mysql_fetch_row($query);
    if($res){
      $_SESSION['name']=$name;
      header('location:home.html');

    }
    else{
      echo '<script type="text/javascript">alert("Please enter correct details");</script>';
    }
  }
  else{
    echo '<script type="text/javascript">alert("Please enter username and password");</script>';
  }
}
?>
<form action="../project/pass.php"></form>

