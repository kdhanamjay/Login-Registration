<?php

//the example of inserting data with variable from HTML form
mysql_connect("localhost","root","");//database connection
mysql_select_db("EDM");

// Get values from form 
$aadharno = $_POST['aadharno'];
$name = $_POST['name'];
$fathername = $_POST['fathername'];
$address = $_POST['address'];
$country = $_POST['country'];
$city = $_POST['city'];
$state = $_POST['state'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$qualification = $_POST['qualification'];
$emprole = $_POST['emprole'];

//inserting data order
$order = "INSERT INTO employee
	 (aadharno,name,fathername,address,country,city,state,email,mobile,qualification,emprole)
	  VALUES
	   ('$aadharno','$name','$fathername','$address','$country','$city','$state','$email','$mobile','$qualification','$emprole')";

//declare in the order variable
$result = mysql_query($order);	//order executes
if($result)
{
 echo("$name Sucessfully registered");
}
else
{
 echo("
Registration failed");
}

?>

<center>
<br><br><br>

<a href="html_form.php">GO BACK</a>
</center>