<?php
include "con.php";
if($connection)
{
echo "successful";
}
else{
echo "error:.mysqli_error($connection)";
}
$name=$_POST['name'];
$noofpersons=$_POST['noofpersons'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$city=$_POST['city'];
$dateoftravelling=$_POST['dateoftravelling'];
$amount=$_POST['amount'];
$query="CREATE TABLE travel(name VARCHAR(30) NOT NULL,noofpersons VARCHAR(30),email VARCHAR(30),mobile VARCHAR(30),city VARCHAR(30),dateoftravelling VARCHAR(30),amount VARCHAR(30));";
/*if(mysqli_query($connection,$query))
{
echo "table created";
}
else{
echo "error:".mysqli_error($connection)."<br>";
}*/
$query="INSERT INTO travel VALUES('$name','$noofpersons','$email','$mobile','$city','$dateoftravelling','$amount');";
if(mysqli_query($connection,$query))
{
	echo "values inserted";
}
else{
	echo "error:".mysqli_error($connection);
}
mysqli_close($connection);
?>
