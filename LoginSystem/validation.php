<?php
session_start();

$con= mysqli_connect('localhost','root');
if($con){
    echo"Connection Established";
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'demo');

$name = $_POST['username'];
$pass = $_POST['password'];

$q = "select * from loginform where User = '$name' && Pass = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$name;
    header('location:home.php');
    
}
else{
     header('location:home.php');
    
}


?>