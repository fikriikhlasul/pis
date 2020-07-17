<!DOCTYPE html>
<html lang="en">
<head>

     <title>Selamat datang di Predatech Information System - PIS</title>
<!--

DIGITAL TREND

https://templatemo.com/tm-538-digital-trend

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/font-awesome.min.css">
     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/aos.css">
     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/owl.carousel.min.css">
     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/owl.theme.default.min.css">

<link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('landing/assets/images/');?>/favicon.ico">
<link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('landing/assets/images/');?>/favicon.ico">
<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url('landing/assets/images/');?>/favicon.ico">
<link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('landing/assets/images/');?>/favicon.ico">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?= base_url('landing/assets/'); ?>css/templatemo-digital-trend.css">
     <link rel="stylesheet" href="<?= base_url('assets/sweetalert/dist'); ?>/mycss.css">

</head>
<body>

     <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url();?>">
              <!-- <i class="fa fa-line-chart"></i> -->
              <img style='height:80px' itemprop="logo" src="<?= base_url('assets/img/logo');?>/pis_logo.png" alt="Predatech Information System">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a  href="#about" class="nav-link smoothScroll">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#project" class="nav-link smoothScroll">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                    <a href="login" class="nav-link contact">Masuk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <a id="buttontotop"></a>

     <!-- HERO -->
     <section class="hero hero-bg d-flex justify-content-center align-items-center">
               <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                              <div class="hero-text">

                                   <h1 class="text-white" data-aos="fade-up">Searching, Creating, And Giving The Best</h1>

                                   <!-- <a href="contact.html" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Let us discuss together!</a> -->

                                   <!-- <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +99 080 070 4224</strong> -->
                              </div>
                        </div>

                        <div class="col-lg-6 col-12">
                          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

                            <img src="<?= base_url('landing/assets/'); ?>images/coding.svg" class="img-fluid" alt="working girl">
                          </div>
                        </div>

                    </div>
               </div>
     </section>


     <!-- ABOUT -->
     <section class="about section-padding pb-0" id="about">
          <div class="container">
               <div class="row">

                    <div class="col-lg-7 mx-auto col-md-10 col-12">
                         <div class="about-info">

                              <h2 class="mb-4" data-aos="fade-up">Lorem Ipsum <strong>Dolor sit</strong>, 
                              consectetur adipiscing elit.</h2>

                              <p class="mb-0" data-aos="fade-up">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit... <a href="blog.html">blog</a> pages, <a href="project-detail.html">project</a> page, and <a href="contact.html">contact</a> page. 
                              <br><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ut tellus id diam facilisis bibendum. Vestibulum elementum leo et molestie commodo. Phasellus in placerat risus. Sed varius, sem ac cursus dignissim, justo eros suscipit justo, eu ornare orci ante ac neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce tincidunt cursus mi, non semper metus fermentum ut. Aliquam erat volutpat. Nam commodo nisl ex, in commodo eros luctus id. Maecenas libero sem, feugiat id pellentesque a, pretium ut neque. Nunc enim dui, eleifend eget fermentum aliquam, consequat eu sapien. Proin dolor odio, interdum eget auctor at, mollis sed ex. Nunc nec lorem ac ipsum vestibulum bibendum.</p>
                         </div>

                         <div class="about-image" data-aos="fade-up" data-aos-delay="200">

                          <img src="<?= base_url('landing/assets/'); ?>images/office.png" class="img-fluid" alt="office">
                        </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- PROJECT -->
     <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <strong>featured Digital Trends</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" >
                              <iframe  src="https://www.youtube.com/embed/P1pCIHWWmIQ" width="650" height="360" frameborder="0"></iframe>
                                   <!-- <div class="project-info">
                                        <small>Marketing</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Sweet Go Agency</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div> -->
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                              <iframe  src="https://www.youtube.com/embed/_OfOFwfIsU4" width="650" height="360" frameborder="0"></iframe>

                                   <!-- <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Smart Ladies</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div> -->
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                              <iframe  src="https://www.youtube.com/embed/FK3rTzaOEIk" width="650" height="360" frameborder="0"></iframe>

                                   <!-- <div class="project-info">
                                        <small>Branding</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Shoes factory</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div> -->
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                              <iframe  src="https://www.youtube.com/embed/gwJUgQGmdFs" width="650" height="360" frameborder="0"></iframe>

                                   <!-- <div class="project-info">
                                        <small>Social Media</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Race Bicycle</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div> -->
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                              <iframe  src="https://www.youtube.com/embed/thwhdrXONLc" width="650" height="360" frameborder="0"></iframe>

                                   <!-- <div class="project-info">
                                        <small>Video</small>

                                        <h3>
                                             <a href="project-detail.html">
                                                  <span>Ultimate HealthCare</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3> -->
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TESTIMONIAL -->
     <section class="testimonial section-padding">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-md-5 col-12">
                        <div class="contact-image" data-aos="fade-up">

                          <img src="<?= base_url('landing/assets/'); ?>images/org.svg" class="img-fluid" alt="website">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7 col-12">
                      <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                      <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                      <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo.</h2>

                      <p data-aos="fade-up" data-aos-delay="400">
                        <!-- <strong>Mary Zoe</strong>

                        <span class="mx-1">/</span>

                        <small>Digital Agency (CEO)</small> -->
                      </p>
                    </div>

               </div>
          </div>
     </section>


    <footer class="site-footer">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
            <h1 class="text-white" data-aos="fade-up" data-aos-delay="100">Puzzle <strong>Research</strong> Data Technology.</h1>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
            <h4 class="my-4">Contact Info</h4>

            <!-- <p class="mb-1">
              <i class="fa fa-phone mr-2 footer-icon"></i> 
              +99 080 070 4224
            </p> -->

            <p>
              <a href="#">
                <i class="fa fa-envelope mr-2 footer-icon"></i>
                predatech@gmail.com
              </a>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
            <h4 class="my-4">Lokasi</h4>

            <p class="mb-1">
              <i class="fa fa-map-marker mr-2 footer-icon"></i> 
              Universitas Sultan Syarif Kasim Riau
            </p>
          </div>

          <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
            <p class="copyright-text">Copyright &copy; 2020 Predatech.org
            <br>
            <!-- <a rel="nofollow noopener" href="https://templatemo.com">Design: TemplateMo</a></p> -->
          </div>

          <div class="col-lg-4 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="500">
            
            <ul class="footer-link">
              <li><a href="#">Stories</a></li>
              <li><a href="#">Work with us</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
            <ul class="social-icon">
              <li><a href="https://www.instagram.com/puzzleresearch/" class="fa fa-instagram"></a></li>
              <!-- <li><a href="#" class="fa fa-twitter"></a></li> -->
              <!-- <li><a href="#" class="fa fa-dribbble"></a></li> -->
              <!-- <li><a href="#" class="fa fa-behance"></a></li> -->
            </ul>
          </div>

        </div>
      </div>
    </footer>


     <!-- SCRIPTS -->
     <script src="<?= base_url('landing/assets/'); ?>js/jquery.min.js"></script>
     <script src="<?= base_url('landing/assets/'); ?>js/bootstrap.min.js"></script>
     <script src="<?= base_url('landing/assets/'); ?>js/aos.js"></script>
     <script src="<?= base_url('landing/assets/'); ?>js/owl.carousel.min.js"></script>
     <script src="<?= base_url('landing/assets/'); ?>js/smoothscroll.js"></script>
     <script src="<?= base_url('landing/assets/'); ?>js/custom.js"></script>
     <script src="<?= base_url('assets/sweetalert/dist'); ?>/myscript.js"></script>
          

</body>
</html>