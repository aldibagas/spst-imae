<?php 
    session_start();
    ob_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/PHPMailer-master/src/Exception.php';
    require 'vendor/PHPMailer-master/src/PHPMailer.php';
    require 'vendor/PHPMailer-master/src/SMTP.php';    
    
    include('_helpers/connect.php'); 
    if(isset($_POST['email'])){
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $newPass = substr(str_shuffle($permitted_chars), 0, 10);
    
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
        $mail->Timeout = 10;    
        $mail->SMTPDebug  = 1;
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "mail.cypiral.org";
        $mail->Username   = "pesat@cypiral.org";
        $mail->Password   = "Pesat123";
        
        $mail->IsHTML(true);
        $mail->AddAddress($_POST['email'], $_POST['email']);
        $mail->SetFrom("pesat@cypiral.org", "---");
        // $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
        // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
        $mail->Subject = "Reset Password";
        $content = "Password Baru Anda Adalah : ".$newPass;
        
        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
          echo "Error while sending Email.<pre>";
          var_dump($mail);
        } else {
            mysqli_query($conn,"update pengguna set Sandi = '$newPass' where email = '$_POST[email]'");
            header("location:fileaction.php?send=true");
        }
    }
?>