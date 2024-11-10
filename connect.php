<?php
$name=$_POST['name'];
$ward=$_POST['ward'];
$contact=$_POST['contact'];
$conn = new mysqli('localhost', 'root','', 'carols2024');
if($conn->connect_error) {
    echo "$conn->connect_error";
    die('Connection Failed: '.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into registration(name, ward,contact) 
        values(?, ?, ?);");
    $stmt->bind_param("ssi",$name, $ward,$contact); 
    $execval=$stmt->execute();
    echo $execval;
    echo " Welcome to the CAROLS-2024 team..";
    $stmt->close();
    $conn->close();
}
?>


