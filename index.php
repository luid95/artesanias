<?php
include('php/conexion.php');
$link=Conectarse();
//$fecha=date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Papel picado Huixcolotla | SAN SALVADOR HUIXCOLOTLA PUEBLA</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="plugins/fancybox/jquery.fancybox.min.css">

  <!-- Stylesheets -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->



<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            <div class="top-left">
                  <h6>Horario de apertura : Lunes a Viernes - 11am to 8pm</h6>
            </div>
            <div class="top-right">
                  <ul class="social-links">
                        <li>
                              <a href="https://www.facebook.com/luis.d.morales.58">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.youtube.com/">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                              </a>
                        </li>
                        <li>
                              <a href="https://www.instagram.com/luid_0895/?hl=es-la">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                              </a>
                        </li>
                  </ul>
            </div>
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.html">
                          <!-- Aquui va la imagen del logo de la empresa -->
                              <img src="images/logo.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-envelope-o"></i>
                              </div>
                              <strong>Correo</strong>
                              <br>
                              <a href="#">
                                    <span>papelhuixcolotla@gmail.com</span>
                              </a>
                        </li>
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Llamar al</strong>
                              <br>
                              <span> (222) 428 - 1234 </span>
                        </li>
                  </ul>
                  <div class="link-btn">
                        <a href="#" class="btn-style-one">Ingresar</a>
                        <a href="#" class="btn-style-one">Registrar</a>
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.php">Inicio</a>
                        </li>
                        <li>
                              <a href="about.php">About</a>
                        </li>
                        <li>
                              <a href="service.php">Service</a>
                        </li>
                        <li>
                              <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                              <a href="team.php">Team</a>
                        </li>
                        <li>
                              <a href="appointment.php">Appointment</a>
                        </li>
                        <li>
                              <a href="blog.php">Blog</a>
                        </li>
                        <li>
                              <a href="contact.php">Contact</a>
                        </li>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->
<div class="hero-slider">
    <!-- Slider Item -->
    <div class="slider-item slide1" style="background-image:url(images/slider/fondo_banner.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content style text-center">
                        <h2 class="text-white text-bold mb-2">Hecho a mano</h2>
                        <p class="tag-text mb-5">Significa<br>
                             Hecho con el corazón!</p>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/banner_01.png);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start-->
                    <div class="content style text-right">
                        <h2 class="text-white">Nosotros amamos <br>lo que hacemos</h2>
                        <p class="tag-text">porque nos gusta verte feliz con nuestros productos. </p>
                    </div>
                    <!-- Slide Content End-->
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Item -->
    <div class="slider-item" style="background-image:url(images/slider/abanicos.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Slide Content Start -->
                    <div class="content text-center style">
                        <h2 class="text-white text-bold mb-2">Adquirir algo hecho a mano</h2>
                        <p class="tag-text mb-5">Significa que no ha sido fabricado en serie,
                            <br>por eso es diferente y único.</p>
                    </div>
                    <!-- Slide Content End -->
                </div>
            </div>
        </div>
    </div>
</div>

<!--====  End of Page Slider  ====-->

<!--Service Section-->
<section class="service-section bg-gray section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Tus ideas
                <span>pueden se pueden volver realidad</span>
            </h3>
            <p>Si tienes alguna propuesta para tus eventos<br>
                Nosotros las hacemos realidad para el agrado de tus eventos.
            </p>
        </div>
        <div class="row items-container clearfix">
            <div class="item">
                <?php
                    $fotos = mysqli_query($link, "SELECT * FROM fotos order by id_f desc ");
                    while ($lista = mysqli_fetch_array($fotos, MYSQL_ASSOC)){

                ?>
                <div class="inner-box">
                    <div class="img_holder">
                        <img src="<?php echo $lista['foto_f'] ?>" alt="images" class="img-responsive">
                    </div>
                    <div class="image-content text-center">
                        <h6><?php echo $lista['nombre_fig'] ?></h6>
                        <span><?php echo $lista['tam'] ?></span>
                        <h6><?php echo $lista['precio'] ?></h6>
                        <p><?php echo $lista['desc'] ?></p>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/1.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Dormitory</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/2.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Germs Protection</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="inner-box">
                    <div class="img_holder">
                        <a href="service.html">
                            <img src="images/gallery/3.jpg" alt="images" class="img-responsive">
                        </a>
                    </div>
                    <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="service.html">
                            <h6>Psycology</h6>
                        </a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, vero.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Service Section-->

<!--testimonial-section-->
<section class="testimonial-section" style="background: url(images/testimonials/1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>What Our
                <span>Patients Says</span>
            </h3>
        </div>
        <div class="testimonial-carousel">
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/1.png" alt="">
                        </figure>
                    </div>
                    <h6>Adam Rose</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/2.png" alt="">
                        </figure>
                    </div>
                    <h6>David Warner</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
            <!--Slide Item-->
            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="images/testimonials/3.png" alt="">
                        </figure>
                    </div>
                    <h6>Amy Adams</h6>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia consectetur, dolor sit amet, consectetur, numquam Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, at?</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End testimonial-section-->

<!--footer-main-->
<footer class="footer-main">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="about-widget">
            <div class="footer-logo">
              <figure>
                <a href="index.html">
                  <img src="images/logo-2.png" alt="">
                </a>
              </figure>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, temporibus?</p>
            <ul class="location-link">
              <li class="item">
                <i class="fa fa-map-marker"></i>
                <p>Modamba, NY 80021, United States</p>
              </li>
              <li class="item">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="#">
                  <p>Support@medic.com</p>
                </a>
              </li>
              <li class="item">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <p>(88017) +123 4567</p>
              </li>
            </ul>
            <ul class="list-inline social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <h6>Services</h6>
          <ul class="menu-link">
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Orthopadic Liabilities</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dental Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Dormamu Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Psycological Clinic</a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-angle-right" aria-hidden="true"></i>Gynaecological Clinic</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="social-links">
            <h6>Recent Posts</h6>
            <ul>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading"><a href="#">Post Title</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
              <li class="item">
                <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object" src="images/blog/post-thumb-small.jpg" alt="post-thumb">
                    </a>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <a href="#">Post Title</a>
                    </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, dolorem.</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container clearfix">
      <div class="copyright-text">
        <p>&copy; Copyright 2018. All Rights Reserved by
          <a href="index.html">Medic</a>
        </p>
      </div>
      <ul class="footer-bottom-link">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="about.html">About</a>
        </li>
        <li>
          <a href="contact.html">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
<!--End footer-main-->

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>

<script src="plugins/jquery.js"></script>
<script src="plugins/bootstrap.min.js"></script>
<script src="plugins/bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- FancyBox -->
<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="plugins/google-map/gmap.js"></script>

<script src="plugins/validate.js"></script>
<script src="plugins/wow.js"></script>
<script src="plugins/jquery-ui.js"></script>
<script src="plugins/timePicker.js"></script>
<script src="js/script.js"></script>
</body>

</html>
