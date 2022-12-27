<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Carriers - Orange Blossom Logistics</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/Orange3.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900|Nunito:200,300,400,400i,600,600i,700,700i,800,800i,900">
 
<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="../../css/plugins-css.css" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="../../css/typography.css" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="../../css/shortcodes/shortcodes.css" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="../../css/style.css" />

<!-- marketing -->
<link rel="stylesheet" type="text/css" href="css/marketing.css" /> 

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="../../css/responsive.css" /> 

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="css/skins/skin-orange.css" data-style="styles"/>
 
</head>

<body>
 
<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="../../images/pre-loader/loader-06.svg" alt="">
</div>

<!--=================================
 preloader -->


<!--=================================
 header -->

<header id="header" class="header default fullWidth">
 
<!--=================================
 mega menu -->

<div class="menu" id="onepagenav">  
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items" style="background-color: black ;" >
     <div class="container-fluid"> 
      <div class="row"> 
       <div class="col-lg-12 col-md-12"> 
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="https://orangeblossomlogistics.com"><img src="images/about/oblogo5.png" alt=""> </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">

			<li><a href="https://orangeblossomlogistics.com/">Home</a></li>
			
			<li><a href="https://orangeblossomlogistics.com/quote">Shippers</a></li>
             
 			<li><a href="https://orangeblossomlogistics.com/carriers">Carriers</a></li>
 			
            <li><a href="https://orangeblossomlogistics.com/about-us">About Us</a></li>
            
            <li><a href="https://orangeblossomlogistics.com/contact">Contact Us</a></li>
        </ul>
        
        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->
 
<!--=================================
 banner -->

<section class="slider-parallax height-100vh business-banner-03 bg-overlay-black-50 parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/pass2.png);">
  <div class="slider-content-middle">
   <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12">
         <div class="slider-content text-center">
           <h1 class="text-uppercase text-white"> <b>Haul With </b> Integrity.</h1>
           <span class="d-block mb-40 text-white" style="letter-spacing: 6px;">Book your next load with a trusted & reliable brokerage. </span>
          </div>
         </div>
        </div>
     </div>
  </div>
</section>
 
<!--=================================
 banner -->

<!--=================================
 contact -->

<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center mt-50">
      <div class="col-md-12">
        <div class="section-title"> 
            <h2 class="title" style="margin-bottom: revert; text-align: center;">Carrier Setup <span class="theme-bg"> Form </span> </h2>
        </div>
       </div>
      <div class="col-lg-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
