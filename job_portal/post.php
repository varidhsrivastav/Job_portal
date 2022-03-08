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

if(isset($_POST['post'])){
    $cname =$_POST['cname'];
    $position =$_POST['position'];
    $skills =$_POST['skills'];
    $CTC =$_POST['CTC'];
    $jdesc=$_POST['jdesc'];

    $sql = "INSERT INTO `postjob`(`cname`, `position`,`skills`,`CTC`,`jdesc`) VALUES ('$cname','$position','$skills','$CTC','$jdesc')";
    if(mysqli_query($conn,$sql)){
        echo '<script>alert("New job posted")</script>';
    }
    else{
        echo "Failed to post the job. $sql. ". mysqli_error($conn);
    }
}


if(isset($_POST['send'])){
    $Fullname = $_POST['Fullname'];
    $Email = $_POST['E-mail'];
    $Message = $_POST['Message'];

    $sql = " INSERT INTO `message`( `Fullname`, `E-mail`, `Message`) VALUES ('$Fullname','$Email','$Message')";
    
    if(mysqli_query($conn,$sql)){
        echo '<script>alert("New Message sent")</script>';
    }
    else{
        echo "Failed to post the job. $sql. ". mysqli_error($conn);
    }

}
?>