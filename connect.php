<?php
session_start();
$conn=mysqli_connect("localhost","root","","data");

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];

$qry="INSERT INTO `user`(`name`, `email`, `phone`, `comment`) VALUES ('$name','$email','$phone','$comment')";
if(mysqli_query($conn,$qry)){
    echo"New Record";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>