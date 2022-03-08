<?php

$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `user`(`name`, `email`,`phone_no`, `password`) VALUES ('$name','$email','$number','$password')";
    if(mysqli_query($conn, $sql)){
        echo '<script>alert("Record entered successfully")</script>';
    }else{
        echo "Error: could not able to execute. $sql. ". mysqli_error($conn);
    }

}

mysqli_close($conn);

?>