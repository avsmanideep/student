﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
?>
   <form name="form1" method="post" action="checklogin.php" onsubmit="return validateForm()">	
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>

<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong><center> LOGIN </center></strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="username" type="text" id="username"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["username"].value;
var b=document.forms["reg"]["password"].value;
if ((a==null || a=="") && (b==null || b==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("user name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("password must be filled out");
  return false;
  }
}
</script>

 
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