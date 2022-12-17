<?php

$con = mysqli_connect("localhost:4306", "root", "", "store");
if (!$con){
    die(mysqli_error($con));
} 

?>