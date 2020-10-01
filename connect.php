<?php

$mysqli=mysqli_connect("localhost","root","","db_form");

echo $name=$_POST['name'];
echo "<br>";
echo $email=$_POST['email'];
echo "<br>";
echo $password=$_POST['password'];
echo "<br>";
// echo $image=$_POST['image'];

// echo $name;
// echo $email;
// echo $password;

$sql="INSERT INTO tbl_contact2(name,email,password) VALUES('$name','$email','$password')";

mysqli_query($mysqli,$sql);

?>