<?php
    if($_POST) {
        $email = $_POST['email'];
        $message = $_POST['message'];
                
        $to = $email;
        $subject = 'Новый отзыв о сайте!';
        $msg = "Отзыв от:<br \> $email <br \> $message <br \>"; 
        $headers = "From: Website feedback"
            . "\r\n" . "Reply-To: nindjia@yandex.by"
            . "\r\n" . "X-Mailer: PHP/"
            . phpversion()
            . "\r\n" .
            "Content-type: text/html; charset=\"utf-8\"";

        mail($to, $subject, $msg, $headers);
    }
?>