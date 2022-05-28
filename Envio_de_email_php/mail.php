<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
require_once 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

function send($assunto, $mensagem)
{

    try {
        $mail = new PHPMailer(true);

        $mail->setLanguage('br');
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'tls://smtp.gmail.com';
        $mail->Username = SAIDA_EMAIL;
        $mail->Password = SENHA_EMAIL;
        $mail->Port = 587;
        $mail->setFrom(SAIDA_EMAIL);
        $mail->addAddress(RECEBE_EMAIL);
        $mail->addReplyTo(RECEBE_EMAIL);
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $assunto;
        $mail->Body = $mensagem;
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
