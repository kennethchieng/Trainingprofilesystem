<?php
	require_once 'credentials.php';

	class MailClass
	{
		function sendMail($subject,$sendto,$body,$targetpath = null)
		{
				$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
					->setUsername(EMAIL)
					->setPassword(PASS)
				;
				$message = (new Swift_Message($subject))
					->setFrom([EMAIL => 'dontreply'])
					->setTo($sendto)
					->setBody($body)
				;
							
					if(!empty($targetpath)){
					$message->attach(Swift_Attachment::fromPath($targetpath));
					}
					$mailer = new Swift_Mailer($transport);
					$result = $mailer->send($message);
						if($result){
							echo '<div class = "alert alert-success text-center">
								Email sent successfully!
							</div>';
						} else {
							 echo '<div class = "alert alert-danger text-center">
								Error sending email!
							</div>';
						}
		}
	}
?>
