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
		session_start();?>
		
	<?php
	if(!empty($_POST))
	{
	   $user=$_SESSION['user'];
		$branch = $_POST['cse'];
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		mysqli_query($db,"INSERT INTO counselling(username,branch) VALUES('$user','$branch')");
		$_SESSION['branch']=$branch;
	}
?>


<div id="head">
<center><h1 id="h">COUNSELLING SYSTEM</h1></center>
</div>

<form name="course" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
<br><br>
<center><table border="1">
<tr>
<td id="title">BRANCH</td>
<td id="title">SELECT</td>
<td id="title">FILLED</td>
<td id="title">AVAILABLE</td >
</tr>
<tr>
<td>Computer Science</td><td><input type="radio" value="CSE" name="cse"></td>
<td>
	<?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='CSE'");
		$row = mysqli_fetch_array($result);
		$CSE_filled = $row['C'];
		echo $CSE_filled;
	?>
</td>
<td>
	<?php echo 200-$CSE_filled; ?>

</td>
</tr>
<tr>
<td>Mechanical</td><td><input type="radio" value="ME" name="cse"></td>
<td><?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='me'");
		$row = mysqli_fetch_array($result);
		$me_filled = $row['C'];
		echo $me_filled;
	?></td>
<td>
<?php echo 200-$me_filled; ?>
</td>
</tr>
<tr>
<td>Electrical Communicational Engineering</td><td><input type="radio" value="ECE" name="cse"></td>
<td>
<?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='ece'");
		$row = mysqli_fetch_array($result);
		$ece_filled = $row['C'];
		echo $ece_filled;
	?>
</td>
<td>
<?php echo 200-$ece_filled; ?>
</td>
</tr>
<tr>
<td>Electrical and elctronics Engineering</td><td><input type="radio" value="EEE" name="cse"></td>
<td>
<?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='eee'");
		$row = mysqli_fetch_array($result);
		$eee_filled = $row['C'];
		echo $eee_filled;
	?>
</td>
<td>
<?php echo 200-$eee_filled; ?>
</td>
</tr>
<tr>
<td>Civil Engineering</td><td><input type="radio" value="civil" name="cse"></td>
<td>
	<?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='civil'");
		$row = mysqli_fetch_array($result);
		$civil_filled = $row['C'];
		echo $civil_filled;
	?>
</td>
<td>
	<?php echo 200-$civil_filled; ?>

</td>
</tr>
<tr>
<td>Mtech in Sowftware Engineering</td><td><input type="radio" value="ms" name="cse"></td>
<td>
	<?php  
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		$result = mysqli_query($db,"SELECT COUNT(*) AS C FROM counselling WHERE branch='ms'");
		$row = mysqli_fetch_array($result);
		$ms_filled = $row['C'];
		echo $ms_filled;
	?>
</td>
<td>
	<?php echo 200-$ms_filled; ?>

</td>
</tr>
</table></center> <br><br>
<center><input type="submit"  name="counselling_btn" value="submit"></center>
</form>



<?php if(isset($_POST['counselling_btn'])) 
	{
	
	header('Location:complete.php');
	}
?>
 
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