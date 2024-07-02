<?php
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$gender = $_POST['gender'];
$country = $_POST['country'];
// $FirstName = $_POST['FirstName']

//database connectivity

$conn = new mysqli('localhost','root','','test_02');
if($conn->connect_error){
    die('connection failed!:' $conn ->connect_error);
}
else {
    $stmt = $conn->prepare("insert into the registration (FirstName, LastName, email, password, confirm_password, gender, country)
       values(?,?,?,?,?,?,?)");
       $stmt -> bind_param("sssssssi", $FirstName, $LastName, $email, $password, $confirm_password,$gender,$country);
       $stmt-> execute();
       echo "registration successfully.....";
       $stmt -> close();


}




?>