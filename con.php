<?php
$connection=mysqli_connect("localhost","root","welcome123","travelling");
if($connection)
{
    echo "successfully connected";
}
else{
    echo
        "error:.mysqli_error($connection)";
}
?>
