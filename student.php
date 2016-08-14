<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
error_reporting(0);
?>
<html>
						
<head>
<link rel="shortcut icon" href="Images/Logo.jpg" type="image/jpg">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GNIT Hostel | Student |</title>
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
			
			<li class="selected"><a href="student.php">Students</a></li>
         
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
				
				
				
				<h3>Table</h3>
				<table>
					<tbody><tr>
						<th>Photo</th>
						<th>Name</th>
						<th>Profile Link</th>
					</tr>
					
					
					<?php
						
						$query="SELECT name, PID, imglink FROM stud_data";
						$result = mysql_query($query);
						$row = mysql_fetch_array($result);
						
						while($row)
						{
						$name = ($row['name']);
						$pid = ($row['PID']);
						$image= ($row['imglink']);
							
								
								
								echo "<form action=\"student_details.php\" method=\"GET\">";
								
								echo "<tr><td><img src=\"login/".$image."\" width=\"100px\" height=\"100px\"/></td>";
								echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<strong>".$name."</strong></td><td>&nbsp;&nbsp;<input type=\"hidden\" value=$pid name=\"student\"><input type=\"submit\" name=\"submit\" value = \"DETAILS\" style=\" background:#CC0033;border:none; color:white; font-family:georgia; font-size:14px; height: 25px; width: 70px; border-radius:5px; \"></td></tr>";
								
								
								echo "</form>";
								$row = mysql_fetch_array($result);
							}
							mysql_close($con);
					?>
					
					
				</tbody></table>
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
