<?php
session_start();

$con= mysqli_connect('localhost','root');
if($con){
  
}
else{
    echo "No Connection";
}
mysqli_select_db($con,'tododb');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1){
    $_SESSION['user']=$name;
    header('location:home.php');
    
}
else{
     header('location:home.php');
    
}


?>