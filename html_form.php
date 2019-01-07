<html>
<head>
<title>Employee Details Management</title>
</head>
<body bgcolor="#40a3bf">
<form method="post" action="input.php"><br><br><br>
<table cellpadding="2" cellspacing="2" border="0" align="left">
<tr>
<u><b>Enter Below details</b></u><br><br><br>
</tr>
<tr><td>Aadharcard No</td><td><input type="text" name="aadharno" size="20"></td></tr>
  
<tr><td>Name</td><td><input type="text" name="name" size="20"></td></tr>
    
  <tr><td>FatherName</td><td><input type="text" name="fathername" size="20"></td></tr>
    
  <tr><td>Address</td><td><textarea name="address" value="" cols="16" rows="4"></textarea></td></tr>
   
  <tr><td>Country</td><td><input type="text" value="" name="country"/></td></tr>
  
  <tr><td>City</td><td><input type="text" value="" name="city"/></td></tr>
   
  <tr><td>State</td><td><input type="text" value="" name="state"/></td></tr>
  
  <tr><td>E-Mail</td><td><input type="email" name="email" size="20"></td></tr>
  
  <tr><td>Mobile</td><td><input type="text" name="mobile" size="20"></td></tr>
  
  <tr><td>Qualification</td><td><input type="text" name="qualification" size="20"></td></tr>
  
  <tr><td>Employee Role</td><td><input type="text" name="emprole" size="20" alt="Job description"></td></tr>
  
  <tr><td><input type="submit" name="submit" value="Register"></td><td><input type="reset" name="reset" value="Reset"></td></tr>
  
</form>
</table>

   <?php 
	 	 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysql_select_db("EDM",$link) or die ("Cannot select the database!");
	 $query="SELECT * FROM employee";
		
		  $resource=mysql_query($query,$link);
		  
		  
		  echo "<table align=\"right\" border=\"1\" width=\"15%\">
		  
		<tr><caption><B>Registered Users</B></caption></tr><tr><td><b>AadharNo</b></td><td><b>Name</b></td></tr> ";
while($result=mysql_fetch_array($resource))
	{ 
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td></tr>";
	} echo "</table>";
	 ?>


 
<!-- ends here component-->
</body>
</html>