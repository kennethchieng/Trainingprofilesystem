<?php
	/*$msg = '';
	if(isset($_POST['submit'])){
		require_once 'vendor/autoload.php';
		require_once 'credentials.php';

		// Create the Transport
		$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
			->setUsername(EMAIL)
			->setPassword(PASS)
		;

		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);

		// Create a message
		$message = (new Swift_Message($_POST['subject']))
		->setFrom([EMAIL => 'dontreply'])
		->setTo([$_POST['email']])
		->setBody($_POST['message'])
		;
		
		
		if(isset($_FILES['file'])){
			$file = $_FILES["file"];
			$file_name = $file["name"];
			$file_tmp = $file["tmp_name"];
			$file_ext = explode(".", $file_name);
			$file_ext = strtolower(end($file_ext));
			$allowed = array("txt", "pdf", "jpg" , "png" , "xlsx" , "docx");
			$target_dir = null;

			if(in_array($file_ext, $allowed)){
			$target_dir = "attachement/" . $file_name;
			move_uploaded_file($file_tmp,$target_dir);
			
			if(!empty($targetpath)){
				$message->attach(Swift_Attachment::fromPath($targetpath));
			}
		}
		
		// Send the message
		$result = $mailer->send($message);
		
		if(!$result){
			$msg = '<div class = "alert alert-danger text-center">
				Error sending email!
			</div>';
		} else {
			$msg = '<div class = "alert alert-success text-center">
				Email sent successfully 
			</div>';
		}
		
	}
	}*/
?>
<?php
	require 'vendor/autoload.php';
	require 'mailclass.php';
	require_once 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
	
	if(isset($_POST['submit'])){
		$subject = $_POST['subject'];
		$sendto = $_POST['email'];
		$body = $_POST['message'];  
		$file = $_FILES["file"];
		$file_name = $file["name"];
		$file_tmp = $file["tmp_name"];
		$file_ext = explode(".", $file_name);
		$file_ext = strtolower(end($file_ext));
		$allowed = array("txt", "pdf", "jpg" , "png" , "xlsx" , "docx");
		$target_dir = null;
		if(in_array($file_ext, $allowed)){
		$target_dir = "attachement/" . $file_name;
		move_uploaded_file($file_tmp,$target_dir);
		}
		$mailClient = new MailClass();
		$swiftmail = $mailClient->sendMail($subject,$sendto,$body,$target_dir);
	}
?>

<form class="form-horizontal" method="post" enctype="multipart/form-data">
<fieldset>
<!-- Form Name -->
<legend>Send Email</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Subject:</label>  
  <div class="col-md-4">
  <input id="textinput" name="subject" type="text" placeholder="Subject" class="form-control input-md" value="test">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">To:</label>  
  <div class="col-md-4">
  <input type="email" id="textinput" name="email" type="text" placeholder="To" class="form-control input-md" value="kennethc003@gmail.com">
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" rows="20" cols="30" name="message">test 123</textarea>
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">Attach file</label>
  <div class="col-md-4">
    <input name="file" class="input-file" type="file">
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-envelope fa-fw"></i> Send</button>
  </div>
</div>
</fieldset>
</form>