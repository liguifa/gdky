<?php
<<<<<<< HEAD
require("Application/Lib/Common/lib/PHPMailer/PHPMailerAutoload.php");
=======
/*require("../../Admin/Controller/Lib/Common/lib/PHPMailer/PHPMailerAutoload.php");
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
class E_Mail
{
	public function E_Mail()
	{

	}

	public function SendEmail($address,$body)
	{
<<<<<<< HEAD
		echo $address."======".$body;
=======
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
		$mail = new PHPMailer();
		$mail->CharSet='utf-8';
		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->Host = "smtp.qq.com";  // specify main and backup server
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->Username = "1048229044@qq.com";  // SMTP username
<<<<<<< HEAD
		$mail->Password = "liguifa1993zglps"; // SMTP password
=======
		$mail->Password = "_{$id}1993zglps"; // SMTP password
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
		$mail->From = "1048229044@qq.com";
		$mail->FromName = "大连工业大学开源社区";
		$mail->AddAddress("$address", "");                            // set email format to HTML
		$mail->Subject = "大连工业大学开源社区-注册确认";
		$mail->Body    = $body;
		$mail->AltBody = $body;
		$mail->Send();
	}
<<<<<<< HEAD
}
=======
}*/
>>>>>>> d7752944db3380b28c1bd0b0f5bd9d9a25a956de
?>