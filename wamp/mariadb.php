<?php 
$conn=mysqli_connect('210.113.71.41:9090','mariapark','mparkjh0702!');

if($conn){
    echo "connected";
}
else{
    echo "connect failed";
}

$user=$_POST("funame");
$pw=$_POST("fpw");
mysqli_select_db("nism_db",$conn);
$query="select * from  userinfo where username='$user' && password='$pw'";
$sql=mysql_query($query,$conn);
$Result=mysql_fetch_array($sql);

$Un= $Result['username'];
$Add=$Result['address'];

echo "<script>
    sessionStorage.setItem('username','$Un');
    sessionStorage.setItem('address',$Add');
</script>";

$num = mysqli_num_rows($result);

if($num==1){
  $_SESSION['username']=$Name;
  header('<location:>index.php');
}else{
  header('<location:>login.php');
}
?>