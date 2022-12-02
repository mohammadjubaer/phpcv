<?php
$host ="localhost";
$user ="jubaer";
$pwd ="tanvir1#";
$tname ="data1";
$conn = mysqli_connect($host,$user,$pwd,$tname);
if($conn==false){
    echo "connection error";
   
}
 $name =$_REQUEST["name"];
 $email =$_REQUEST["email"];
 $message =$_REQUEST["message"];

$insertQuery ="INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";
$runQuery = mysqli_query($conn,$insertQuery);

    ?>