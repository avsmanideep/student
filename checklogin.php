<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Services</title>
<meta name="keywords" content="extreme, services, css templates, website templates, web design" />
<meta name="description" content="Extreme is a free website template that can be used for any purpose" />
<link href="css/studentvisio_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
</head>
<body>
<div id="studentvisio_header_wrapper">
	<div id="studentvisio_header">

		<div id="site_title">
            <h1><a href="index.html">
                <img src="images/stvisiologo.png" width="267" height="129" />      
            </a></h1>
        </div>
        
        <div id="studentvisio_menu">
            <ul><br /><br />
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="services.html" class="current">Services</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>    	
    	</div> <!-- end of templatemo_menu -->
        
        <div class="cleaner"></div>
	</div> <!-- end of header -->
</div> <!-- end of header_wrapper -->

<div id="studentvisio_content_wrapper">
	<div id="studentvisio_content">

<?php
session_start();
$_SESSION['user']=$_POST['username'];

$host="localhost"; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name="tolet"; // Database name 
$tbl_name="login"; // Table name 
include 'connection.php';


// username and password sent from form 
$username=$_POST['username']; 
$password=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("username");
//session_register("password"); 
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>
<html>
<body>
<form name="back" method="POST" action="login.php">
<input type="submit" value="Go Back">
</form>
</body>
</html>

 
	</div> <!-- end of content -->
</div> <!-- end of content_wrapper -->

<div id="studentvisio_footer_wrapper">
	<div id="studentvisio_footer">
    
    	<div class="footer_box">
        
        	<h3>Add Us</h3>
        
           
            <ul class="footer_menu">
                  <li><a href="https://www.facebook.com/hemanth.bobby.3 target="_parent">HEMANTH</a></li> 
                <li><a href="https://www.facebook.com/crazydeeps.ckt?fref=ts" target="_parent">SAIVINAY</a></li> 
				<li><a href="https://www.facebook.com/anilkumar.balagonda?fref=ts&ref=br_tf" target="_parent">AKSHAY</a></li>
                <li><a href="https://www.facebook.com/studentvisio" target="_parent">Like Us</a></li>              
            </ul>

        </div>
        
        <div class="footer_box">
        
            <div class="footer_menu">
            
                <h3>Navigation</h3>
    
                <ul class="footer_menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                
            </div>
		</div>
        
        <div class="footer_box">
        
            <div class="footer_menu">
            
              <h3>About Us</h3>
    			
                <img src="images/stvisiologo.png" alt="about us" width="232" height="104" />
                <p>We are from VIT university,Chennai.We love to code and we love to give evrything as open source.</p>
                
                <div class="button"><a href="about.html">Read More</a></div>
                
            </div>
            
        </div>
	
    	<div class="cleaner"></div>
    </div> <!-- end of footer -->
</div> <!-- end of footer wrapper -->    

<div id="studentvisio_copyright_wrapper">
	<div id="studentvisio_copyright">
    
		Copyright © 2012 <a href="#">studentvisio.com</a>| 
        Designed by <a href="about.html" target="_parent">Studentvisioteam</a>  
        
        
    </div> <!-- end of templatemo_copyright -->
</div> <!-- end of copyright wrapper -->
</body>
</html>