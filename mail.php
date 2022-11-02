<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require( "phpmailer-6.6.5/src/Exception.php" );
require( "phpmailer-6.6.5/src/PHPMailer.php" );
require( "phpmailer-6.6.5/src/SMTP.php" );

$mail = new PHPMailer( TRUE );

try
{
  $mail->setFrom( "contact@ogadweb.com", "Darth Vader" );
  
  $mail->addAddress( "ogadweb23@gmail.com", "Jed Master Frahaan" );
  
  $mail->Subject = "Force Subject";
  
  $mail->IsHTML( true );
  $mail->Body = "<div style='color:red;'>This is the <b>force</b></div>";
  $mail->AltBody = "This is the force";
  
  $mail->Send();
}
catch ( Exception $e )
{
  echo $e->errorMessage( );
}
catch ( \Exception $e )
{
  echo $e->getMessage( );
}

?>






