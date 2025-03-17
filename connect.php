<?php
$Fullname = $_POST['Fullname'];
$email = $_POST['email'];
$people = $_POST['people'];
$time = $_POST['time'];
$date = $_POST['date'];
$phone = $_POST['phone'];

//Database Connection
$conn = new mysqli('localhost','root', '', 'test');
if($conn->connect_error){
    die('Connection Failed : ' .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into booking(Fullname, email, people, time, date, phone) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi",$Fullname, $email, $people, $time, $date, $phone);
    $stmt->execute();
    echo "registration Sucessfully...";
    $stmt->close();
    $conn->close();
}
?>