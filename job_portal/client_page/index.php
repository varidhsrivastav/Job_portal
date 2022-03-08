<?php include '/xampp/htdocs/job_portal/apply.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client_page</title>
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
                    <a class="nav-link active" href="#" data-hover="home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#feature">Features jobs</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="/job_portal/client_page/about/about.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact-form">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="../login_page/register/register.php"><button type="button"  class="btn-1" >
                      Post job
                    </button></a>
                    
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
              <h1 class="h1 h1-responsive">Find the
                job that fits your life</h1>
              <p>in expencting display thought Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, 
                ipsa harum q Quaerat, ipsa harum q </p>
                <a href="#feature"><button class=" btn-1">Job for you</button></a>
              <!-- <button class="btn btn-play ml-3"><i class="fas fa-play"></i></button> -->
            </div>
            <div class="col-lg-5 col-md-7 ml-auto my-md-auto my-5">
              <div class="image">
                <img src="image/undraw_career_progress_ivdb (1).svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- hero bannner end -->
      <!-- category -->
      <section id="category">
        <div class="container">
          <h4 class="h1-responsive mb-4 h1">Browse Categories</h2>
          <p>Most popular categories of portal, sorted by popularity</p>
          <div class="flex-container">
          <div class="col-lg-3 col-md-6 col-sm-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-landmark"></i>
                <h3 class="title">Finance</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fab fa-adversal"></i>
                <h3 class="title">Sales/Markting</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-user-graduate"></i>
                <h3 class="title">Educational/training</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-laptop-code"></i>
                <h3 class="title">Technologies</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-palette"></i>
                <h3 class="title">Art/Design</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-heartbeat"></i>
                <h3 class="title">Healthcare</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-vials"></i>
                <h3 class="title">Science</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-6 col-xs-12 f-category">
            <a href="">
              <div class="icons">
                <i class="fas fa-utensils"></i>
                <h3 class="title">Food Service</h3>
                <p class="no">(123 jobs)</p>
              </div>
            </a>
          </div>
          </div>

        </div>
      </section>
      <!-- feature job-->
      <section id="feature">
        <div class="container">
          <h4 class="h1-responsive mb-4 h1">Features Job</h4>
          <p>Hand-picked job featured depending on popularity and benifits</p>
          <div class="feature-jobs flex-container">
            
            <?php
                    $sql="SELECT cname,position,jdesc,CTC,skills from postjob";
                    $result=mysqli_query($conn,$sql);
                    if($result->num_rows>0){
                      while($rows=$result->fetch_assoc()){
                          echo'
                          <div class="job-body" >
                          <div class="position">
                          <h3 class="h3 h3-responsive">
                            '.$rows['position'].'
                          </h1>
                        </div>
                        <div class="company-name">
                          <h4 class="h4 h4-responsive">'.$rows['cname'].'</h4>
                        </div>
                        <div class="description text-left">
                          <span>Job Description :</span><br>
                          '.$rows['jdesc'].' 
                        </div>
                        <div class="skill-required text-left">
                          <span>Skill Required :</span> '.$rows['skills'].'
                        </div>
                        <div class="ctc text-left">
                          <span>CTC :</span> '.$rows['CTC'].'
                        </div> 
                        
                        
                        <button type="button" class="btn-1 " data-toggle="modal" data-target="#exampleModalCenter">
                           apply
                          </button>
                        
                      </div>';
                      }}
             ?>
          
        </div>
        <button class="btn-1 btn-6">Browse all jobs</button>
        
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Apply job</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <div class="contact-form1">
        
                  <h4 class="h4 text-a"></h4>
                  <div class="form-1">
                     <form action="" method="POST" role="form" class="contact-form" name="book">
                      <div class="row">
                         <div class="col-lg- col-12 form-detail">
                           <input type="text" name="dname" id="" class="form-control" placeholder="Full name " required>
                        </div>
                       <div class="col-lg- col-12 form-detail">
                        <input type="text" name="appfor" id="" class="form-control" placeholder="Apply For " required>
                       </div>
                       <div class="form-detail">
                        <input type="text" name="qual" id="" class="form-control" placeholder=" qualification " required>
                       </div>
                         <div class="form-detail">
                          <input type="text" name="cyear" id="" placeholder="year" class="form-control">
                         </div>
                         <div class="col-lg-12 col-12 form-detail">
                          <textarea name="abt" id="" cols="50" rows="10" placeholder="Describe Yourself" class="form-control" required></textarea>
                         </div>
                       </div>
                       <button type="submit" name="postjob" class="btn-1">Apply</button>
                      </form>
                     </div>
                </div>
                 </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-1" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
      </section>
      <!-- feature property end  -->
      
      <!-- browse job start here -->
      <section id="browse-job">
        <div class="container">
          <div class="row">
            <div class="col-md-6 my-auto mr-auto">
              <h1 class="h1 h1-responsive">7000+ browse jobs</h1>
              <p>in expencting display thought Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, 
                ipsa harum q Quaerat, ipsa harum q </p>
                <a href="#feature"><button class=" btn-1 btn-6 ">Featured Job</button></a>
              <!-- <button class="btn btn-play ml-3"><i class="fas fa-play"></i></button> -->
            </div>
            <div class="col-lg-5 col-md-6 ml-auto my-md-auto my-5">
              <div class="image">
                <img src="image/undraw_searching_p-5-ux (1).svg" alt="">
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- hero bannner end -->
    <!-- work section here -->
    <section id="work-section">
      <div class="container">
        <h1 class="h1-responsive mb-4 h1">How it works?</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, esse suscipit,<br>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
        </p>
        <div class="d-sm-flex justify-content-between my-5">
          <div class="service-show">
            <i class="fas fa-user-alt"></i>
            <h4 class="h5 mb-4">Create an Account</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit</p>
          </div>
          <div class="service-show">
            <i class="fas fa-search"></i>
           <h4 class="h5 mb-4">
            Search Jobs</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit</p>
          </div>
          <div class="service-show">
            <i class="fas fa-award"></i>
           <h4 class="h5 mb-4">Apply</h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.sit amet consectetur adipisicing elit</p>
          </div>
       </div>
      </div>
    </section>
    <!-- work section end here -->
    <!-- pricing  -->
    <section id="pricing" class="py-5">
      <div class="pricing6 py-5 bg-light">
        <div class="container"> 
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h3 class="mb-3 py-3 h1 h1-responsive">Pricing to make your Work Effective</h3>
              <h6 class="subtitle font-weight-normal">We offer 100% satisafaction and Money back Guarantee</h6>
            </div>
          </div>
          <!-- row  -->
          <div class="row mt-4">
            <!-- column  -->
            <div class="col-md-6">
              <div class="card card-shadow border-0 mb-4">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <h5 class="font-weight-medium mb-0">Basic Plan</h5>
                    <div class="ml-auto"><span class="badge badge-danger font-weight-normal p-2">Popular</span></div>
                  </div>
                  <div class="row">
                    <div class="col-lg-5 text-center">
                      <div class="price-box my-3">
                        <sup>₹</sup><span class="text-dark display-5">10000</span>
                        <h6 class="font-weight-light">MONTHLY</h6>
                        <a class="btn-1 font-14 border-0 text-white p-3 btn-block mt-3" href="#">CHOOSE PLAN </a>
                      </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                      <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>post only 5 jobs </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Edit only limited options </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>30 days expire plan </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Manage application</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column  -->
            <!-- column  -->
            <div class="col-md-6">
              <div class="card card-shadow border-0 mb-4">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Advanced Plan</h5>
                  </div>
                  <div class="row">
                    <div class="col-lg-5 text-center">
                      <div class="price-box my-3">
                        <sup>₹</sup><span class="text-dark display-5">15000</span>
                        <h6 class="font-weight-light">MONTHLY</h6>
                        <a class="btn-1 border-0 font-14 text-white p-3 btn-block mt-3" href="#">CHOOSE PLAN </a>
                      </div>
                    </div>
                    <div class="col-lg-7 align-self-center">
                      <ul class="list-inline pl-3 font-14 font-weight-medium text-dark">
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Post many jobs </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Edit your job list </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>90 days expire plan </span></li>
                        <li class="py-2"><i class="icon-check text-info mr-2"></i> <span>Manage application</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- column  -->
          </div>
        </div>
      </div>
    </section>
    <!-- pricing section -->
              <!-- testimonial section here -->
          <!-- #testimonial-slider .swiper-container' -->
          <section id="testimonial-section">
            <div class="container">
              <h6 class="color-primary m-0">Testimonial</h6>
              <h1 class="h1 h1-responsive mb-4">What they are saying</h1>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta vel porro magni iure sunt laudantium exercitationem praesentium 
                provident voluptas impedit commodi, eius, dolores aliquid molestiae repudiandae nesciunt quaerat perferendis. 
                Tenetur.</p>
                <br><br>
                <div id="testimonial-slider">
                  <div class="swiper-container">
                     <div class="swiper-wrapper">  
                        <div class="swiper-slide">
                           <div class="testimonial-list">
                             <div class="row mx-auto">
                               <div class="col-lg-4 col-md-4 col-4 text-center ">
                                <div class="image">
                                  <img src="image/undraw_male_avatar_323b.svg" alt="">
                               </div>
                               </div>
                               <div class=" col-lg-6 col-md-8 text-left ">
                                 <i class="fas fa-quote-left fa-10x"></i>
                                <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita, est nemo sapiente quisquam excepturi
                                   ipsa optio omnis laborum exercitationem rerum obcaecati
                                   animi esse unde praesentium id maxime molestiae perferendis!</p>
                                   <h4 class="h4 m-0">Name0</h4>
                                   <p>designation</p>
                               </div>
                              </div>
                          </div>
                        </div>  
                        <div class="swiper-slide">
                           <div class="testimonial-list">
                             <div class="row">
                               <div class="col-lg-4 col-md-4 col-4 text-center">
                                <div class="image">
                                  <img src="image/undraw_female_avatar_w3jk.svg" alt="">
                               </div>
                               </div>
                               <div class="col-lg-6 col-md-8 text-left ">
                                 <i class="fas fa-quote-left fa-10x"></i>
                                <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita, est nemo sapiente quisquam excepturi
                                   ipsa optio omnis laborum exercitationem rerum obcaecati
                                   animi esse unde praesentium id maxime molestiae perferendis!</p>
                                   <h4 class="h4 m-0">Name1</h4>
                                   <p>designation</p>
                               </div>
                              </div>
                          </div>
                        </div>  
                        <div class="swiper-slide">
                           <div class="testimonial-list">
                             <div class="row">
                               <div class="col-lg-4 col-md-4 col-4 text-center">
                                <div class="image">
                                  <img src="image/undraw_profile_pic_ic-5-t.svg" alt="">
                               </div>
                               </div>
                               <div class=" col-lg-6 col-md-8 text-left ">
                                 <i class="fas fa-quote-left fa-10x"></i>
                                <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita, est nemo sapiente quisquam excepturi
                                   ipsa optio omnis laborum exercitationem rerum obcaecati
                                   animi esse unde praesentium id maxime molestiae perferendis!</p>
                                   <h4 class="h4 m-0">Nmae2</h4>
                                   <p>designation</p>
                               </div>
                              </div>
                          </div>
                        </div>
                          
                        <div class="swiper-slide">
                          <div class="testimonial-list">
                            <div class="row">
                              <div class="col-lg-4 col-md-4 col-4 text-center ">
                               <div class="image">
                                 <img src="image/undraw_female_avatar_w3jk.svg" alt="">
                              </div>
                              </div>
                              <div class="col-lg-6 col-md-8 text-left text">
                                <i class="fas fa-quote-left fa-10x"></i>
                               <p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et expedita, est nemo sapiente quisquam excepturi
                                  ipsa optio omnis laborum exercitationem rerum obcaecati
                                  animi esse unde praesentium id maxime molestiae perferendis!</p>
                                  <h4 class="h4 m-0">Name3</h4>
                                  <p>designation</p>
                              </div>
                             </div>
                         </div>
                       </div>
                      </div>
                   </div>
                </div>
            </div>
          </section>
          <!-- testimonial end here -->
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
                         
                         <button type="submit" name="send" class="form-contro btn-1 btn-6">
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
          <button type="button" class="btn btn-outline-light btn-rounded">
            Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="\"><span class="logo " href="#">
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
   <script src="/client_page/swiperscript.js"></script>
   
     <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>