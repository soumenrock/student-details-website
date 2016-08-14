<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php error_reporting(0);?>
<html>
						
<head>
<script type="text/javascript" src="js/crawler.js">
/* Text and/or Image Crawler Script v1.53 (c)2009-2011 John Davenport Scheuer
   as first seen in http://www.dynamicdrive.com/forums/
   username: jscheuer1 - This Notice Must Remain for Legal Use
*/

</script>
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
         
			<li class="selected"><a href="gallery.php">Gallery</a></li>
		 
            <li><a href="notice.php">Notice</a></li>
			
            <li><a href="signup.php">Signup</a></li>
			
			<li><a href="login.php">Login</a></li>
        </ul>
    </div>
    
    <div id="sub-header">
		<h2>Gallery</h2>
    </div>
	<?php
	$con = mysql_connect('mysql.hostinger.in', 'u778187361_stud', 'ADMINOFGNITHOSTEL') or die(mysql_error());
							$db = mysql_select_db('u778187361_gnit');
	?>
        
    <div id="body">            
		<div id="content">
            <div class="box">
                
				<p>&nbsp;</p>
				
				
						
					
				<legend>Move the mouse over the image frame to control the speed</legend>
				
				<div class="marquee" id="mycrawler2">
				
				<table>
				<tbody><tr><td/><tr>
				<?php
						$dirname = "login/gallery/";
						$images = glob($dirname."*");
						
						
						foreach($images as $image) 
						{
							echo '<th><img src="'.$image.'" width=200px height=200px alt="'.$image.'" /></th>';
							
						}
						?>
						</tr></tbody></table>
				</div>
				

				<script type="text/javascript">
					marqueeInit({
					uniqueid: 'mycrawler2',
					style:
					{
						'padding': '5px',
						'width': '700px',
						'height': '400px'
					},
					inc: 5, //speed - pixel increment for each iteration of this marquee's movement
					mouse: 'cursor driven', //mouseover behavior ('pause' 'cursor driven' or false)
					moveatleast: 2,
					neutral: 150,
					savedirection: true,
					random: true
					});
</script>
						
				
			

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
