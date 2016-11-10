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
		//session_destroy();
		?>
		<?php 


if(isset($_REQUEST['submit']))
{
	
	$receive=$_POST['email'];
	$subject="COUNSELLING DETAILS";
	$body=$_SESSION['branch'];
	
	include 'PHPMailer/class.phpmailer.php';
	//require_once 'PHPMailer/PHPMailerAutoload.php';
	//require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->SMTPSecure = 'ssl';

	$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 465;
$mail->SMTPDebug=1;

	$mail->SMTPAuth = true;     // turn on SMTP authentication
	
	$mail->Username = 'hemanthyouthstar@gmail.com';  // SMTP username

$mail->Password = 'chintubobby99'; // SMTP password

$mail->From = 'hemathyouthstar@gmail.com';


	$mail->FromName = "Simple Mail Test";
	
	$mail->AddAddress($receive);               
   // name is optional
	
	
	
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	
	$mail->IsHTML(true);                                  // set email format to HTML
	
	$mail->Subject = $subject;
	
	$mail->Body    = $body;
	
	if(!$mail->Send())
	{
		echo "<h1>Mailer Error:".$mail->ErrorInfo." '</h1>'" ;
	
	}
	else{
		echo "<h1>Mail Send Successfully</h1>".header('Location:mailsent.php');}
		
}
?>
        <center>
	 <?php echo "BRANCH SELECTED:".$_SESSION['branch'];
	       echo "<br>";  
	       echo "USER NAME:".$_SESSION['user']; ?>
	  
		<h1> Counselling Completed!</h3>
		<form action="#" method="POST">
		EMAIL:<input type="email" name="email"><br>
		<input type="submit" name="submit">
		</form>
     </center> 
	 
 
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