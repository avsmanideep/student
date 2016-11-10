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

<center><h1> MOCK COUNSELLING </h1></center>
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
<table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
  <tr>
    <td colspan="2">
		<div align="center">
	     <?php 
		/*$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}*/
		?>	
	    </div></td>
  </tr>
  <tr>
    <td width="95"><div align="right">First Name:</div></td>
    <td width="171"><input type="text" name="fname" /></td>
  </tr>
  <tr>
    <td><div align="right">Last Name:</div></td>
    <td><input type="text" name="lname" /></td>
  </tr>
  <tr>
    <td><div align="right">Username:</div></td>
    <td><input type="text" name="username" /></td>
  </tr>
 <tr>
    <td><div align="right">Password:</div></td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><input name="submit" type="submit" value="Submit" /></td>
  </tr>
</table>
</form>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["fname"].value;
var b=document.forms["reg"]["lname"].value;
var c=document.forms["reg"]["username"].value;
var d=document.forms["reg"]["password"].value;
if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d==""))
  {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("First name must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("Last name must be filled out");
  return false;
  }
if (c==null || c=="")
  {
  alert("Username name must be filled out");
  return false;
  }
if (d==null || d=="")
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