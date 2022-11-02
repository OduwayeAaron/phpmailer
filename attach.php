<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require( "phpmailer-6.6.5/src/Exception.php" );
require( "phpmailer-6.6.5/src/PHPMailer.php" );
require( "phpmailer-6.6.5/src/SMTP.php" );

$mail = new PHPMailer( TRUE );

try
{
  $mail->setFrom( "ogadweb23@gmail.com", "Darth Vader" );
  
  $mail->addAddress( "ogadweb23@gmail.com", "Jed Master Frahaan" );
  
  $mail->Subject = "Force Subject";
  
  $mail->Body = "This is the force";
  $mail->AddAttachment( "uiux.pptx", "Ogad.pdf" );
  
  $mail->Send( );
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






