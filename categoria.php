<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Artesanias LaCande | Categoria</title>

  
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

  <!-- Aqui estan lan funciones jquery -->
  <script src="js/inventario.js" type="text/javascript"></script>

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
                                    <a href="#">
                                          <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                              </li>
                              <li>
                                    <a href="#">
                                          <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                              </li>
                              <li>
                                    <a href="#">
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
                                    <span>artelacande@gmail.com</span>
                              </li>
                              <li class="item">
                                    <div class="icon-box">
                                          <i class="fa fa-phone"></i>
                                    </div>
                                    <strong>Llamar al</strong>
                                    <br>
                                    <span> (222) 428 - 7450 </span>
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
                            <li class="">
                                  <a href="inventario.php">Inventario</a>
                            </li>
                            <li class="active">
                                <a href="categoria.php">Categoria</a>
                            </li>
                            
                      </ul>
                </div>
                <!-- /.navbar-collapse -->
          </div>
          <!-- /.container-fluid -->
    </nav>
    <!--End Main Header -->

    <!--Page Title-->
    <section class="page-title text-center" style="background-image:url(images/background/banner_inv.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>Categorias</h1>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="blog-section section style-three pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="contact-area style-two">
                        <div class="section-title">
                            <h3>Agregar <span>Categoria</span></h3>
                        </div>
                        <form name="contact_form" class="default-form contact-form" id="frmajaxcat"  method="POST" enctype="multipart/form-data" onsubmit="return false">
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" placeholder="Nombre" required="">
                                    </div>                           
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" name="date" placeholder="Fecha" required="" id="datepicker">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </div>                            
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="file" id="file_g" class="form-control" name="file_g" style="color: black">
                                    </div> 
                                    <div class="form-group">
                                        <textarea name="desc" placeholder="Descripcion de la categoria..." required=""></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit" class="btn-style-one">Agregar</button>
                                    </div>                            
                                </div>
                            </div>
                        </form>
                    </div>                      
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="appointment-image-holder">
                        <figure>
                            <img src="images/background/banner2_inv.jpg" alt="Appointment" width="100%" height="100%">
                        </figure>
                    </div>                       
                </div>
            </div>                    
        </div>
    </section>
    <!-- End Contact Section -->

    <section class="blog-section section style-three pb-0">
      <div class="container">
        <div id="result">

        </div>
      </div>
    </section>

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
                          <img class="media-object" src="category/5cb0d4a52d6d9-IMG_20170712_185617_042.jpg" width="100px" height="100px" alt="post-thumb">
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
            <p>&copy; Copyright 2018. All Rights Reserved by</p>
          </div>
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
