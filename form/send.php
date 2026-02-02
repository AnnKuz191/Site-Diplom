<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];
    
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $tel = htmlspecialchars($tel);
    $message = htmlspecialchars($message);

    $name = urldecode($name);
    $email = urldecode($email);
    $tel = urldecode($tel);
    $message = urldecode($message);

    $name = trim($name);
    $email = trim($email);
    $tel = trim($tel);
    $message = trim($message);

    //отправка
    if (mail("annakoza191@gmail.com",
             "Новое письмо с сайта!",
             "ФИО: ".$name."\n".
             "Электронная почта: ".$email."\n".
             "Телефон: ".$tel,
             "Текст сообщения: ".$message."\n".
             "From: no-reply@mydomian.ru \r\n")
    ) {
        echo('Письмо успешно отправлено!');
    }
    
    else {
        echo('Есть ошибка! Проверьте данные...');
    }
?>
