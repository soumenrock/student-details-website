<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting(0);
?>
<html>
						
<head>
<link rel="shortcut icon" href="Images/Logo.jpg" type="image/jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GNIT Hostel | Profile |</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


<!--
widget, a free CSS web template by ZyPOP (www.zypopwebtemplates.com)



License: Creative Commons Attribution
//-->
</head>

<body>
<div id="container">
	<div id="header">
    	<h1><a href="/">GNIT<strong>Hostel</strong></a></h1>
        <h2>A non official site managed by hostel students.</h2>
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li><a href="index.html">Home</a></li>
			
			<li><a href="student.php">Students</a></li>
         
			<li><a href="gallery.php">Gallery</a></li>
		 
            <li><a href="notice.php">Notice</a></li>
			
            <li><a href="signup.php">Signup</a></li>
			
			<li><a href="login.php">Login</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Students staying at Hostel</h2>
    </div>
	<?php
	$con = mysql_connect('mysql.hostinger.in', 'u778187361_stud', 'ADMINOFGNITHOSTEL') or die(mysql_error());
							$db = mysql_select_db('u778187361_gnit');
	?>
        
    <div id="body">            
		<div id="content">
            <div class="box">
                
				<p>&nbsp;</p>
				
				
				
				
					
					<table>
					<?php
						
						$pid= $_GET['student'];
						$query="SELECT * FROM stud_data WHERE PID=$pid";
						$result = mysql_query($query);
						$result = mysql_fetch_array($result);
						if($result)
					{
						$name = ($result['name']);
						$email = ($result['email']);
						$contact = ($result['contact']);
						$sex = ($result['sex']);
						$birthday = ($result['birthday']);
						$stream = ($result['stream']);
						$batch = ($result['batch']);
						$batch1=$batch+4;
						$hostel = ($result['hostel']);
						$room = ($result['room']);
						$skills = ($result['skills']);
						$hobbies = ($result['hobbies']);
						$image = ($result['imglink']);
						
						
						echo "<tr><td>&nbsp;</td><td><img src=\"login/".$image."\" width=\"200\" height=\"200px\"/></td></tr>";
						
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;><br>&nbsp;&nbsp;&nbsp;<font face=\"arial black \"><strong>name :</td><td></strong></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$name."</b></font></div></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">e-mail :</td><td></font><font color=#CC3333 face=\"comic sans ms\" style=\"text-transform: lowercase;\"><b> ".$email."</b></font></div></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">contact :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> +91".$contact."</b></font></div></td></tr>";
						if($sex=="M")
							echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Sex :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Male"."</b></font></div></tr></td>";
						else
							echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Sex :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Female"."</b></font></div></tr></td>";
						
						$birth = ($birthday[8]).($birthday[9])."/".($birthday[5]).($birthday[6])."/".($birthday[0]).($birthday[1]).($birthday[2]).($birthday[3]);
						
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">birthday :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$birth."</b></font></div></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">stream :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$stream."</b></font></div></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">session :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$batch."-".$batch1."</b></font></div></td></tr>";
						
						switch($hostel)
						{
							case 'B1':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."boys hostel 1"."</b></font></div></td></tr>";
									break;
							case 'B2':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."boys hostel 2"."</b></font></div></td></tr>";
									break;
							case 'B3':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."boys hostel 3"."</b></font></div></td></tr>";
									break;
							case 'B4':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."boys hostel 4"."</b></font></div></td></tr>";
									break;
							case 'G':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Girls hostel"."</b></font></div></td></tr>";
									break;
							case 'NA':echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hostel :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Not Applicable"."</b></font></div></td></tr>";
									break;
						}
						if($room==00)
							echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">room :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Guest Room"."</b></font></div></td></tr>";
						else if($room==99)
							echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">room :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> "."Not Applicable"."</b></font></div></td></tr>";
						else
							echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">room :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$room."</b></font></div></td></tr>";
							
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">skills :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$skills."</b></font></div></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;font-family: copperplate gothic light;\"><font face=\"arial black \">Hobbies :</td><td></font><font color=#CC3333 face=\"comic sans ms\"><b> ".$hobbies."</b></font></div></td></tr>";
					}
					else 
					{
						echo "<tr><td>&nbsp;</td><td><img src=\"images/Logo.jpg\" width=\"200\" height=\"200px\"/></td></tr>";
						echo "<tr><td><div style=\"text-transform: uppercase;text-align: left;><br>&nbsp;&nbsp;&nbsp;<font face=\"arial black \"><strong>Error 404</td><td></strong></font><font color=#CC3333 face=\"comic sans ms\"><b> Page Not Found</b></font></div></td></tr>";
					}	
							
							mysql_close($con);
					?>
					
					
				</table>
				<p>&nbsp;</p>
				
			

            </div>
        </div>
        
        <div class="sidebar">
            <ul>	
                <li>
                    <h4><span>About <strong>Us</strong></span></h4>
                    <ul>
                        <li>
                        	<p style="margin: 0;">We are working very hard to keep our site up to date so that we can serve you better browsing.</p>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <h4 class="h4"><span>Important <strong>Sites</strong></span></h4>
                    <ul>
                        <li><a href="http://www.gnit.ac.in" title="gnit" target="_new"><strong>Our College</strong></a> - visit this link to know about our college </li>
                        <li><a href="http://www.gnitashu.blogspot.com" title="gnitashu" target="_new"><strong>GNIT ASHu </strong></a> - know about the different educational or cultural events of our college and you can also browse some of the captured moments of these events</li>
                       
                    </ul>
                </li>
                
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
      <div class="footer-content">

        <div class="footer-box">
            <h4>About our site</h4>

            <p>
                This website is managed by GNIT Boys Hostel 1 students and <a href="http://www.rocksite.5gbfree.com/" target="_new">Rock & his team</a>. 
            </p>
        </div>
        
       
        <div class="clear"></div> 
    </div>
    <div id="footer-links">

     <!-- A link to http://www.zypopwebtemplates.com must remain. To remove link see http://www.zypopwebtemplates.com/licensing -->
            <p>&copy; GNIT Hostel 2015. <a href="http://zypopwebtemplates.com/" target="_new">Free Web Layouts</a> by ZyPOP</p>
    </div>  
</div>
</body>
</html>