<form method="post">
      <div class="contact-form clearfix">
          <div class="row" style="justify-content: center;">
            <div class="col-lg-3">
                <div class="section-field">
                <input id="firstname" type="text" placeholder="First Name*" class="form-control" name="firstname" required>
                  <?php
                      if(isset($_POST["submit"])){
        
                        $to = 'nospampleaseitsannoying@gmail.com';
                        $from_email = "ops@orangeblossomlogistics.com";
                        $subject = 'New Inquiry';
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $message = $_POST['message'];
                        date_default_timezone_set('US/Eastern');
                        $date = date('Y/m/d H:i:s');
                        
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                        $headers .= "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                        'Reply-To: <' . $_POST['email'] .'>' . PHP_EOL .
                        'X-Mailer: PHP/' . phpversion();
                        
                        $message = "<b>My Name:</b> " . $_POST['name'] . "<br />\n <b>My Phone Number:</b> " . $_POST['phone'] . "<br />\n <b>My Email:</b> " . $_POST['email'] . "<br />\n <b>Message:</b> " . $_POST['message'] . "<br />\n <b>Form Submitted:</b> " . $date;
                        
                        mail($to, $subject, $message, $headers);
                        header('Location: https://orangeblossomlogistics.com'); 
                      }
                        
                      ?>
                 </div> 
             </div>
             <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="Last Name*" class="form-control" name="lastname" required>
                  </div>
              </div>
              <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="Title*" class="form-control" name="title" required>
                  </div>
              </div>
          </div>
          <div class="row" style="justify-content: center;">
             <div class="col-lg-9">
                 <div class="section-field">
                    <input type="text" placeholder="Address*" class="form-control" name="address" required>
                  </div>
              </div>
          </div>
          <div class="row" style="justify-content: center;">
              <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="City*" class="form-control" name="city">
                  </div>
               </div>
             <div class="col-lg-2">
                 <div class="section-field">
                    <input type="text" placeholder="State/Province*" class="form-control" name="state">
                  </div>
               </div>
               <div class="col-lg-2">
                 <div class="section-field">
                    <input type="text" placeholder="Zip/Postal Code*" class="form-control" name="zipcode">
                  </div>
               </div>
               <div class="col-lg-2">
                 <div class="section-field">
                    <input type="text" placeholder="Country*" class="form-control" name="country">
                  </div>
               </div>
          </div>
          <div class="row" style="justify-content: center;">
             <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="Phone Number*" class="form-control" name="phone">
                  </div>
              </div>
             <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="MC Number*" class="form-control" name="mc">
                  </div>
             </div>
             <div class="col-lg-3">
                 <div class="section-field">
                    <input type="text" placeholder="DOT Number*" class="form-control" name="dot">
                  </div>
              </div>
          </div>
          <div class="row" style="justify-content: center;">
             <div class="col-lg-9">
                 <div class="section-field">
                    <input type="email" placeholder="Email*" class="form-control" name="email" required>
                  </div>
              </div>
          </div>
          <div class="row" style="justify-content: center;">
             <div class="col-lg-9">
            <div class="section-field">
              <div class="mb-20">
                     <label> Payment Option: * </label>
              </div>
              <div class="remember-radio mb-30">
                     <input type="radio" name="payment" id="check" />
                     <label for="check"> Check By Mail (30 days)</label>
               </div>
               <div class="remember-radio mb-30">
                     <input type="radio" name="payment" id="quickpay" />
                     <label for="quickpay"> Quickpay 2-3 days (5%)</label>
                </div>
               <div class="remember-radio mb-30">
                     <input type="radio" name="payment" id="quickpay1" />
                     <label for="quickpay1"> Quickpay 5-7 days (3%)</label>
                </div>
                <div class="remember-radio mb-30">
                     <input type="radio" name="payment" id="factoring" />
                     <label for="factoring"> Factoring Company</label>
                </div>
              </div>
              </div>
          </div>
          <div class="row" style="justify-content: center;">
              <div class="col-lg-9" style=" text-align: center; ">
                  <div class="section-field textarea">
                    <textarea class="input-message form-control" placeholder="Message*"  rows="7" name="message" required></textarea>
                  </div>
              </div>
          </div>
        <!-- Google reCaptch-->
      <div class="g-recaptcha section-field clearfix" data-sitekey="6Lf5W8ceAAAAAMBGsT9ctwN8xYrysTw-7UBR9LuQ"></div>
      <style>
          .contact-form .section-field
          {
              width: 100%;
          }
      </style>
      <div class="row">
          <div class="col-lg-12" style=" text-align: center; ">
         <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Submit </span> <i class="fa fa-paper-plane"></i></button>
          </div> 
        </form>
           <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="../../images/pre-loader/loader-02.svg" alt=""></div>
        </div>
    </div>
  </div>
</section>

<!--=================================
 contact -->
 
<!--=================================
 footer -->

<footer class="footer page-section-pt black-bg">
 <div class="container ">
  <div class="row">
  <div class="col-lg-8 col-md-8 col-sm-8 sm-mb-30 mb-30">
		<img src="images/about/bottomlogo1.png" alt="">
		<p class="mt-15"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <b> Orange Blossom Logistics LLC </b> </p>
  </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
    <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
    <ul class="addresss-info"> 
        <li><i class="fa fa-map-marker"></i> <p>Location: Orlando, FL </p> </li>
        <li><i class="fa fa-envelope-o"></i>Email: ops@orangeblossomlogistics.com</li>
      </ul>
    </div>
   </div>
  </div>
</footer>

<!--=================================
 footer -->

</div>

<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="../../js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="../../js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '../../js/';</script>
 
<!-- custom -->
<script src="../../js/custom.js"></script>
  
</body>
</html>