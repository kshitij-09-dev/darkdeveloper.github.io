<?php

$con= mysqli_connect('localhost','root');

mysqli_select_db($con, 'portmsg');

$username=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$msg=$_POST['msg'];


$query = "insert into msg(username,email,phone,msg)
values ('$username','$email','$phone','$msg')" ;



mysqli_query($con, $query);



header('location:index.php');

?>