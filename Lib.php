<?php
var_dump($_POST);
$name=$_POST['user'];
$pass=$_POST['pass'];
$servername = "localhost";
$username = "root";
$password = "";
$database="madracer";
$a = mysqli_connect($servername, $username, $password,$database);
if($a)
{
    $b="INSERT INTO `login_in` VALUES ('$name','$pass')";
    $result=mysqli_query($a,$b);
    if($result)
    {
        echo "Data Inserted Succesfully";
    }
    else{
        die(mysqli_error($a))
    }
}
else{
    die(mysqli_error($a));
}
?>
