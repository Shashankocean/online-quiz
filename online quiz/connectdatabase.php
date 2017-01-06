<?php

$con = mysqli_connect('localhost','root','','quizi');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
?>