<?php


$servername="localhost";
$username="root";
$password="";
$dbname="test1";


$conn= new mysqli($servername ,$username , $password, $dbname);

if($conn->connect_error){
    die("BOOKING FAILED");
}
$EMAIL=$_POST['Email'];
$PASSWORD=$_POST['Password'];
$NAME=$_POST['Name'];
$RMAIL=$_POST['Remail'];
$RPASSWORD=$_POST['Rpassword'];

$sql ="INSERT INTO `login` (`email`, `password`, `name`, `remail`, `rpassword`) VALUES ('$EMAIL', '$PASSWORD', '$NAME', '$RMAIL', '$RPASSWORD')";

if($conn->query($sql)==true)
{
    echo "login confirmed";
}
else{
    echo "booking not successful";
}

$conn->close();

?>
