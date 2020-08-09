<?php 
include('Connection.php');
include('PHPMailer');
/*$emailid = $_POST['user_email'];
*/
$emailid="shweta@pawar.com";
$sql=mysqli_query($link,"select password from registration  where email='".$emailid."'");
$result  = mysqli_fetch_row($sql);

$password_encoded=$result[0];
$password_decoded=base64_decode($password_encoded);



require("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "ssl://smtp.googlemail.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$Mail->SMTPSecure = "tls"; //Secure conection
$mail->Username = "shwetapawar95@gmail.com";  // SMTP username
$mail->Password = "sushwetra95"; // SMTP password
$mail->Port       = 465; 

$mail->From = "shwetapawar95@gmail.com";
$mail->FromName = "saurabh";
$mail->AddAddress("saurabh.pawar2013@gmail.com", "saurabh");
$mail->AddAddress("shwetapawar18.12.1995@gmail.com", "shweta");

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add attachments
//mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body in bold!";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 

";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";


?>