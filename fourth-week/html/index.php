<?php

require_once '../../vendor/autoload.php';
$transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465, 'ssl'))
    ->setUsername('loftswiftmailer@ya.ru')
    ->setPassword('VLp3YwZ@qsbPp6m')
;

$mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('Всё прекрасно'))
    ->setFrom(['loftswiftmailer@ya.ru' => 'Sasha'])
    ->setTo(['avvdovin@mail.ru'])
    ->setBody('не правда ли?')
;

$result = $mailer->send($message);
var_dump($result);
