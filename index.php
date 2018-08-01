<?php
require_once ("connection.php");

$query = "SELECT * FROM review LIMIT 4";

$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Imperial Hotels</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Client Signup Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- Custom Theme files -->
  <link href="css/formstyle.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script
  <!-- //Custom Theme files -->
  <!-- web font -->
  <link href="//fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->

  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>
  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#testimonials">Reviews</a></li>
          <li class="menu-has-children"><a >User</a>
            <ul>
              <li><a class="btn-get-started" role="button" data-toggle="modal" data-target="#login">Login</a></li>
              <li><a class="btn-get-started" role="button" data-toggle="modal" data-target="#signup">Signup</a></li>
              <li><a class="btn-get-started" role="button" data-toggle="modal" data-target="#admin">Admin</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
          <img class="" src="img/logo.png" alt="Imperial">
        </div>

        <h1>Welcome to Imperial Hotel</h1>
        <h2>We create <span class="rotating">beautiful views, functional pools, working Gym</span></h2>
        <div class="actions">
          <a class="btn-get-started" role="button" data-toggle="modal" data-target="#signup">Signup</a>
          <a class="btn-get-started" role="button" data-toggle="modal" data-target="#login" >Login</a>
        </div>
      </div>
    </div>
  </section>



  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="img/about-img.jpg" alt="">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">We provide great services and ideass</h2>
          <p class="about-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
            id est laborum
          </p>
          <p class="about-text">
            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt molli.
          </p>
        </div>
      </div>
    </div>
  </section>
  <div id="login" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                  <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                      <div class="panel panel-info" >
                          <div style="padding-top:20px" class="panel-body" >

                              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                              <form id="loginform" class="form-horizontal" role="form" method="post" action="login.php">

                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input id="login-username" type="text" class="form-control" name="username"  placeholder="username">
                                  </div>

                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                  </div>

                                  <div class="input-group">
                                      <div class="checkbox">
                                          <label>
                                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                          </label>
                                      </div>
                                  </div>

                                  <div style="margin-top:10px" class="form-group">
                                      <!-- Button -->

                                      <div class="col-sm-12 controls">
                                          <input type="submit" class="btn btn-success" name="submit" value="Login">

                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12 control">
                                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                              Don't have an account!
                                              <a class="btn-get-started" role="button" data-toggle="modal" data-target="#signup" >
                                                  Sign Up Here
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>



  <div id="admin" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Admin Login</h4>
              </div>
              <div class="modal-body">
                  <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                      <div class="panel panel-info" >
                          <div style="padding-top:20px" class="panel-body" >

                              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                              <form id="loginform" class="form-horizontal" role="form" method="post" action="admin.php">

                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      <input id="login-username" type="text" class="form-control" name="username"  placeholder="staff number">
                                  </div>

                                  <div style="margin-bottom: 25px" class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                  </div>

                                  <div class="input-group">
                                      <div class="checkbox">
                                          <label>
                                              <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                          </label>
                                      </div>
                                  </div>

                                  <div style="margin-top:10px" class="form-group">
                                      <!-- Button -->

                                      <div class="col-sm-12 controls">
                                          <input type="submit" class="btn btn-success" name="submit" value="Login">

                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <div class="col-md-12 control">
                                          <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                              Don't have an account!
                                              <a class="btn-get-started" role="button" data-toggle="modal" data-target="#signup" >
                                                  Sign Up Here
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              <br>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>



  <div id="signup" class="modal fade" role="dialog">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Signup</h4>
              </div>
              <div class="modal-body">
                  <form action="processsignup.php" method="post" accept-charset="utf-8" class="form" role="form">
                      <h4>It's free and always will be.</h4>
                      <div class="row">
                          <div class="col-xs-6 col-md-6">
                              <input type="text" name="fname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                          <div class="col-xs-6 col-md-6">
                              <input type="text" name="lname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                      </div>
                      <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                      <input type="text" name="username" value="" class="form-control input-lg" placeholder="Your Username"  />
                      <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                      <input type="password" name="confirmpassword" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                      <input type="text" name="pnumber" value="" class="form-control input-lg" placeholder="Mobile Number"  />
                      <input type="text" name="address" value="" class="form-control input-lg" placeholder="Your Address"  />


                      <label for="acct_type">Gender:</label>

                      <label class="radio-inline">
                          <input type="radio" name="gender" value="Male">Male
                      </label>
                      <label class="radio-inline">
                          <input type="radio" name="gender" value="Female">Female
                      </label>
                      <br />
                      <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                      <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" name="submit">
                          Create my account</button>
                  </form>
              </div>
              <br>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>



<!--  <!--==========================-->


  <!--==========================
  Testimonials Section
  ============================-->

  <section id="testimonials">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Reviews</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">WHAT OUR CUSTOMERS ARE SAYING ABOUT US</p>
        </div>
      </div>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
      <div class="row">
        <div class="col-md-3">
          <div class="profile">
            <h4><?php echo $row['firstname']. ' '.$row['lastname']; ?></h4>
          </div>
        </div>
        <div class="col-md-9">
          <div class="quote">
             <?php echo $row['comment']; ?>
          </div>
        </div>
      </div>
        <?php
        }
        ?>

    </div>
  </section>



  <!--==========================
  Contact Section
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Contact Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Reach us through:</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-md-push-2">
          <div class="info">
            <div>
              <i class="fa fa-map-marker"></i>
              <p>12, Oluwole Close<br>Akoka, Lagos.</p>
            </div>

            <div>
              <i class="fa fa-envelope"></i>
              <p>dharmykoya38@gmail.com</p>
            </div>

            <div>
              <i class="fa fa-phone"></i>
              <p>08037145164</p>
            </div>

          </div>
        </div>

        <div class="col-md-5 col-md-push-2">
          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!--<div class="copyright">-->
            <!--&copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved-->
          <!--</div>-->
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
            <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>


</body>

</html>
