<?php 

session_start();
$con = mysqli_connect('210.113.71.41:9090','mariapark','mparkjh0702!');//'S0pt42TJ1h'

mysqli_select_db($con,'nism_db');

$un=$_POST("funame");
$pw=$_POST("fpw");
$add_10=rand(0,pow(2,24));
$add_16=dechex($add_10);

$s=" select * from userinfo where Username ='$Name'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Username Already Taken";
}else{
    $reg="insert into userinfo('username','password','address') values ('$un','$pw','$add_16')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
    header('location:/login.php');
}

?>