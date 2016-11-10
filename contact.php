 <?php
 @mysql_connect("localhost", "root", "") or die(mysql_error()); 
 @mysql_select_db("contactinfo") or die(mysql_error()); 
 //$name=$_POST['author'];
 //$email=$_POST['email'];
 //$phoneno=$_POST['mobile'];
 //$message=$_POST['text'];
$sql = "INSERT INTO contact (name,email,mobileno,message)
VALUES ('$_POST[author]','$_POST[email]','$_POST[mobile]','$_POST[text]')";
@mysql_query($sql);
header('Location:http://localhost:8087/studentvisio/contact.html');
?>
 
 