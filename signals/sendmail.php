<?php
// Получение данных из формы
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Установка адреса получателя и заголовков письма
$to = "fotomiruzlovaya@mail.ru";
$subject = "Новое письмо от " . $name;

// Отправка письма
mail($to, $subject, $message, "From: " . $email);

// Вывод сообщения об успешной отправке письма пользователю
echo "Спасибо, ваше письмо было успешно отправлено!";
?>
