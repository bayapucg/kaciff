<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi Templete'; ?>
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="<?php echo isset($logo_details['keywords'])?$logo_details['keywords']:'Prachatech'; ?>" name="keywords">
    <meta content="<?php echo isset($logo_details['description'])?$logo_details['description']:'Prachatech'; ?>" name="description">
    <?php if(isset($logo_details['favicon']) && $logo_details['favicon']!=''){ ?>
    <link href="<?php echo base_url('assets/logo/'.$logo_details['favicon']); ?>" rel="icon">
    <?php }else{ ?>
    <link href="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" rel="icon">
    <?php } ?>
    <!-- Favicons -->



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="<?php echo base_url(); ?>assets/vendor/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/vendor/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="<?php echo base_url(); ?>assets/vendor/css/style.css" rel="stylesheet">


</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header" class="header-scrolled">
        <div class="container-fluid">

            <div id="logo" class="pull-left logo-header">
                <?php if(isset($logo_details['image']) && $logo_details['image']!=''){ ?>
                <img class="" src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="<?php echo isset($logo_details['org_image'])?$logo_details['org_image']:''; ?>">
                <?php }else{ ?>
                <img class="" src="<?php echo base_url(); ?>assets/vendor/admin/img/logo.png" alt="Logo">
                <?php } ?>

            </div>


            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#intro">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#testimonials">Biographies</a></li>
                    <li><a href="#portfolio">Gallery</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <?php if(isset($slider_details) && count($slider_details)>0){ ?>
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <?php $cnt=1;foreach($slider_details as $list){ ?>
                    <input type="hidden" name="slider_id[]" id="slider_id" value="<?php echo isset($list['s_id'])?$list['s_id']:''; ?>">
                    <?php if($cnt==1){ ?>
                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>
                                    <?php echo isset($list['text'])?$list['text']:''; ?>
                                </h2>

                            </div>
                        </div>
                    </div>
                    <?php }else{ ?>
                    <div class="carousel-item">
                        <div class="carousel-background"><img src="<?php echo base_url('assets/slider/'.$list['image']); ?>" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>"></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>
                                    <?php echo isset($list['text'])?$list['text']:''; ?>
                                </h2>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $cnt++;} ?>





                    <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
    </section><!-- #intro -->
    <?php } ?>

    <main id="main">

        <!--==========================
      Featured Services Section
    ============================-->
        <?php if(isset($aboutus_details) && count($aboutus_details)>0){ ?>
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>About Us</h3>
                    <p>
                        <?php echo isset($aboutus_details['parahraph'])?$aboutus_details['parahraph']:''; ?>
                    </p>
                </header>
                <input type="hidden" name="about_us_a_id" id="about_us_a_id" value="<?php echo isset($aboutus_details['a_id'])?$aboutus_details['a_id']:''; ?>">

            </div>
        </section><!-- #about -->
        <?php } ?>
 <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>Call To Action</h3>
                <p> We are happy to serve you. Please reach out to us below.</p>
                <a class="cta-btn" href="#contact">Call To Action</a>
            </div>
        </section>
        
        <?php if(isset($testimonials_details) && count($testimonials_details)>0){ ?>
        <section id="testimonials" class="section-header wow fadeInUp">
            <div class="container">

                <header class="section-header">
                    <h3>Biographies</h3>
                </header>

                <div class="owl-carousel testimonials-carousel">
                    <?php foreach($testimonials_details as $list){ ?>
                  

                    <div class="testimonial-item">
                        <img src="<?php echo base_url(); ?>assets/logo/testimonial-user-img.png" class="testimonial-img" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                        <h3>
                            <?php echo isset($list['name'])?$list['name']:''; ?>
                        </h3>
                        <h4>
                            <?php echo isset($list['designation'])?$list['designation']:''; ?>
                        </h4>
                        <p>
                            <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-left.png" class="quote-sign-left" alt="">
                            <?php echo isset($list['paragraph'])?$list['paragraph']:''; ?>.
                            <img src="<?php echo base_url(); ?>assets/vendor/img/quote-sign-right.png" class="quote-sign-right" alt="">
                        </p>
                    </div>
                    <?php } ?>

                </div>

            </div>
        </section><!-- #testimonials -->

        <?php } ?>
        

        <?php if(isset($gallery_details) && count($gallery_details)>0){ ?>

        <section id="portfolio" class="section-bg">
            <div class="container">

                <header class="section-header">
                    <h3 class="section-title">Our Gallery</h3>
                </header>


                <div class="row portfolio-container">
                    <?php foreach($gallery_details as $list){ ?>
                    <input type="hidden" name="gallery_id[]" id="gallery_id" value="<?php echo isset($list['g_id'])?$list['g_id']:''; ?>">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img title="<?php echo isset($list['text'])?$list['text']:''; ?>" src="<?php echo base_url('assets/gallery/'.$list['image']); ?>" class="img-fluid" alt="<?php echo isset($list['org_image'])?$list['org_image']:''; ?>">
                                <a href="<?php echo base_url('assets/gallery/'.$list['image']); ?>" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                <!--<a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>-->
                            </figure>
                        </div>
                    </div>
                    <?php } ?>


                </div>

            </div>
        </section><!-- #portfolio -->

        <?php } ?>


        <section id="contact" class="section-header wow fadeInUp">
            <div class="container">

                <div class="section-header">
                    <h3>Contact Us</h3>
                    <p>We are happy to serve you. Please reach out to us below.</p>
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="ion-ios-location-outline"></i>
                            <h3>Address</h3>
                            <address>
                                <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?></address>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+155895548855">
                                    <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?></a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:info@example.com">
                                    <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?></a></p>
                        </div>
                    </div>

                </div>

                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="<?php echo base_url('preview/contactpost'); ?>" method="post" role="form" class="">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit" name="submit">Send Message</button></div>

                    </form>
                </div>

            </div>
        </section><!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4  footer-info">
                        <div id="logo" class="pull-left logo-header">
                            <?php if($logo_details['image']==''){ ?>
                            <img src="<?php echo base_url(); ?>assets/vendor/img/logo.png" alt="logo" class="img-fluid py-5">
                            <?php }else{ ?>
                            <img src="<?php echo base_url('assets/logo/'.$logo_details['image']); ?>" alt="logo" class="img-fluid py-5">
                            <?php } ?>


                            <p>
                                <?php echo isset($contactus_details['address'])?$contactus_details['address']:''; ?>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#intro">Home</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#about">About us</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#testimonials">Biographies</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#portfolio">Gallery</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <strong>Phone:</strong>
                            <?php echo isset($contactus_details['phone'])?$contactus_details['phone']:''; ?><br>
                            <strong>Email:</strong>
                            <?php echo isset($contactus_details['email'])?$contactus_details['email']:''; ?><br>
                        </p>

                        <div class="social-links">
                            <a href="<?php echo isset($contactus_details['twitter_link'])?$contactus_details['twitter_link']:'#'; ?>" target="_balnk" class="twitter"><i class="fa fa-youtube"></i></a>
                            <a href="<?php echo isset($contactus_details['facebook_link'])?$contactus_details['facebook_link']:'#'; ?>" target="_balnk" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo isset($contactus_details['instagram_link'])?$contactus_details['instagram_link']:'#'; ?>" target="_balnk" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="<?php echo isset($contactus_details['google_plus'])?$contactus_details['google_plus']:'#'; ?>" target="_balnk" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="<?php echo isset($contactus_details['linkedIn_link'])?$contactus_details['linkedIn_link']:'#'; ?>" target="_balnk" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>
                    <?php echo isset($logo_details['title'])?$logo_details['title']:'Pracha Multi'; ?></strong>. All Rights Reserved
            </div>
            <div class="credits">

                Designed by <a href="https://prachatech.com/">prachatech</a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/jquery/jquery-migrate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/hoverIntent.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/superfish/superfish.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="<?php echo base_url(); ?>assets/vendor/js/main.js"></script>

</body>

</html>
<?php if($this->session->flashdata('success')): ?>
<div class="alert_msg1 animated slideInUp bg-succ">
    <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>
<?php if($this->session->flashdata('error')): ?>
<div class="alert_msg1 animated slideInUp bg-warn">
    <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i>
</div>
<?php endif; ?>