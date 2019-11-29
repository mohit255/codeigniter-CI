<?php 
 
  require_once('mail/PHPMailer/PHPMailerAutoload.php');

            $mail = new PHPMailer;
    
            $mail->SMTPDebug = 0;                               // Enable verbose debug output
    
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.digimonk.net';              // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'info@digimonk.net';                 // SMTP username
            $mail->Password = 'digimonk@123';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
    
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );

       $email=$email;



    $fullname="";

            $mail->setFrom('info@dawerlee.com', 'Preferred Client');

            $mail->addAddress($email);     // Add a recipient

            //$mail->addAddress('ellen@example.com');               // Name is optional

            //$mail->addReplyTo('', 'Information');

            // Optional name

            $mail->isHTML(true);                                  // Set email format to HTML

            

            // $temp_email=base64_encode($email);

            

            $mail->Subject = $subject;

            $mail->Body = @$body;

    

            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $data=$mail->send();

            // var_dump($data);

        

            ?>