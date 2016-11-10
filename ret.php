 <?php
 @mysql_connect("127.0.0.1", "root", "") or die(mysql_error()); 
 @mysql_select_db("indiauniversities") or die(mysql_error()); 
 
 $max=100; 
//*************************************************************************************************
//*************************************************************************************************
 if(@$_GET["indiauni"]=='centraluni')     //******** FOR CENTRAL UNIVERSITIES **********//
 {
 $var1=@$_GET[marks]; 
 if(($var1>=60)&&($var1<65))  //marks between 60 and 65
 {
 echo "<h2>The possible colleges are:</h2></br>";
 $data = @mysql_query("SELECT * FROM central_institutes WHERE marks >= 60 AND marks<65 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 
 
 if(($var1>=65)&&($var1<70)) //marks between 65 and 70
 {
 echo "<h2>The possible colleges are:</h2></br>";
 $data = @mysql_query("SELECT * FROM central_institutes WHERE marks >= 65 AND marks<70 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 
 
 if(($var1>=70)&&($var1<=$max))  //marks >= 70
 {
 echo "<h2>The possible colleges are:</h2></br>";
 $data = @mysql_query("SELECT * FROM central_institutes WHERE marks >= 70 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 
 if($var1>100)   // for other results
 {
  echo "<tr>";
  echo "<th><h2>Invaild Data</h2></th>";
  echo "</tr>";
 }
 
 if($var1<60)
 {
  echo "<tr>";
  echo "<th><h2>No colleges available</h2></th>";
  echo "</tr>";
 }
 
 }
 
 //**************************************************************************************
 //**************************************************************************************

 if(@$_GET["indiauni"]=='deemeduni')     //*********** FOR DEEMED UNIVERSITIES ********//
{
$var2=@$_GET[marks];

if(($var2>=65)&&($var2<70))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 65 AND marks<70 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if(($var2>=70)&&($var2<75))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 70 AND marks<75 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if(($var2>=75)&&($var2<80))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 75 AND marks<80 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if(($var2>=80)&&($var2<85))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 80 AND marks<85 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if(($var2>=85)&&($var2<90))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 85 AND marks<90 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if(($var2>=90)&&($var2<=100))
{
echo "<h2>The possible colleges are:</h2></br>";
$data1 = @mysql_query("SELECT * FROM deemed_institutes WHERE marks >= 90 AND marks<100 ")
 or die(@mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = @mysql_fetch_array( $data1 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
}

if($var2>100)
{
 echo "<tr>";
 echo "<th><h2>Invaild Data</h2></th>";
 echo "</tr>";
}

if($var2<65)
 {
  echo "<tr>";
  echo "<th><h2>No colleges available</h2></th>";
  echo "</tr>";
 }
}

//*************************************************************************************
//*************************************************************************************

 if(@$_GET["indiauni"]=='openuni')  //*********** FOR OPEN UNIVERSITIES **********//
 {
 $var3=@$_GET[marks];
 if(($var3>=60)&&($var3<=100))
 { 
 echo "<h2>The possible colleges are:</h2></br>";
 $data2 = mysql_query("SELECT * FROM open_institutes WHERE marks >= 60 AND marks <= 100 ")
 or die(mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = mysql_fetch_array( $data2 )) 
 { 
   echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 if($var3>100)
 {
 echo "<tr>";
 echo "<th><h2>Invaild Data</h2></th>";
 echo "</tr>";
 }
 if($var3<60)
 {
  echo "<tr>";
  echo "<th><h2>No colleges available</h2></th>";
  echo "</tr>";
 }
}
 
//***************************************************************************************
//***************************************************************************************
 
if(@$_GET["indiauni"]=='privateuni')  // ******* FOR PRIVATE UNIVERSITIES *********//
 {
 $var4=@$_GET[marks];
 if(($var4>=65)&&($var4<70))
 {
 echo "<h2>The possible colleges are:</h2></br>";
 $data3 = mysql_query("SELECT * FROM private_institutes WHERE marks >= 65 AND marks < 70 ")
 or die(mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = mysql_fetch_array( $data3 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 
 if(($var4>=70)&&($var4<=100))
 {
 echo "<h2>The possible colleges are:</h2></br>";
 $data3 = mysql_query("SELECT * FROM private_institutes WHERE marks >= 70 AND marks <= 100 ")
 or die(mysql_error()); 
 echo "<table border cellpadding=20>"; 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 while($info = mysql_fetch_array( $data3 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 
 if($var4>100)
 {
 echo "<tr>";
 echo "<th><h2>Invaild Data</h2></th>";
 echo "</tr>";
 }
 if($var4<65)
 {
  echo "<tr>";
  echo "<th><h2>No colleges available</h2></th>";
  echo "</tr>";
 }
} 
//**************************************************************************************
//**************************************************************************************
 
if(@$_GET["indiauni"]=='stateuni')    //********* FOR STATE UNIVERSITIES ***********//
{
$var5=@$_GET[marks];
if(($var5>=65)&&($var5<=100))
{
echo "<h2>The possible colleges are:</h2></br>";
$data4 = mysql_query("SELECT * FROM state_institutes WHERE marks >=65 AND marks <=100")
 or die(mysql_error()); 
 
 echo "<table border cellpadding=20>"; 
 
 echo "<tr>"; 
 echo "<th>University Name:</th>";
 echo "<th>Location:</th> ";
 echo "<th>Web Address:</th>";
 echo "</tr>";
 
 while($info = mysql_fetch_array( $data4 )) 
 { 
 echo "<tr>";
 echo "<td>".$info['uniname'] . "</td>"; 
 echo "<td>".$info['place'] . "</td>";
 echo "<td>".$info['link'] . "</td>"; 
 echo "</tr>"; 
 } 
 echo "</table>"; 
 }
 if($var5>100)
 {
 echo "<tr>";
 echo "<th><h2>Invaild Data</h2></th>";
 echo "</tr>";
 }
 if($var5<65)
 {
  echo "<tr>";
  echo "<th><h2>No colleges available</h2></th>";
  echo "</tr>";
 }
}
 $end;
 ?> 