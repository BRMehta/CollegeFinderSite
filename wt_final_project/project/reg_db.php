<?php


 $conn = mysql_connect('localhost','root','') or die(mysql_error());
 $db = mysql_select_db('college_db', $conn) or die(mysql_error());

/*function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}*/


 if(isset($_POST['submit']))
 {
 	$name =$_POST['name'];
 	$password = md5($_POST['password']);
 	$email = $_POST['email'];
 
 	$query=mysql_query("select 'id' from student_db where username='".$name."' and email='".$email."'") or die(mysql_error());
  $q=mysql_query("select 'id' from student_db where email='".$email."'") or die(mysql_error());
 	$res=mysql_fetch_row($query);
  $r=mysql_fetch_row($q);
 		if(!$res && !$r){
 			if($name!='' && $password!='' && $email!='' && $password!='d41d8cd98f00b204e9800998ecf8427e' ){
 				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			echo '<script type="text/javascript">alert("Enter a valid email id");</script>'; 
 				}
      			else{
  					$sql = mysql_query("INSERT INTO student_db(username, password, email) VALUES ('$name', '$password', '$email')");
    				echo '<script type="text/javascript">alert("Successfully registered");</script>';
    			}
 			  }
 			else{
  				echo '<script type="text/javascript">alert("Please enter correct details!");</script>';
 			  }
 		 }
		else{
          echo '<script type="text/javascript">alert("Already registered.");</script>';
	  }
}

 mysql_close($conn);
?>