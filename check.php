 }}<?phpif(!empty($_POST))
	{
	$email = $_POST['email'];
	$user=$_SESSION['user'];
		$branch = $_POST['cse'];
		$db = mysqli_connect("127.0.0.1","root","","tolet");
		mysqli_query($db,"INSERT INTO counselling(username,branch) VALUES('$user','$branch')");
		}
		
?>
<?php 
if(isset($_REQUEST['submit']))
{
	
	$receive=$_POST['email'];
	$subject="counselling";
	$body=$_POST['cse'];
	
	include 'PHPMailer/class.phpmailer.php';
	//require_once 'PHPMailer/PHPMailerAutoload.php';
	//require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer();
	$mail->IsSMTP();                                      // set mailer to use SMTP
	$mail->SMTPSecure = 'ssl';

	$mail->Host = "smtp.gmail.com";  // specify main and backup server
$mail->Port = 465;
//$mail->SMTPDebug=1;

	$mail->SMTPAuth = true;     // turn on SMTP authentication
	
	$mail->Username = 'hemanthyouthstar@gmail.com';  // SMTP username

$mail->Password = 'chintubobby99'; // SMTP password

$mail->From = 'hemanthyouthstar@gmail.com';


	$mail->FromName = "Simple Mail Test";
	
	$mail->AddAddress($receive);               
   // name is optional
	
	
	
	$mail->WordWrap = 50;                                 // set word wrap to 50 characters
	
	$mail->IsHTML(true);                                  // set email format to HTML
	
	$mail->Subject = $subject;
	
	$mail->Body    = $body;
	
	if(!$mail->Send())
	{
		echo "<h1>Mailer Error:".$mail->ErrorInfo." </h1>" ;
	
	}
	else
	{
		echo "<h1>Mail Send Successfully</h1>";
    
	 ?>