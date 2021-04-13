<?php
require 'pass.php';
if(isset($_SESSION['name'])){
	unset($_SESSION['name']);
	header('location:homepage.html');
}else

?>