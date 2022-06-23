<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pe'er Fichman Protfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.7.1
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <?php 
            include "config.php";
            // get all data from DB
            $query  = "SELECT * FROM portfolio_PeerFichman";
            $result = mysqli_query($connection, $query);

            if(!$result) {
              die("DB query failed.");
            }
    ?>
          

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">Pe'er Fichman</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#skills">Skills</a></li>
          <li><a class="nav-link scrollto" href="#work">Protfolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg)">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">Pe'er Fichman</h1>
          <p class="hero-subtitle">I'm a <span class="typed" data-typed-items="Student,  Developer, Profficient "></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span>Pe'er Fichman</span></p>
                        <p><span class="title-s">Profile: </span> <span>Software Developer Student</span></p>
                        <p><span class="title-s">Email: </span> <span>peerfikhman@gmail.com</span></p>
                        <p><span class="title-s">Phone: </span> <span>+972 526 770 546</span></p>
                        <a href ="assets/cv/cv.pdf" target="_blank" class="btn btn-secondary title-s"><span style= "color: white;" >My CV</span> </a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        About me
                      </h5>
                    </div>
                    <p class="lead">
                     <b><i>Hello,</i></b> </br> I am a young high <b><i>achiever</i></b> student for software engineering at Shenkar college.  
                                                I'm very <b><i>passionat</i></b> and motivated to gain new  opportunities in the field of software development.<br>
                                                I am concentrating a great focus on web and cloud,<br>
                                                enjoying every time I discover something new <br>
                                                <b><i>improving</i></b> my skills every single day.<br>
                                                

                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    
    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">

      <div class="container" data-aos="fade-up">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Skills
            </h3>
            <p class="subtitle-a">
              Here is an overview of  skills I acquired on my way as a software developer.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
        

        <div class="row skills-content">

          <div class="col-lg-6">
            <div class="progress">
              <span class="skill">HTML5 <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS3 <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">PHP <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">SQL <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C <i class="val">99%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">C++ <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Algorithms and Data Structures <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar"  role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div></section><!-- End Skills Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                Here you can see some of my work.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
               while ($row = mysqli_fetch_assoc($result))
               {
   
                 echo '<div class="col-md-4">';
                 echo '<div class="work-box">';
                 echo '<a href="'.$row[proj_img].'" data-gallery="portfolioGallery" class="portfolio-lightbox">';
                 echo '<div class="work-img">';
                 echo '<img src="'.$row[proj_img].'" alt="" class="img-fluid">';
                 echo '</div>';
                 echo '</a>';
                 echo '<div class="work-content">';
                 echo '<div class="row">';
                 echo '<div class="col-sm-8">';
                 echo '<h2 class="w-title">'.$row[proj_name].'</h2>';
                 echo '<div class="w-more">';
                 echo '<span class="w-ctegory">'.$row[proj_lang].'</span>';
                 echo '</div>';
                 echo '</div>';
                 echo '<div class="col-sm-4">';
                 echo '<div class="w-like">';
                 echo '<a href="portfolio-details.php?proj_id= '.$row["proj_id"].'"> <span class="bi bi-plus-circle"></span></a>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
                 echo '</div>';
               }
          ?>
        </div>
      </div>
      
        


    </section><!-- End Portfolio Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        Get in Touch
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                       If you searching for a deveoted software developer that can share your vision for creating astonishing web applications,
                        don't hesitate to contact me.
                      </p>
                      <ul class="list-ico">
                        <li><span class="bi bi-geo-alt"></span> Gordon 42C, Rehovot, Israel.</li>
                        <li><span class="bi bi-phone"></span> +952 526 770 546</li>
                        <li><span class="bi bi-envelope"></span> peerfikhman@gmail.com</li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="https://github.com/peerfikhman"><span class="ico-circle"><i class="bi bi-github"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
          <a href="https://www.shenkar.ac.il/he/departments/engineering-software-department"><b>תואר ראשון בהנדסת תוכנה בשנקר</b></a> <br>
            &copy; Copyright <strong><span>DevFolio</span></strong>. All Rights Reserved 
            <div class="credits">
              <span>Designed by </span><a href="https://bootstrapmade.com/">BootstrapMade</a>&amp; <span> Edited by <b><i>Pe'er Fichman</i></b></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php
     mysqli_free_result($result);
  ?>

</body>

</html>

<?php 
  mysqli_close($connection);
?>