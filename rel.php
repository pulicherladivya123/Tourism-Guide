<?php
$connection=mysqli_connect("localhost","root","welcome123","travelbooking");
if($connection)
{
    echo "successfully connected";
}
else{
    echo
        "error:.mysqli_error($connection)";
}
?>
