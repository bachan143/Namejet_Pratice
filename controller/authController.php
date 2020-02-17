<?php
  session_start();
   require 'db.php';
   require_once 'controller/emailController.php';
    $errors=array();
    $username="";
    $email="";
    $policy1="";
    $policy2="";
    $errors1=array();
    $errors2=array();
    $errors3=array();

   //if user clicks on the sign up button
 if(isset($_POST['signup-btn']))
 {
 	  $username=$_POST['username'];
 	  $email=$_POST['email'];
 	  $password=$_POST['password1'];
 	  $passwordConf=$_POST['password2'];
    $policy1=$_POST['policy1'];
    $policy2=$_POST['policy2'];
 	  //validation

      $emailQuery="select * from users where username='$username' OR email='$email' LIMIT 1";
      $result=mysqli_query($conn,$emailQuery);
      $user=mysqli_fetch_assoc($result);
      if($user)
      {
           if($user['username']===$username)
           {
             array_push($errors,"Username already Exists");
           }
           if($user['email']===$email)
           {
             array_push($errors,"Email alredy Exists");
           }
      }

      if(count($errors)==0)
      {

      	  $password=md5($password);
      	  $token=bin2hex(random_bytes(50));
      	  $verified=0;
      	  $sql="insert into users (username,email,verified,token,password,policy1,policy2) values ('$username','$email','$verified','$token','$password','$policy1','$policy2')";


      	  if(mysqli_query($conn,$sql))
      	  {
      	  	//login user
      	  	$user_id=$conn->insert_id;
      	  	$_SESSION['id']=$user_id;
      	  	$_SESSION['username']=$username;
      	  	$_SESSION['email']=$email;
      	  	$_SESSION['verified']=$verified;
           //Send Verification email
             sendVerificationEmail($email,$token);






      	  	//flash message
      	  	$_SESSION['message']="You are now Logged in";
      	  	$_SESSION['alert-class']="alert-success";
      	  	header('location:Users.php');
      	  	exit();

      	  }
      	  else
      	  {
      	  	  $errors['db_error']="Database error failed to register";
      	  	// echo $conn->error;
      	  }

      }

 }

//if user clicks on the  login button

   if(isset($_POST['login-btn']))
   {
   	       $username=$_POST['username1'];
   	       $password=$_POST['pwd'];


   	       if(count($errors1)===0)
   	       {
             $password=md5($password);
   	       	$sql="select * from users where  email='$username' AND password='$password' limit 1";
              $results=mysqli_query($conn,$sql);
              $row=mysqli_fetch_assoc($results);


            if(mysqli_num_rows($results)==1)
            {
            	//login success
            	$_SESSION['id']=$row['id'];
            	$_SESSION['username']=$row['username'];
            	$_SESSION['email']=$row['email'];
            	$_SESSION['verified']=$row['verified'];
            	$_SESSION['message']="You are now Logged in";
            	$_SESSION['alert-class']="alert-success";
            	header('location:Users.php');
            	exit();

            }
            else
            {
            	$errors1['login_fail']="Wrong credentials";
            }



          }


   }



//logout user
      if(isset($_GET['logout']))
      {
           session_destroy();
           unset($_SESSION['id']);
           unset($_SESSION['username']);
           unset($_SESSION['email']);
           unset($_SESSION['verified']);
           header('location:MyAccount.php');
           exit();

      }
//verify user by token
function   verifyUser($token)
{
      global $conn;
      $sql="select * from users where token='$token' limit 1";
      $result=mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0)
      {
          $user=mysqli_fetch_assoc($result);
          $update_query="update users set verified=1 where token='$token'";
          if(mysqli_query($conn,$update_query))
          {
            //log user in
            $_SESSION['id']=$user['id'];
            $_SESSION['username']=$userEmail['username'];
            $_SESSION['email']=$user['email'];
            $_SESSION['verified']=$user['verified'];
            $_SESSION['message']="You email address was successfuly verified";
            $_SESSION['alert-class']="alert-success";
            header('location:Users.php');
            exit();


          }

      }else {
          echo 'User Not Found..';
      }

}

//if user Clicks on the forgot Password button
  if(isset($_POST['forgot-password']))
  {

      $email=$_POST['email'];
      if(!filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $errors2['email']="Email address is invalid";

      }
      if(empty($email))
      {
          $errors2['email']="Email Required";
      }
      if(count($errors2)==0)
      {
         $sql="select * from users where email='$email' limit 1";
         $result=mysqli_query($conn,$sql);
         $user=mysqli_fetch_assoc($result);
         $token=$user['token'];
         sendPasswordLink($email,$token);
         header('location:password_message.php');
         exit(0);
      }


  }
   //if user clicked on the reset password button
   if(isset($_POST['reset-password-btn']))
   {
     echo "cricket";
        $password=$_POST['password'];
        $passwordConf=$_POST['passwordConf'];
        if(empty($password) || empty($passwordConf))
        {
             $errors3['password']="Password Required";

        }
        if($password !==$passwordConf)
        {
          $errors3['password']="The two password do not match";
        }
          $password=md5($password);
          echo $password;
          $email=$_SESSION['email'];
        if(count($errors3)==0)
        {

            $sql="update users set password='$password' where email='$email'";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                 header('location:MyAccount.php');
                 exit(0);

            }
        }
   }


  function resetPassword($token)
  {
    global $conn;
      $sql="select * from users where token='$token' limit 1";
      $result=mysqli_query($conn,$sql);
      $user=mysqli_fetch_assoc($result);
      $_SESSION['email']=$user['email'];
      header('location:reset_password.php');
      exit(0);

  }




?>
