<?php
error_reporting(0);
$con = mysql_connect('mysql.hostinger.in', 'u778187361_stud', 'ADMINOFGNITHOSTEL');
$db = mysql_select_db('u778187361_gnit');


$email = $_POST['e-mail'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$password = $_POST['password'];
$password = mysql_real_escape_string($password);
$password = strip_tags($password);
$password = MD5($password);

$query = "SELECT email, password FROM stud_data WHERE email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);
$row = mysql_fetch_array($result);
if ($num == 0 || $password != $row['password'] )
	{
	$m1 = "<span style='color: red'>Invalid E-mail or Password</span>";
	header('location: login.php?m1='.$m1);
	}
else
	
		{
		session_start();
		$_SESSION['email']=$row['email'];
		header('location: login/index.html');		
		}
	



?>