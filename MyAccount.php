<?php  include 'controller/authController.php'      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Bootstrap Css -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Custom Css -->
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style media="screen">
  .errors{
      color: red;
    }

    .error{
        color: red;
      }
  </style>


    <title>Namejet</title>
  </head>
  <body>
        <!-- Container start -->
           <div class="container">
                  <!-- Fulll Body -->
               <div id="full-body" class="">

                    <!-- Header Part -->
               <div class="haeder">


                      <div id="head-first"  class="row">    <!--start domain name -->
                       <div id="pre" class="col-md-6">
                           <h6 class="pt-2">The Premier Domain Name Aftermarket Service</h6>
                          </div>
                          <div class="col-md-6 pt-1" style="text-align:right;">
                              UserGuide:<a href="#"><img src="india.png"   alt="" width="20px" height="20px"></a>
                              <span class="support" >?support</span>
                          </div>

                        </div>           <!-- end domain name -->
                       <div id="head-second" class="row">    <!--indian flag-->
                         <div class="col-md-12">
                           <img src="namejet1.png" class="img-thumbnail" alt="">

                         </div>

                       </div>   <!--end indian flag-->
                       <!-- Start NavigationBar -->
                       <div class="row">
                             <div class="col-md-4">     <!--  Logo start -->
                              <nav class="navbar navbar-expand-lg navbar-dark">
                                <img src="namekart.png" class="img-thumbnail" alt="" style="width:200px;height:100px;">

                                </nav>

                             </div>
                             <div class="col-md-8 pt-2">
                                 <nav class="navbar navbar-expand-lg navbar-dark mainnav" style="background-color:#4775d1;">
                                   <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
                                     <span class="navbar-toggler-icon"></span>
                                       </button>
                                       <div class="collapse navbar-collapse" id="myMenu">
                                             <ul class="navbar-nav pl-5 custom-nav ml-auto">
                                               <li class="nav-item custom-nav">
                                                 <a href="Search.php" class="nav-link ">Search</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Featured.php" class="nav-link ">Featured</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Download.php" class="nav-link">Downloads</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="Help_Center.php" class="nav-link">Help Center</a>
                                               </li>
                                               <li class="nav-item">
                                                 <a href="MyAccount.php" class="nav-link">My Account</a>
                                               </li>


                                             </ul>
                                             </div>
                                        </nav>
                                       <div class="row">        <!--  Seach box -->
                                          <div class="col-md-8 mt-2">
                                            <form class="form-inline col s12" action="/action_page.php">
                                         <input class="form-control col s12 16 mr-sm-2" type="text" placeholder="Search Domains">
                                            <button class="btn btn-success" type="submit">Search</button>
                                             </form>

                                          </div>
                                          <div class="col-md-4 mt-2">      <!-- Account-->
                                            <a href="MyAccount.php">Create an Account | </a>
                                            <a href="MyAccount.php">Log In</a>

                                           </div>                   <!--end Account    -->

                                         </div>                        <!--    end Search box -->


                              </div>          <!-- end Link -->

                        </div>        <!-- end Navigation -->


               </div>            <!-- End   Header -->


               <div class="">   <!--Start Create Account  -->
                     <div class="row">
                          <div class="col-md-7 mt-5">
                               <h2>Signup now for a FREE Namekart account</h2>
                               <form method="post" id="form1" action="MyAccount.php">
                                 <?php if(count($errors)>0):  ?>
                                         <div class="alert alert-danger">
                                             <?php foreach($errors as $error): ?>
                                               <li><?php echo $error; ?></li>

                                             <?php endforeach;  ?>
                                         </div>
                                     <?php  endif; ?>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Email address<span style="color:red;">*</span></label>
                                    <input name="email"  type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" value="<?php echo $email;  ?>" >

                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputUsername">Choose a UserName<span style="color:red;">*</span></label>
                                    <input type="username" class="form-control" id="exampleInputUsername" aria-describedby="UsernameHelp" placeholder="Enter Choose a Username" name="username" value="<?php echo $username; ?>">

                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword">Choose a Password<span style="color:red;">*</span></label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter a Password" name="password1">

                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password<span style="color:red;">*</span></label>
                                    <input type="password1" class="form-control" id="exampleInputPassword1" placeholder="Enter a Confirm Password" name="password2">

                                    </div>
                                    <div class="form-group">
                                   <label for="captcha">Security Code<span style="color:red;">*</span></label>
                                   <img src="Captcha.php" id="cap" class="cap">
                                   <img src="refresh.jpg" width="30px" height="30px" style="border-radius: 10%">
                                   <input type="text" name="captcha" class="form-control" id="captcha" style="margin-top:10px;width:200px" placeholder="Enter Captcha" >
                                   <small id="captcha" class="form-text text-muted">Help us fight spam. Enter the case-sensitive code as shown.</small>
                               </div>
                               <hr/>
                               <div class="form-group">
                                   <div class="form-check">
                                     <input type="checkbox" name="policy1" class="form-check-input" value="yes">
                                     <p>I hereby acknowledge that I have read and agree to the <a href="">NameJet Terms of Use</a> (including the Partner Services Agreements for the affiliated registrars)
                                        and <a href=""> NameJet Privacy Policy.<a></p>


                                   </div>


                               </div>
                               <div class="form-group">
                                   <div class="form-check">
                                     <input type="checkbox" name="policy2" class="form-check-input" value="yes">
                                   <p>I consent to receive news, updates and offers (including the weekly NameJet newsletters) from NameJet by email sent via a third-party email marketing platform
                                     ,such as MailChimp.</p>


                                   </div>


                               </div>
                               <button type="submit" class="btn btn-primary mb-5" name="signup-btn" id="btn">Create Account</button>
                                 <hr/>
                              </form>

                          </div>
                          <div class="col-md-5 mt-5">

                                            <h2>Customer Login</h2>
                                            <form action="MyAccount.php" id="form2" method="post">
                                              <?php if(count($errors1)>0):  ?>
                                                      <div class="alert alert-danger">
                                                          <?php foreach($errors1 as $error): ?>
                                                            <li><?php echo $error; ?></li>

                                                          <?php endforeach;  ?>
                                                      </div>
                                                  <?php  endif; ?>
                                                  <div class="form-group" >
                                                <label for="usename">Username or Email</label>
                                                <input type="text" class="form-control" id="username" placeholder="Enter UserName" name="username1" value="<?php echo $username;   ?>">
                                              </div>
                                              <div class="form-group">
                                                <label for="pwd">Password:</label>
                                                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                              </div>
                                              <div class="checkbox">
                                                <label><input type="checkbox" name="remember">Keep me logged in.</label>
                                              </div>
                                              <button type="submit" name="login-btn" class="btn btn-success" >Login</button>
                                              <a href="Forgot.php">Forgot Your Password?</a>
                                            </form>




                          </div>

                     </div>

               </div><!--end Create Account  -->









                  <div class="footer" id="footer">   <!--Footer-->
                    <hr>

                    <div class="row">
                      <div class="col-md-6">
                                   <h5>© 2020 Nameket, All rights reserved.</h5>
                                   <a href="#">Terms | </a>
                                   <a href="#">Privacy |  </a>
                                   <a href="#">Cookie Policy</a>
                                   <img src="domain.gif" alt="" style="text-align:center">
                      </div>
                      <div class="col-md-6" style="text-align:right;">
                        <a href="index.php">Home| </a>
                         <a href="Press-releases.php">Press Releases | </a>
                          <a href="About.php">About Us| </a>
                           <a href="Contact_Us.php">Contact Us| </a>
                            <a href="Help_Center.php">Help| </a>
                            <a href="SiteMap.php">Site Map</a>
                               <h6>Questions?Call Us At</h6>
                               <h5>1-866-462-3572</h5>
                               <p>Visit our<a href=""> Help Center</a> for simple and quick support.</p>
                      </div>

                    </div>

                  </div>  <!-- End Footer-->












    </div>
</div>










    <!--JQuery Proper Bootstrap -->



    <script
  src="https://code.jquery.com/jquery-3.4.1.js"  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="Validate.js">

  </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.js">

    </script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js">

    </script>

 <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/additional-methods.js">

 </script>






  </body>
</html>
