<?php include '/xampp/htdocs/job_portal/post.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Mochiy+Pop+P+One&family=Montserrat:wght@300&family=Poppins&family=Sedgwick+Ave&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
</head>
<body>

    <!-- header start -->
    <header class="header" >
      <div class="container">
               <!--Navbar-->
        <nav class="navbar navbar-expand-lg ">
               <!-- Navbar brand -->
          <a class="navbar-brand" href="#">
            <span class="navbar-brand1 " href="#">
              Get_J<i class="fas fa-search-dollar"></i>bs
              
            </span></a>
              <!-- Collapse button -->
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
              aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="fas fa-bars"></span>
          </button>
                <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">
                  <!-- Links -->
              <ul class="navbar-nav ml-auto">
                
                  <li class="nav-item ">
                    <a class="nav-link active" href="#job-table">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#candidate-table">Candidates applied</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/job_portal/client_page/dashboard/about/about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <button type="button" class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        post job
                      </button>
                  </li>
               </ul>
             </div>
             
         
          </nav>
               <!--/.Navbar--> 
        </div>
    </header>
  <!-- header end -->
        <!-- hero banner start here -->
        <section id="hero-banner">
            <div class="container">
              <div class="row">
                <div class="col-md-5 my-auto mr-auto">
                  <h1 class="h1 h1-responsive">Make your company visible</h1>
                  <p>in expencting display thought Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, 
                    ipsa harum q Quaerat, ipsa harum q </p>
                    <button type="button" class="btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        post job
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Post job</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="contact-form1">
                            
                                      <h4 class="h4 text-a"></h4>
                                      <div class="form-1">
                                         <form action="" method="POST" role="form" class="contact-form" name="book">
                                          <div class="row">
                                             <div class="col-lg- col-12 form-detail">
                                               <input type="text" name="cname" id="" class="form-control" placeholder="Company name " required>
                                            </div>
                                           <div class="col-lg- col-12 form-detail">
                                            <input type="text" name="position" id="" class="form-control" placeholder="Position" required>
                                           </div>
                                           <div class="form-detail">
                                            <input type="text" name="skills" id="" class="form-control" placeholder="Skill required " required>
                                           </div>
                                             <div class="form-detail">
                                              <input type="text" name="CTC" id="" placeholder="CTC" class="form-control">
                                             </div>
                                             <div class="col-lg-12 col-12 form-detail">
                                              <textarea name="jdesc" id="" cols="50" rows="10" placeholder="Job description" class="form-control" required></textarea>
                                             </div>
                                             <!-- <div class="form-detail">
                                                 <input type="checkbox" name="" id="" required>I have read and agree to the terms and conditions of pre-booking and hereby confirm to proceed for payments.
                                             </div> -->
                                           </div>
                                           <button type="submit" name="post" class="btn-1">Post</button>
                                          </form>
                                         </div>
                                    </div>
                                     </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn-1" data-bs-dismiss="modal">Close</button>
                              <!-- <button type="button" name="post" class="btn-1">Post</button> -->
                            </div>
                          </div>
                        </div>
                      </div>
                   </div>
                <div class="col-lg-5 col-md-7 ml-auto my-md-auto my-5">
                  <div class="image">
                    <img src="image/undraw_post_re_mtr4.svg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section>
        <!-- hero bannner end -->
        <!-- dashboard  -->
    <section class="job-table" id="job-table">
        <div class="container">
            <h1 class="h1 h1-responsive">Dashboard</h1>
            <img src="image/undraw_dashboard_re_3b76.svg" alt="">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company Name</th>
                        <th>Position</th>
                        <th>CTC</th>
                    </tr>
                </thead>
                    <?php
                    $sql="SELECT cname,position,CTC from postjob";
                    $result=mysqli_query($conn,$sql);
                    if($result->num_rows>0){
                      while($rows=$result->fetch_assoc()){
                        $i=0;
                        echo" <tbody>
                                <tr>
                                  <td>".++$i."</td>
                                  <td>".$rows["cname"]."</td>
                                  <td>".$rows["position"]."</td>
                                  <td>".$rows["CTC"]."</td>
                                 </tr>";
                      }}
                      else{
                        echo"";
                      }
                    ?>
                    
                  </tbody>
            </table>
        </div>
        

    </section>

    <section class="candidate-table" id="candidate-table">
        <div class="container">
            <h1 class="h1 h1-responsive">Candidates Applied</h1>
            <img src="image/undraw_emails_re_cqen.svg" alt="">
            <table class="table table-striped table-hover">
            <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Candidates name</th>
                        <th>Applying for</th>
                        <th>Qualification</th>
                        <th>Year</th>
                        <th>About</th>
                    </tr>
                </thead>
                    <?php
                    $sql="SELECT  dname,appfor,qual,cyear,abt from candidates";
                    $result=mysqli_query($conn,$sql);
                    if($result->num_rows>0){
                      while($rows=$result->fetch_assoc()){
                        $i=0;
                        echo" <tbody>
                                <tr>
                                  <td>".++$i."</td>
                                  <td>".$rows["dname"]."</td>
                                  <td>".$rows["appfor"]."</td>
                                  <td>".$rows["qual"]."</td>
                                  <td>".$rows["cyear"]."</td>
                                  <td>".$rows["abt"]."</td>
                                 </tr>";
                      }}
                      else{
                        echo"";
                      }
                    ?>
                    
                  </tbody>
            </table>
        </div>
        

    </section>
        <!-- conatct section form -->
        <section id="contact-form" class="modal" >
            <div class="container">
              <div class="contact-form1">
      
                <h4 class="h4 text-a"></h4>
                <div class="form-1">
                   <form action="" method="post" role="form" class="contact-form" name="book">
                    <div class="row">
                       <div class="col-lg-6 col-12 form-detail">
                         <input type="text" name="first-name" id="" class="form-control" placeholder="Company name " required>
                      </div>
                     <div class="col-lg-6 col-12 form-detail">
                      <input type="text" name="last-name" id="" class="form-control" placeholder="Position" required>
                     </div>
                     <div class="form-detail">
                      <input type="text" name="telephone" id="" class="form-control" placeholder="Skill equired " required>
                     </div>
                       <div class="form-detail">
                        <input type="text" name="Referral-code" id="" placeholder="CTC" class="form-control">
                       </div>
                       <div class="col-lg-12 col-12 form-detail">
                        <textarea name="Message" id="" cols="50" rows="10" placeholder="Job description" class="form-control" required></textarea>
                       </div>
                       <div class="form-detail">
                           <input type="checkbox" name="" id="" required>I have read and agree to the terms and conditions of pre-booking and hereby confirm to proceed for payments.
                       </div>
                     </div>
                     <div class="mx-auto col-7 form-detail">
                       <button type="submit" class="form-control btn btn-theme" id="submit">
                         Reserve @₹500
                       </button>
                     </div>
                    </form>
                   </div>
              </div>
               </div>
          </section>



          <!--  contact section -->
          <section id="contact-form" class="contact">
            <div class="container" id="contact">
              <img src="image/undraw_faq_re_31cw.svg" alt="" srcset="">
             <h1 class="h1 h1-responsive mb-7">Have a question in mind?<br>
               Let us help you</h1>
               <form action="" name="submit-googlesheet" method="POST">
                 <div class="form-1">
                   <form action="" method="post" role="form" class="contact-form">
                     <div class="row">
                       <div class="col-lg-6 col-12 form-detail">
                        <input type="text" name="Fullname" id="" class="form-control" placeholder="Name" required>
                       </div>
                       <div class="col-lg-6 col-12 form-detail">
                        <input type="email" name="E-mail" id="" class="form-control" placeholder="E-mail" required>
                       </div>
                       <div class="col-lg-12 col-12 form-detail">
                        <textarea name="Message" id="" cols="50" rows="10" placeholder="Message" class="form-control" required></textarea>
                       </div>
                       <div class="mx-auto col-7 form-detail">
                         
                         <button type="submit" name="send" class="form-contro btn-2">
                           Send Message
                         </button>
                         <hr>
                       </div>
                       
                     </div>
                   </form>
                 </div>
               </form>
               
            </div>
          </section>
  
  <!-- contact section end  -->
  <!-- footer  -->
<section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <a href="/job_portal/login_page/register/register.php">
            <button type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
            </a>
            
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a  href="#"><span class="logo " href="#">
          Get_J<i class="fas fa-search-dollar"></i>bs
          
        </span></a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
  </body>
  </html>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
     <!-- Swiper JS -->
     <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
     <!-- swiper js  -->
     <script src="/swiperscript.js"></script>
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>