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
			
            <li class="selected"><a href="signup.php">Signup</a></li>
			
			<li><a href="login.php">Login</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Signup Form</h2>
    </div>
        
    <div id="body">            
		<div id="content">
            <div class="box">
                
				<fieldset>
					<legend>Enter your Details</legend>
					<form action="signup-script.php" method="POST" enctype="multipart/form-data">
						<p><label for="name">Name:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="name" placeholder="Your Name" required = "true" /><br /></p>		
						<p><label for="image">Image:</label>
						<input type="file" name="image" id="image" required=true /><?php echo $_GET['m6'];?><br /></p>
						
						<p><label for="e-mail">E-Mail:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="e-mail" placeholder="E-mail" required = "true" value=""/><?php echo $_GET['m1'];?><br /></p>
						
						<p><label for="password">Password:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="password" placeholder="Password" required = "true"/><?php echo $_GET['m2'];?><br /></p>
						
						<p><label for="confirm_password">Confirm Password:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="password" name="confirm_password" placeholder="Retype Password" required = "true"/><br /></p>
						
						<p><label for="contact">Mobile No.:</label>
						<input style = "height:25px; padding-left:10px;border-radius:5px;" size = "25" type="text" name="contact" placeholder="Ten digit mobile number" required = "true" /><?php echo $_GET['m3'];?><br /></p>
						
						<p><label for="sex">Sex:</label>
						Male<input type="radio" name="sex" value="M" checked>
									&nbsp;&nbsp;
									Female<input type="radio" name="sex" value="F"><br /></p>
									
						<p><label for="contact">Birth Day:</label>
						<select name="day">
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04" selected>04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
										<option value="31">31</option>
									</select>
									<select name="month">
										<option value="01">Jan</option>
										<option value="02">Feb</option>
										<option value="03">Mar</option>
										<option value="04"  selected>Apr</option>
										<option value="05">May</option>
										<option value="06">Jun</option>
										<option value="07">Jul</option>
										<option value="08">Aug</option>
										<option value="09">Sep</option>
										<option value="10">oct</option>
										<option value="11">Nov</option>
										<option value="12">Dec</option>
									</select>
									<select name="year">
										<option value="1991">1991</option>
										<option value="1992">1992</option>
										<option value="1993">1993</option>
										<option value="1994">1994</option>
										<option value="1995" selected>1995</option>
										<option value="1996">1996</option>
										<option value="1997">1997</option>
										<option value="1998">1998</option>
										</select><br /></p>
						
						<p><label for="contact">Batch:</label>
						<select name="batch">
										<option value="2009">2009-2013</option>
										<option value="2010">2010-2014</option>
										<option value="2011">2011-2015</option>
										<option value="2012">2012-2016</option>
										<option value="2013" selected>2013-2017</option>
										<option value="2014">2014-2018</option>
										
									</select><br /></p>
						
						<p><label for="contact">Stream:</label>
						<select name="stream">
										<option value="CSE">CSE</option>
										<option value="IT" selected>IT</option>
										<option value="ECE">ECE</option>
										<option value="EE">EE</option>
										<option value="FT">FT</option>
										<option value="AEIE">AEIE</option>
									</select><br /></p>
						
						<p><label for="contact">Hostel:</label>
						<select name="hostel">
										<option value="NA" selected>Not Applicable</option>
										<option value="B1" >Boys Hostel 1</option>
										<option value="B2">Boys Hostel 2</option>
										<option value="B3">Boys Hostel 3</option>
										<option value="B4">Boys Hostel 4</option>
										<option value="G">Girls Hostel</option>
									</select><br /></p>
									
						<p><label for="confirm_password">Room:</label>
						<select name="room">
										<option value="99">Not Applicable</option>
										<option value="00">Guest Room</option>
										<option value="01">01</option>
										<option value="02">02</option>
										<option value="03">03</option>
										<option value="04" selected>04</option>
										<option value="05">05</option>
										<option value="06">06</option>
										<option value="07">07</option>
										<option value="08">08</option>
										<option value="09">09</option>
										<option value="10">10</option>
										<option value="11">11</option>
										<option value="12">12</option>
										<option value="13">13</option>
										<option value="14">14</option>
										<option value="15">15</option>
										<option value="16">16</option>
										<option value="17">17</option>
										<option value="18">18</option>
										<option value="19">19</option>
										<option value="20">20</option>
										<option value="21">21</option>
										<option value="22">22</option>
										<option value="23">23</option>
										<option value="24">24</option>
										<option value="25">25</option>
										<option value="26">26</option>
										<option value="27">27</option>
										<option value="28">28</option>
										<option value="29">29</option>
										<option value="30">30</option>
									</select><br /></p>
						
						
						
						<p><label for="message">Skills:</label>	
						<textarea cols="60" rows="11" name="skills" id="message">N/A</textarea><br /></p>
						
						<p><label for="message">Hobbies:</label>	
						<textarea cols="60" rows="11" name="hobbies" id="message">N/A</textarea><br /></p>
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
