<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // $to = 'akhilmuduli1@gmail.com'; // Replace with your email address
    // $subject = 'New Contact Form Submission';
    // $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    $mail_head = "From: ".$name."<".$email.">\r\n";

    $recipient = "akhilmuduli1@gmail.com";


    mail($recipient, $subject, $message, $mail_head)
    or die('Error!')
    
    echo '




    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="main.js"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header bg-black">
      <div class=" navbar container container-xl d-flex align-items-center justify-content-between">
  
        <a href="index.html" class="logo d-flex align-items-center my-lg-3">
          <img src="logo.PNG" class="lg img-fluid" width="100" height="100" alt="">
          <img src="lt.PNG" class="mt-3 lt" width="300" alt="">
  
          <div class="icons d-flex align-content-center">
            <i class="fa-solid fa-location-dot my-2 mx-2 text-white"></i>
            <h5 class="text-white">Gurgaon</h5>
          </div>
          <!-- <span><p class="c">Cloud</p></span><span><p class="f">Flix</p></span><span><p class="m"> Media</p></span> -->
        </a>
  
        <ul class="icon-ul">
          <li><a class="getstarted scrollto" href="about.html" onClick="scrollToContact()">About Us</a></li>
          <div class="d-flex justify-content-center mx-4">
            <i class="fa-solid fa-location-dot mx-2 text-white"></i>
            <h5 class="text-white">Gurgaon</h5>
  
            <a href="#pricing" onClick="scrollToPricing()"><i class="fa-solid fa-cart-shopping mx-3 my-1 text-white fs-4"></i>          </a>
          </div>
        </ul>
  
      </div>
  
      <input type="checkbox" id="check">
      <label for="check">
        <i class="fa-solid fa-bars" style="font-size:25px;" id="btn"></i>
        <i class="fa-solid fa-times" id="cancel"></i>
      </label>
  
  
      <div class="slidebar">
        <div id="head">
          <label for="check">
            <i class="fa-solid fa-times" style="position: absolute; left: 195px; top: 16px;" id="cancel2"></i>
          </label>
          <img src="logo.PNG" class="img-fluid" width="100" height="100" alt="">
  
        </div>
        <ul>
          <li><a href="#"><i class="fa-solid fa-house" style="font-size: small; padding:0 15px;"></i>Home</a></li>
          <li class="dropdown nav-link scrollto"><a href="#services"><i class="fa-solid fa-wand-magic-sparkles" style="font-size: small; padding:0 15px;"></i>Services</a>
            <ul>
              <li class="dropdown nav-link scrollto"><a href="content-marketing.html"><i class="fa-solid fa-earth-americas" style="font-size: small; padding:0 15px;"></i>online services</a>
                <ul>
                  <li><a href="content-marketing.html">Digital Marketing</a></li>
                  <li><a href="app-development.html">Radio Advertisment</a></li>
                  <li><a href="search-engine-optimization.html">Business SEO</a></li>
                  <li><a href="search-engine-optimization.html">Company SEO</a></li>
                  <li><a href="ppc-management.html">Video Editing</a></li>
                  <li><a href="social-media.html">Website Designing</a></li>
                  <li><a href="social-media.html">Influencer marketing</a></li>
                </ul>
              </li>
              <li class="dropdown nav-link scrollto"><a href="content-marketing.html"> <i class="fa-solid fa-user-robot-xmarks" style="font-size: small; padding:0 15px;"></i>offline services</a>
                <ul>
                  <li><a href="index-2.html">Newspapers Ads</a></li>
                  <li><a href="index-3.html">Banners</a></li>
                  <li><a href="index-4.html">Pamphlets</a></li>
                  <li><a href="index-5.html">Auto rickshaw Branding</a></li>
                  <li><a href="index-6.html">PVR</a></li>
  
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-link scrollto"><a href="#pricing"><i class="fa-solid fa-truck-fast" style="font-size: small; padding:0 15px;"></i>Our Packages</a>
            <ul>
              <li class="dropdown nav-link scrollto"><a href="portfolio-masonry.html">Basic</a>
                <ul>
                  <li><a href="">15 Graphic Designs</a></li>
                  <li><a href="">Setting Ads Campaign</a></li>
                  <li><a href="">social media handeling</a></li>
                  <li><a href="">Google reviews</a></li>
                  <li><a href="">Photos and video shoots
                  </a></li>
  
                </ul>
              </li>
              <li class="dropdown nav-link scrollto"><a href="portfolio-grid.html">Standard</a>
                <ul>
                  <li><a href="">15 Graphic Designs</a></li>
                  <li><a href="">Setting Ads Campaign</a></li>
                  <li><a href="">social media handeling</a></li>
                  <li><a href="">Google reviews</a></li>
                  <li><a href="">Photos and video shoots</a></li>
                  <li><a href="">SEO</a></li>
                  <li><a href="">website designing</a></li>
                  <li><a href="">Website optimisation</a></li>
  
                </ul>
              </li>
              <li class="dropdown nav-link scrollto"><a href="portfolio-grid-2.html">Premium</a>
                <ul>
                  <li><a href="">20 Graphic Designs</a></li>
                  <li><a href="">Setting Ads Campaign</a></li>
                  <li><a href="">social media handeling</a></li>
                  <li><a href="">Google reviews</a></li>
                  <li><a href="">Photos and video shoots</a></li>
                  <li><a href="">SEO</a></li>
                  <li><a href="">website designing</a></li>
                  <li><a href="">Website optimisation</a></li>
                  <li><a href="">Bot Master</a></li>
  
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#Contact"><i class="fa-solid fa-user" style="font-size: small; padding: 0 15px;"></i>Contact us</a></li>
        </ul>
  
      </div>
  
  
      <div class="lower-nav d-flex justify-content-center ">
        <nav id="navbar" class="navbar align-content-center d-flex justify-content-between">
          <ul id="navigate_ul">
            <li id="home" class="dropdown"><a href="#hero" style="color: rgba(255, 0, 166, 0.816);"><span>Home</span></a>
  
            </li>
            <li class="dropdown nav-link scrollto"><a href="#services" onClick="scrollToService()"><span>Services</span><i
                  class="fa-solid fa-angle-down"></i></a>
              <ul>
                <li class="dropdown nav-link scrollto"><a href="content-marketing.html">online services</a>
                  <ul>
                    <li><a href="content-marketing.html">Digital Marketing</a></li>
                    <li><a href="search-engine-optimization.html">Business SEO</a></li>
                    <li><a href="search-engine-optimization.html">Company SEO</a></li>
                    <li><a href="ppc-management.html">Video Editing</a></li>
                    <li><a href="social-media.html">Website Designing</a></li>
                    <li><a href="social-media.html">Influencer marketing</a></li>
                  </ul>
                </li>
                <li class="dropdown nav-link scrollto"><a href="content-marketing.html">offline services</a>
                  <ul>
                    <li><a href="index-2.html">Newspapers-advertising</a></li>
                    <li><a href="index-3.html">Banners</a></li>
                    <li><a href="index-4.html">Pamphlets</a></li>
                    <li><a href="app-development.html">Hoardings and Flexes</a></li>
                    <li><a href="app-development.html">Radio-advertising</a></li>
                    <li><a href="index-5.html">Auto rickshaw Branding</a></li>
                    <li><a href="index-6.html">PVR</a></li>
  
                  </ul>
                </li>
              </ul>
            </li>
  
            <!-- <li class="dropdown nav-link scrollto"><a href="#hero" onClick="scrollToPages()"><span>Pages</span><i class="fa-solid fa-angle-down"></i></a>
              <ul>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="our-team.html">Our Team</a></li>
                <li><a href="single-team.html">Single Team</a></li>
                <li><a href="our-process.html">Our Process</a></li>
                <li><a href="faq.html">FAQs</a></li>
                <li><a href="element.html">Elements</a></li>
                <li><a href="typography.html">Typography</a></li>
                <li><a href="coming-soon.html">Coming Soon</a></li>
                <li><a href="error.html">Error</a></li>
              </ul>
            </li> -->
            <li class="dropdown nav-link scrollto"><a href="#pricing" onClick="scrollToPort()"><span>Packages</span> <i
                  class="fa-solid fa-angle-down"></i></a>
              <ul>
                <li class="dropdown nav-link scrollto"><a href="portfolio-masonry.html">Basic</a>
                  <ul>
                    <li><a href="">15 Graphic Designs</a></li>
                    <li><a href="">Setting Ads Campaign</a></li>
                    <li><a href="">social media handeling</a></li>
                    <li><a href="">Google reviews</a></li>
                    <li><a href="">Photos and video shoots
                    </a></li>
  
                  </ul>
                </li>
                <li class="dropdown nav-link scrollto"><a href="portfolio-grid.html">Standard</a>
                  <ul>
                    <li><a href="">15 Graphic Designs</a></li>
                    <li><a href="">Setting Ads Campaign</a></li>
                    <li><a href="">social media handeling</a></li>
                    <li><a href="">Google reviews</a></li>
                    <li><a href="">Photos and video shoots</a></li>
                    <li><a href="">SEO</a></li>
                    <li><a href="">website designing</a></li>
                    <li><a href="">Website optimisation</a></li>
  
                  </ul>
                </li>
                <li class="dropdown nav-link scrollto"><a href="portfolio-grid-2.html">Premium</a>
                  <ul>
                    <li><a href="">20 Graphic Designs</a></li>
                    <li><a href="">Setting Ads Campaign</a></li>
                    <li><a href="">social media handeling</a></li>
                    <li><a href="">Google reviews</a></li>
                    <li><a href="">Photos and video shoots</a></li>
                    <li><a href="">SEO</a></li>
                    <li><a href="">website designing</a></li>
                    <li><a href="">Website optimisation</a></li>
                    <li><a href="">Bot Master</a></li>
  
                  </ul>
                </li>
              </ul>
            </li>
            <!-- <li class="dropdown nav-link scrollto"><a href="features" onClick="scrollToShop()"><span>Shop</span><i class="fa-solid fa-angle-down"></i></a>
              <ul>
                <li><a href="shop.html">Catelog Page</a></li>
                <li><a href="cart.html">Shopping Cart</a></li>
                <li><a href="checkout.html">Checkout Page</a></li>
                <li><a href="single-product.html">Single Product</a></li>
              </ul>
            </li> -->
  
          </ul>
          <!-- <i class="fa-solid fa-bars mobile-nav-toggle m-3"></i> -->
          <ul>
            <a style="color: #fff; font-size: medium;" class="mx-3">Follow us on <i class="fa-solid fa-arrow-right"></i></a>
            <div class=" d-flex justify-content-center align-items-center" style="color: #fff; font-size: large;">
              <i class="fa-brands fa-instagram mx-3"></i>
              <i class="fa-brands fa-facebook mx-3"></i>
              <i class="fa-brands fa-linkedin-in mx-3"></i>
            </div>
          </ul>
  
  
        </nav><!-- .navbar -->
      </div>
    </header><!-- End Header -->
  


    <!-- <div class="col-lg-6 hero2" data-aos="zoom-out" data-aos-delay="200"> -->
      <!-- <img src="Usability testing.gif" id="lp" data-aos="zoom-in" class="img-fluid" alt=""> -->
      
    <!-- </div> -->
  
    <!-- ======= Contact Section ======= -->
    <section id="Contact_pg" class="contact">

      <div class="container cont" data-aos="fade-up">
  
        <header class="section-header">
          <h2>Contact</h2>
          <p>Get In Touch</p>
        </header>
  
        <h2>Thank you for sending the querry our team will contact u soon !</h2>
        <p class="home">You may Leave to <a href="index.html" class="octf-btn"> home page !</a></p>
      </div>
  
    </section><!-- End Contact Section -->


    <section class="contact"  id="about">
      <div class="container">
        <header class="section-header" data-aos="fade-up">
          <h2>Who we are ?</h2>
          <p>Our objectives and profile</p>
        </header>
  
        <div class="btn-contact">
          <a target="_blank" href="about.html" class="box octf-btn d-flex
          justify-content-center text-capitalize" data-aos="fade-up">
            let's get in
            <i class="fa-solid fa-arrow-right mx-2"></i>
          </a>
        </div>
      </div>
    </section>
    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer" style="  padding: 0 0 30px 0;
  font-size: 14px;">

    <div class="footer-newsletter" style="padding: 50px 0;
    background-image: radial-gradient(circle, #051937, #081531, #0b112b, #0b0b25, #0a051f) !important; 
    background-size: contain;
   border-top: 1px solid #e1ecff;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4 style="color: #f61677 !important; font-size: 24px;
            margin: 0 0 10px 0;
            padding: 0;
            line-height: 1;
            font-weight: 700;
            color: #feffff;">Our Newsletter</h4>
            <p style="color: #fff;">"Unleashing Innovation, Inspiring Change: Introducing Cloud Flix Media and Mr. Surjeet Pradhan"</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post" style="  margin-top: 20px;
            background: #fff;
            padding: 6px 10px;
            position: relative;
            border-radius: 50px;
            border: 1px solid #e1ecff;
            outline: none;">
              <input type="email" name="email" style="border: 0;
              padding: 8px;
              width: calc(100% - 140px);
              outline: none;">
              <input type="submit" value="Subscribe" class="octf-btn" style="  position: absolute;
              top: 0;
              right: 0;
              bottom: 0;
              border: 0;
              background: none;
              font-size: 16px;
              padding: 0 30px;
              margin: 3px;
              background:#020610; 
               color: #fff;
              transition: 0.3s;
              border-radius: 50px;
              box-shadow: 0px 5px 30px rgba(65, 84, 241, 0.4);">
            </form>
          </div>
        </div>
      </div>
    </div>

    <style>
      .footer .footer-top .footer-links ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
      }

      .footer .footer-top .footer-links ul i {
        padding-right: 2px;
        color: #d0d4fc;
        font-size: 12px;
        line-height: 0;
      }

      .footer .footer-top .footer-links ul li {
        padding: 10px 0;
        display: flex;
        align-items: center;
      }

      .footer .footer-top .footer-links ul li:first-child {
        padding-top: 0;
      }

      .footer .footer-top .footer-links ul a {
        color: #ffffff;
        transition: 0.3s;
        display: inline-block;
        line-height: 1;
      }
    </style>
    <div class="footer-top" style=" box-shadow: 0px 2px 20px rgba(19, 19, 20, 0.203);
    background-image: radial-gradient(circle, #051937, #081531, #0b112b, #0b0b25, #0a051f);    background-size: contain;
    border-top: 1px solid #e1ecff;
    border-bottom: 1px solid #e1ecff;
    padding: 60px 0 30px 0;">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info" style="    margin-bottom: 30px;
          ">
            <a href="index.html" class="logo d-flex align-items-center" style="  line-height: 0;
            margin-bottom: 15px;">
              <span style="font-size: 30px;
              font-weight: 700;
              letter-spacing: 1px;
              color: #ffffff;
              font-family: 'Nunito', sans-serif;
              margin-top: 3px;"></span>
              <img src="lt.PNG" style="  max-height: 40px;
              margin-right: 6px;" alt="">

            </a>
            <p style="   font-size: 14px;
            line-height: 24px;
            margin-bottom: 0;
            color: #fff;
            font-family: 'Nunito', sans-serif;">
"Connect with us for the latest updates, industry insights, and exciting opportunities. Together, let's shape the future of media with Cloud Flix Media and Mr. Surjeet Pradhan. Follow us on social media and visit our website to stay in the loop. Join the revolution today!"</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4 style="  font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;">Useful Links</h4>
            <ul>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">About us</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Services</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Terms of service</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links" style="    margin-bottom: 30px;
          ">
            <h4 style="  font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;">Our Services</h4>
            <ul>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#" style="    padding-top: 0;
                ">SEO</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Web Development</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Product Management</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Marketing</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Graphic Design</a></li>
              <li><i class=" fa-solid fa-arrow-right"></i> <a href="#">Outdoor advertisement</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4 style="  font-size: 16px;
            font-weight: bold;
            color: #ffffff;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 12px;">Contact Us</h4>
            <p style="color: #fff;">HARISH MATTOO,<br>
              AREA MARKETING HEAD
             <br><br>
              <strong>Phone:</strong> +916005345655<br>
              <strong>Email:</strong> cloudflixmedia@gmail.com<br>

              <div class="copyright" style=" text-align: center;
              padding-top: 30px;
              color: rgb(255, 255, 255);
              font-weight: bold;">
                &copy; Copyright <strong><span>CW media</span></strong>. All Rights Reserved <a href="#">by Cloud flix media</a>
              </div>
              <div class="credits" style=" padding-top: 10px;
              text-align: center;
              font-size: 15px;
              color: rgb(255, 255, 255);">
                Designed by <a href="#" style="    padding-top: 10px;
                text-align: center;
                font-size: 13px;
                font-weight: bold;
                color: rgb(255, 255, 255);">Akhil Muduli</a>
              </div>
            </p>

          </div>

        </div>
      </div>
    </div>


  </footer>

</body>
</html>





    ';
?>
