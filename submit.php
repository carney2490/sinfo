<?php


  $connect = new mysqli ('127.0.0.1', 'root', "" ,'registration') or die ('could not connect');

if ($connect -> connect_error){
    die('connection failed');
} echo "connected successfully";


$name= $_POST['name'];
$street_address= $_POST['street_address'];
$citystate_zipcode= $_POST['citystate_zipcode'];
$email_address= $_POST['email_address'];
$phone_no=$_POST['phone_no'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$rank= $_POST['rank'];
$courses= $_POST['courses'];
$in_order= $_POST['in_order'];
$of_interest= $_POST['of_interest'];


$sql="INSERT INTO reginfo VALUES('$name','$street_address','$citystate_zipcode','$email_address','$phone_no','$dob','$sex','$rank','$courses','$in_order','$of_interest')";

if ($connect ->query ($sql) === TRUE){
   echo "new record added";
 $information = fopen("sub.csv", "a");
 $info = "$name," . "$street_address," . "$citystate_zipcode," . "$email_address,"  . "$phone_no," . "$dob," .  "$sex,"  .  "$rank," .  "$courses,"  . "$in_order," . "$of_interest\n";
   fwrite($information, $info);
 }else{
   echo"error";
   }




?>