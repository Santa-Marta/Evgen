<?php
    if($_POST)
    {
        require_once "SendMailSmtpClass.php"; // подключаем класс

        $email = $_POST['email'];
        $message = $_POST['message'];

        $mailSMTP = new SendMailSmtpClass('email', 'pass', 'ssl://smtp.yandex.ru', 'AnimalGram', 465);
        // $mailSMTP = new SendMailSmtpClass('логин', 'пароль', 'хост', 'имя отправителя', порт);

        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: AnimalGram <nindjia@yandex.by>\r\n"; // от кого письмо

        $result =  $mailSMTP->send($email, 'Новый отзыв о сайте!', $message, $headers); // отправляем письмо
        // $result =  $mailSMTP->send('Кому письмо', 'Тема письма', 'Текст письма', 'Заголовки письма');

        if($result === true){
            echo "Successed sended!";
        }else{
            echo "Failed, error: " . $result;
        }

       echo('Script run out');
    }
?>