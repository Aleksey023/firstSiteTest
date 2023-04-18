<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    $name = $_POST['name'];
    $phone = $_POST['telephone'];
    $message = $_POST['message'];

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mail.ru';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aleksejbujvalenko23@mail.ru'; // логин от почты с которой будут отправляться письма
    $mail->Password = 'Bqy9CckVaWBgMAYs7rw0'; // пароль от почты с которой будут отправляться письма
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

    $mail->setFrom('aleksejbujvalenko23@mail.ru'); // от кого будет уходить письмо?
    $mail->addAddress('AleksejBujvalenko@yandex.ru');     // Кому будет уходить письмо
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Заявка на обучение';
    $mail->Body = 'С вашего сайта поступила заявка на обучение.<br>' . '<br>Имя: ' . $name . '<br>Телефон: ' .
        $phone . '<br>Текст сообщения: ' . $message;

    $mail->send();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}