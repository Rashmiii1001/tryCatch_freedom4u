<?php
  $msg="";

	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$message=$_POST['message'];
    $checbox=$_POST['checkbox'];

    $msg = "Name: ".$name."<br><br>"."email: ".$email."<br><br>"."contact no: ".$phone."<br><br>"."message: ".$message."<br><br>"."<strong>request callback: </strong>".$checbox;

		function smtp_mailer($to,$subject,$msg){
    require_once("smtp/class.phpmailer.php");
    $mail = new PHPMailer();
  	$mail->IsSMTP();
  	$mail ->SMTPDebug = 1;
  	$mail->SMTPAuth = true;
  	$mail->SMTPSecure = 'TLS';
  	$mail->Host = "smtp.sendgrid.net";
  	$mail->Port = 587;
  	$mail->IsHTML(true);
  	$mail->CharSet = 'UTF-8';
  	$mail->Username = /*enter Username*/;
  	$mail->Password = /*enter password*/;
    $mail->SetFrom(/*from address*/);
  	$mail->Subject = $subject;
  	$mail->Body = $msg;
  	$mail->AddAddress($to);
  	if(!$mail->Send()){
    return 0;
  	}
  	else{
    return 1;
  }
}
echo smtp_mailer('rashmiii.singh1001@gmail.com','Feedback',$msg);

}

?>
