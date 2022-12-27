<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Contact - Orange Blossom Logistics</title>

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
page-title-->

<section class="page-title center light-overlay parallax" data-jarallax='{"speed": 0.6}' style="background-image: url(images/office.png);">
  <div class="container">
    <div class="row"> 
      <div class="col-lg-12 pt-140"> 
         <div class="slider-content text-center">
           <!-- <h1 class="text-uppercase text-black"> <b>Contact </b> Us</h1> -->
          </div>
     </div>
     </div>
  </div>
</section>

<!--=================================
page-title -->

<!--=================================
 contact -->

<section class="page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="section-title">
            <h1 class="text-uppercase text-black" style="text-align: center; margin-bottom: 45px;"> <b>Contact </b> Us</h1>
            <p class="mb-50" style="text-align: center;">Send us a message and one of our agents will reach back out within <span style="color: #ED5001" data-original-title="Mon-Fri 10am–7pm (GMT +1)" data-toggle="tooltip" data-placement="top"> 12 hours!</span></p>
        </div>
       </div>
      <div class="col-lg-12">
        <div id="formmessage">Success/Error Message Goes Here</div>
<form method="post">
      <div class="contact-form clearfix">
          <div class="row">
            <div class="col-lg-4">
                <div class="section-field">
                <input id="name" type="text" placeholder="Name*" class="form-control" name="name" required>
                  <?php
                      if(isset($_POST["submit"])){
                          
                      function CheckCaptcha($userResponse) {
                            $fields_string = '';
                            $fields = array(
                                'secret' => '6Lf5W8ceAAAAAAcJh3stpSafBgIl6poE6IBQp28E',
                                'response' => $userResponse
                            );
                            foreach($fields as $key=>$value)
                            $fields_string .= $key . '=' . $value . '&';
                            $fields_string = rtrim($fields_string, '&');
                    
                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
                            curl_setopt($ch, CURLOPT_POST, count($fields));
                            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
                    
                            $res = curl_exec($ch);
                            curl_close($ch);
                    
                            return json_decode($res, true);
                        }
                        
                            // Call the function CheckCaptcha
                            $result = CheckCaptcha($_POST['g-recaptcha-response']);
                        
                            if ($result['success']) {
                                //If the user has checked the Captcha box
                                echo "Captcha verified Successfully";
                        	
                            } else {
                                // If the CAPTCHA box wasn't checked
                               echo '<script>alert("Error Message");</script>';
                                }
                                
        
                        $to = 'orangeblossomlogistics@gmail.com';
                        $from_email = "ops@orangeblossomlogistics.com";
                        $subject = 'OBL - General Inquiry';
                        $phone = $_POST['phone'];
                        $email = $_POST['email'];
                        $comments = $_POST['comments'];
                        date_default_timezone_set('US/Eastern');
                        $date = date('Y/m/d H:i:s');
                        
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                        $headers .= "From: $from_email" . "\r\n" . "Reply-To: $email"  ;
                        'Reply-To: <' . $_POST['email'] .'>' . PHP_EOL .
                        'X-Mailer: PHP/' . phpversion();
                        
                        $message = "<b>My Name:</b> " . $_POST['name'] . "<br />\n <b>My Phone Number:</b> " . $_POST['phone'] . "<br />\n <b>My Email:</b> " . $_POST['email'] . "<br />\n <b>Comments:</b> " . $_POST['comments'] . "<br />\n <b>Form Submitted:</b> " . $date;
                        
                        mail($to, $subject, $message, $headers);
                        header('Location: https://orangeblossomlogistics.com'); 
                      }
                        
                      ?>
                 </div> 
             </div>
             <div class="col-lg-4">
                 <div class="section-field">
                    <input type="text" placeholder="Phone*" class="form-control" name="phone" required>
                  </div>
              </div>
              <div class="col-lg-4">
                 <div class="section-field">
                    <input type="email" placeholder="Email" class="form-control" name="email">
                  </div>
               </div>
          </div>
          <div class="row">
              <div class="col-lg-12">
                  <div class="section-field textarea">
                    <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="comments" required></textarea>
                  </div>
              </div>
          </div>
        <!-- Google reCaptch-->
      <div style=" text-align: -webkit-center; "class="g-recaptcha section-field clearfix" data-sitekey="6Lf5W8ceAAAAAMBGsT9ctwN8xYrysTw-7UBR9LuQ"></div>
      <style>
          .contact-form .section-field
          {
              width: 100%;
          }
      </style>
      <div class="row">
          <div class="col-lg-12" style=" text-align: center; ">
         <button id="submit" name="submit" type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!-- plugins-jquery -->
<script src="../../js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '../../js/';</script>
 
<!-- custom -->
<script src="../../js/custom.js"></script>
  
</body>
</html>