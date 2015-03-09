<?php
require("Application/Lib/Common/lib/PHPMailer/PHPMailerAutoload.php");
class E_Mail
{
	public function E_Mail()
	{

	}

	public function SendEmail($address,$body)
	{
		$mail = new PHPMailer();
		$mail->CharSet='utf-8';
		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "smtp.qq.com";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "1048229044@qq.com";  // SMTP username
		$mail->Password = "liguifa1993zglps"; // SMTP password
		$mail->From = "1048229044@qq.com";
		$mail->FromName = "大连工业大学开源社区";
		$mail->AddAddress("$address", "");                            // set email format to HTML
		$mail->Subject = "大连工业大学开源社区-注册确认";
		$mail->Body    = $body;
		$mail->AltBody = $body;
		$mail->Send();
	}
}
?>