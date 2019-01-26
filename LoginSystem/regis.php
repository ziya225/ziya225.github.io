<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
    echo"Connection Established";
}
else{
    echo"No Connection";
}
mysqli_select_db($con,'formdb');

$name1 = $_POST['user'];
$pass1 = $_POST['pass'];

$q ="selct * from signin where name='$name1' && pass ='$pass1' ";

$result = mysql_query($con,$q);
$num = mysqli_num_rows($result);

if($num==1){
    echo"duplicate data";
    
}
else{
    $qy = "insert into signin(name,pass)values('$name', '$pass1')";
    mysqli_query($con,$qy);
}


?>