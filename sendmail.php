<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из запроса
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Настройки для отправки почты
    $to = "fotomiruzlovaya@mail.ru";
    $subject = "Новое сообщение с сайта";
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

    // Отправляем почту
    $result = mail($to, $subject, $message, $headers);

    if ($result) {
        $response = array("status" => "success", "message" => "Письмо успешно отправлено");
    } else {
        $response = array("status" => "error", "message" => "Ошибка отправки письма");
    }

    // Возвращаем ответ в формате JSON
    echo json_encode($response);
} else {
    // Если запрос не является POST, возвращаем ошибку
    $response = array("status" => "error", "message" => "Недопустимый запрос");
    echo json_encode($response);
}
?>
