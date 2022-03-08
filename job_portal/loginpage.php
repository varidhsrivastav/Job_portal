<?php
   
if(isset($_POST["login"])){
    $uname=$_POST["email"];
    $pass=$_POST["password"];
    if($uname=="admin@gmail.com"){
        if($pass=="password"){echo'<script>alert("Welcome")</script>';}
       else{ echo'<script>alert("INvalid Paasword")</script>';}
    }
    else{echo'<script>alert("invalid username")</script>';}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--  GOOGLE FONTS CDN-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Praise&display=swap" rel="stylesheet">
     <!-- font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <!-- css bootsrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- internal css section -->
    <style>
        body{
            background-image:url('images/bgimgage.jpg');
            background-size:cover;
        }
        .container{
            display:grid;
            grid-template-columns: 25% 75%;
           
        }
    form{
        box-shadow:10px 8px 19px 5px #888888;
        padding:2em;
        margin:3% 3% 3% 40%;
        /* background-color:#fff */
    }
    @media(max-width:830px){form{margin:5%;}}
    /* @media screen and (min-width:830px){.container .container-text h4{}} */
    @media(max-width:635px){.container{display:grid;grid-template-columns: 100%;position:none;margin:0;margin-top: -90px;}}
    .container .container-text h4{color:white;margin-left:30%;margin-top:30%;
        font-family: 'Cedarville Cursive', cursive;font-weight:600;font-size:200%}
    </style>
    <!-- internal css section ended -->
    <title>LOG</title>
</head>
<body>

    <form action="" method="POST">
     
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <i class="fa fa-user fa-2x"></i>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <i class="fa fa-lock fa-2x"></i>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
          </div>
          <center> <button type="submit" class="btn btn-primary" name="login">Login</button></center>
    </form>
</body>
</html>