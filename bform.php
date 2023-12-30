<?php
include "rel.php";
if($connection)
{
echo "successful";
}
else{
echo "error:.mysqli_error($connection)";
}
$name=$_POST['name'];

$email=$_POST['email'];
$mobile=$_POST['mobile'];

$query="CREATE TABLE book(name VARCHAR(30) NOT NULL,email VARCHAR(30),mobile VARCHAR(30));";
if(mysqli_query($connection,$query))
{
echo "table created";
}
else{
echo "error:".mysqli_error($connection)."<br>";
}
$query="INSERT INTO book VALUES('$name','$email','$mobile');";
if(mysqli_query($connection,$query))
{
	echo "values inserted";
}
else{
	echo "error:".mysqli_error($connection);
}
mysqli_close($connection);
?>
