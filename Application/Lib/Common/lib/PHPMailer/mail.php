<?php
require("../../../../Admin/Controller/Lib/Common/lib/PHPMailer/PHPMailerAutoload.php");
$mail = new PHPMailer();
$mail->CharSet='utf-8';
// $address = $_POST['address'];
$address="1048229044@qq.com";
$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "smtp.qq.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "1048229044@qq.com";  // SMTP username
$mail->Password = "_{$id}1993zglps"; // SMTP password

$mail->From = "1048229044@qq.com";
$mail->FromName = "这里是要显示的名称";
$mail->AddAddress("$address", "");
//$mail->AddAddress("");                  // name is optional
//$mail->AddReplyTo("", "");

//$mail->WordWrap = 50;                                 // set word wrap to 50 characters
//$mail->AddAttachment("/var/tmp/file.tar.gz");         // add p_w_uploads
//$mail->AddAttachment("/tmp/image.jpg", "new.jpg");    // optional name
//$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "PHPMailer测试邮件";
$mail->Body    = "Hello,这是松子的测试邮件";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
echo "Message could not be sent. <p>";
echo "Mailer Error: " . $mail->ErrorInfo;
exit;
}

echo "Message has been sent";
?>