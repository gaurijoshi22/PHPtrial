<?php
$x=$_POST['n'];
$servername= "localhost";
$username="root";
$password= "";
$dbname= "db1";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("COnnection failed : " . $conn->connect_error);
}
echo "Connected Successfully";
$sql = "INSERT INTO `t1`(`id`, `name`) VALUES ('[value-1]','[value-2]') ";
if($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo " Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>