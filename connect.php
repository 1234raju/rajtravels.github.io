<?php


$servername="localhost";
$username="root";
$password="";
$dbname="test1";


$conn= new mysqli($servername ,$username , $password, $dbname);

if($conn->connect_error){
    die("BOOKING FAILED");
}

$Trip =$_POST['check'];
$Flyingcity = $_POST['city1'];
$Movingcity = $_POST['city2'];
$Flyingdate = $_POST['date1'];
$Returningdate = $_POST['date2'];
$Adults = $_POST['adults'];
$Children = $_POST['children'];

$sql ="INSERT INTO `booking` (`Trip`, `FlyingCity`, `Movingcity`, `Flyingdate`, `Returningdate`, `Adults`, `Children`) VALUES ('$Trip', '$Flyingcity', '$Movingcity', '$Flyingdate', '$Returningdate', '$Adults', '$Children ')";

if($conn->query($sql)==true)
{
    echo "booking confirmed";
}
else{
    echo "booking not successful";
}

$conn->close();

?>