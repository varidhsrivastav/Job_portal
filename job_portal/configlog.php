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


session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query = "SELECT * FROM user WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn, $query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        $_SESSION['email'] = $login_user;
        header("location:/job_portal/client_page/dashboard/dashboard.php");
    }
    else{
        // $error="email id or password is incorrect";
        echo'<script>alert("invalid username")</script>';
    }

}

mysqli_close($conn);

?>