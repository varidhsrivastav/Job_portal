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
// echo '<script>alert("Welcome to Geeks for Geeks")</script>'

if(isset($_POST['postjob'])){
    $dname =$_POST['dname'];
    $appfor =$_POST['appfor'];
    $qual =$_POST['qual'];
    $cyear =$_POST['cyear'];
    $abt = $_POST['abt'];
    $sql = "INSERT INTO `candidates`(`dname`, `appfor`,`qual`,`cyear`,`abt`) VALUES ('$dname','$appfor','$qual','$cyear', '$abt')";
    
    if(mysqli_query($conn,$sql)){
        echo '<script>alert("New job applied")</script>';
    }
    else{
        echo "Failed to Apply the job. $sql. ". mysqli_error($conn);
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