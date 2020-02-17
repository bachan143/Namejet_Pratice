<?php   include 'controller/authController.php';
        if(isset($_GET['token']))
        {
          $token=$_GET['token'];
          verifyUser($token);


        }
        if(isset($_GET['password-token']))
        {
          $passwordToken=$_GET['password-token'];
          resetPassword($passwordToken);


        }
         if(!isset($_SESSION['id']))
         {
             header('location:MyAccount.php');
             exit();

         }
          ?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title>Home Page</title>
	<style type="text/css">
	     .logout
       {
        color: red;

       }
       .form-div
  {
    margin: 100px auto 50px;
    padding: 25px 15px 10px 15px;
    border: 1px solid #80ced7;
    border-radius: 5px;
    font-size: 1.1em;
    }
    .form-control:focus
    {
        box-shadow: none;

    }
    form p
    {
      font-size: .89em;
    }

		</style>
</head>
<body>
          <div class="container">
             <div class="row">
                 <div class="col-md-4 offset-md-4 form-div">
                 <?php   if(isset($_SESSION['message'])):   ?>
                    <div class="alert <?php  $_SESSION['alert-class'];   ?>">
                        <?php  echo $_SESSION['message'];
                          unset($_SESSION['message']);
                          unset($_SESSION['alert-class']);

                         ?>

                    </div>
                     <?php endif;   ?>
                    <h3>Welcome,<?php  echo $_SESSION['username']; ?></h3>
                    <a href="Users.php?logout=1" class="logout">LogOut</a>
                    <?php  if(! $_SESSION['verified']) { ?>
                    <div class="alert alert-warning">
                      you need to verify your account.
                      Sign in to your email account and click on the
                      verification link we just emailed you at
                      <strong><?php  echo $_SESSION['email'];   ?></strong>

                    </div>
                  <?php } ?>
                   <?php  if($_SESSION['verified']):    ?>
                    <button class="btn btn-block btn-lg btn-primary">
                      I am Verified
                    </button>
                      <?php endif; ?>

                 </div>

             </div>

          </div>

</body>
</html>
