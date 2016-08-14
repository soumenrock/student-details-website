<?php

$con = mysql_connect('mysql.hostinger.in', 'u778187361_stud', 'ADMINOFGNITHOSTEL');
$db = mysql_select_db('u778187361_gnit');

$name = $_POST['name'];
$name = mysql_real_escape_string($name);
$name = strip_tags($name);

$email = $_POST['e-mail'];
$email = mysql_real_escape_string($email);
$email = strip_tags($email);

$password = $_POST['password'];

$confirm_password = $_POST['confirm_password'];





$password = mysql_real_escape_string($password);
$password = strip_tags($password);


$confirm_password = mysql_real_escape_string($confirm_password);
$confirm_password = strip_tags($confirm_password);

$date= date("m-d-y").date("h-i-sa");


$contact = $_POST['contact'];
$contact = mysql_real_escape_string($contact);
$contact = strip_tags($contact);

$sex = $_POST['sex'];
$sex = mysql_real_escape_string($sex);
$sex = strip_tags($sex);

$day = $_POST['day'];
$day = mysql_real_escape_string($day);
$day = strip_tags($day);

$month = $_POST['month'];
$month = mysql_real_escape_string($month);
$month = strip_tags($month);

$year= $_POST['year'];
$year = mysql_real_escape_string($year);
$year = strip_tags($year);

$birthday= $year."/".$month."/".$day;


$stream= $_POST['stream'];
$stream = mysql_real_escape_string($stream);
$stream = strip_tags($stream);

$batch= $_POST['batch'];
$batch = mysql_real_escape_string($batch);
$batch = strip_tags($batch);

$hostel= $_POST['hostel'];
$hostel = mysql_real_escape_string($hostel);
$hostel = strip_tags($hostel);

$room= $_POST['room'];
$room = mysql_real_escape_string($room);
$room = strip_tags($room);

$skills= $_POST['skills'];
$skills = mysql_real_escape_string($skills);
$skills = strip_tags($skills);

$hobbies= $_POST['hobbies'];
$hobbies = mysql_real_escape_string($hobbies);
$hobbies = strip_tags($hobbies);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);



$type="G";


$regex_email= "/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/" ;
$regex_num = "/^[789][0-9]{9}$/";
$query = "SELECT * FROM stud_data WHERE Email='$email'";
$result = mysql_query($query);
$num = mysql_num_rows($result);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check != false) {
        
        $uploadOk = 1;
    } else {
        
        $uploadOk = 0;
    }
}
// Check file size
if ($_FILES["image"]["size"] > 500000) {
    $uploadOk = 0;
}
// Allow certain file formats
if(($imageFileType == "jpg" || $imageFileType == "jpeg")||($imageFileType == "JPG" || $imageFileType == "JPEG")) {
    
    $uploadOk = 1;
}
else
	$uploadOk = 0;
 if ($num != 0)
	{
	$m1 = "<span style='color:red;'>Email Already Exists</span>";
	header('location: signup.php?m1='.$m1);
	}
else if (!preg_match($regex_email, $email))
	{
	$m1 = "<span style='color: red;'>Not a valid Email Id</span>";
	header('location: signup.php?m1='.$m1);
	}
else if (!preg_match($regex_num, $contact))
	{
	$m3 = "<span style='color: red;'>Not a valid phone number</span>";
	header('location: signup.php?m3='.$m3);
	} 
else if(((strlen($password))<= 6)||((strlen($confirm_password))<= 6))
	{
		$m2 = "<span style='color:red;'>Password should contain more than 6 charecters</span>";
		header('location: signup.php?m2='.$m2);
	}

else if($confirm_password != $password)
	{
		$m2 = "<span style='color:red;'>Passwords do not match</span>";
		header('location: signup.php?m2='.$m2);
	}
	// Check if $uploadOk is set to 0 by an error
// if everything is ok, try to upload file
else if ($uploadOk == 1) {
$target_file = $target_dir .date("m-d-y").date("h-i-sa").".$imageFileType"; //renaming the file to the current time as e.g. 02-03-15-01-13-18pm.jpg
    if (move_uploaded_file($_FILES["image"]["tmp_name"],"login/".$target_file)) {
			$password = MD5($password);
	$query = "INSERT INTO stud_data
	(name, email, password, contact, sex, birthday, stream, batch, hostel, room, skills, hobbies,type, imglink, date_time)
	VALUES
	('$name','$email','$password','$contact','$sex','$birthday','$stream','$batch','$hostel','$room','$skills','$hobbies','$type', '$target_file', '$date')";
	
	mysql_query($query);
	session_start();
	$_SESSION['email']=$email;
	header('location: login/index.html');
        
    } else {
        $m6 = "<span style='color:red;'>Something went wrong. Please try after some time or call +918102097759</span>";
		header('location: signup.php?m6='.$m6);
    }
}
else
	{
		 $m6 = "<br><span style='color:red;'>Either your file is too large or the format is not supported.</span>";
		header('location: signup.php?m6='.$m6);

	}
	
?>