<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email {

    private $mail = \stdclass::class;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                      // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host = 'mail.tagpage.com.br';                    // Set the SMTP server to send through
        $this->mail->SMTPAuth = true;                                   // Enable SMTP authentication
        $this->mail->Username = 'send@tagpage.com.br';                     // SMTP username
        $this->mail->Password = 'sendmail';                               // SMTP password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $this->mail->Port = 587;                                    // TCP port to connect to
        $this->mail->Chaset = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('suporte@tagpage.com.br', 'Suporte TagPage');
    }

    public function sendEmail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName) {
        
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);
        
        try {
            $this->mail->send();
        } catch (Exception $e) {
            echo "Erro ao enviar o e-mai: {$this->mail->ErrorInfo} {$e->errorMessage()}";
        }
        echo "Email enviado";
    }

}
