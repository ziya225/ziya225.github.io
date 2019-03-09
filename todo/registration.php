<?php
session_start();


$con= mysqli_connect('localhost','root');


mysqli_select_db($con,'tododb');


$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from usertable where name = '$name' && password = '$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1){
    echo "Duplicate data";
    
}
else{
    $qy = "insert into usertable(name,password) values('$name','$pass')";
    mysqli_query($con,$qy);
}
if(isset($_SESSION["user"]))
{
    header('location:home.php');
}


?>