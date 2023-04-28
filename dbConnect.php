<?php

$db = mysqli_connect("localhost","root","","resto");  

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>