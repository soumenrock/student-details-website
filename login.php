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
			
			<li><a href="student.php">Students</a></li>
         
			<li><a href="gallery.php">Gallery</a></li>
		 
            <li><a href="notice.php">Notice</a></li>
			
            <li><a href="signup.php">Signup</a></li>
			
			<li class="selected"><a href="login.php">Login</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Signup Form</h2>
    </div>
        
    <div id="body">            
		<div id="content">
            <div class="box">
                
				<fieldset>
					<legend>Enter your Login Credentials</legend>
					
					<form action="login-script.php" method="POST" enctype="multipart/form-data">
						
						<p><br /><?php echo $_GET['m1'];?><br /></p>
						<p><label for="e-mail">E-Mail:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true" value=""/><br /></p>
						
						<p><label for="password">Password:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/><br /></p>
						<p><a href="password-script.php"><strong>Forget Password?</strong></a><br /></p>
						
						<p><input name="submit" class="formbutton" value="submit" type="submit" /></p>
					</form>
					
				</fieldset>

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
                This website is managed by GNIT Boys Hostel 1 students and <a href="http://www.rocksite.5gbfree.com/"target="_new">Rock & his team</a>. 
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
