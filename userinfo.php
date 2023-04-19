<?php

$con = mysqli_connect('localhost','root');
if($con)
{
    echo "Connection Sucessfull";
}
else
{
    echo "Connection Unsucessful";
}

mysqli_select_db($con,'form');

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$password = $_POST['password'];

$query = "INSERT INTO userinfo ( name, email, contact, password) 
values ('$name','$email','$contact','$password')";

echo "$query";

mysqli_query($con,$query);

header('location:signin.html');






?> 