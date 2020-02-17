<?php
require_once 'vendor/autoload.php';
require_once  'Constant/constants.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,'ssl'))
  ->setUsername(EMAIL)
  ->setPassword(PASSWORD)
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);






   function sendVerificationEmail($userEmail,$token)
   {
     global $mailer;
     $body='
     <!DOCTYPE html>
<html>
<head>
	<title>Verify Email</title>
</head>
<body>
  <div>
  	   <p>
  	   	  Thank you for signing up on our website.please click on the link below to verify your email.
  	   </p>
  	   <a href="http://localhost:8181/Namekart_Pratice/Users.php?token='.$token.'
  	    ">
  	    Verify Your email address..
  	    </a>
  </div>

</body>
</html>





     ';

     // Create a message
     $message = (new Swift_Message('Verify your email Adress'))
       ->setFrom(EMAIL)
       ->setTo($userEmail)
       ->setBody($body,'text/html')
       ;

     // Send the message
     $result = $mailer->send($message);



   }
     function  sendPasswordLink($userEmail,$token)
     {


       global $mailer;
       $body='
       <!DOCTYPE html>
  <html>
  <head>
   <title>Verify Email</title>
  </head>
  <body>
    <div>
        <p>
           Hello there,
           Please click on the link below to reset Your Password.

        </p>
        <a href="http://localhost:8181/Namekart_Pratice/Users.php?password-token='.$token.'
         ">
          Reset Your Password..
         </a>
    </div>

  </body>
  </html>





       ';

       // Create a message
       $message = (new Swift_Message('Reset Your Password'))
         ->setFrom(EMAIL)
         ->setTo($userEmail)
         ->setBody($body,'text/html')
         ;

       // Send the message
       $result = $mailer->send($message);

     }









 ?>
