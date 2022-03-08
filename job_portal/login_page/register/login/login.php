<?php include '/xampp/htdocs/job_portal/configlog.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Mochiy+Pop+P+One&family=Montserrat:wght@300&family=Poppins&family=Sedgwick+Ave&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- sign-in -->
            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="E-mail" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn solid" name="login">
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="http://" class="social-icon">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="http://" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="http://" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="http://" class="social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                      
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here?</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit totam at debitis voluptatum  </p>
                    <button class="btn transparent" id="sign-up-button">Sign Up</button>
                </div>
                <img src="image/undraw_login_re_4vu2.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us?</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit totam at debitis voluptatum  </p>
                    <button class="btn" id="sign-in-button">Sign In</button>   
                <a href="../register.php" target="blank"><button class="btn transparent" id="sign-in-button">Sign up</button></a>
                </div>
                <img src="image/undraw_my_app_re_gxtj.svg" alt="" class="image">
            </div>
        </div>
    </div>
</body>
</html>
<!-- scripts -->
<script src="script.js"></script>