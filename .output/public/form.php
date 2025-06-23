<?php

// Переменные для формы
$service = $_POST['service'] ?? ''; // выбранная услуга
$car = $_POST['car'] ?? ''; // информация об автомобиле
$phone = $_POST['phone'] ?? ''; // номер телефона
$name = $_POST['name'] ?? ''; // номер телефона
$amo = $_POST['amo'] ?? '';

// Параметры телеграм-бота
$telegram_bot_token = '7031934154:AAHSwdU9s4bXqlC02Dyq68Ojt6fG4TeSPes'; // токен вашего телеграм-бота
$telegram_chat_id = '-4222498041'; // ID чата, в который вы хотите отправить сообщение


// Функция отправки сообщения в телеграм
function sendToTelegram($service, $car, $phone, $bot_token, $chat_id, $name) {
    $message = "Новая заявка:\n\nУслуга: $service\nАвтомобиль: $car\nТелефон: $phone\nИмя: $name";
    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

function sendToAmoCrm($amo) {
    // Создаем массив данных

    // Преобразуем массив данных в JSON
    $json_data = json_encode($amo);

    // Инициализируем CURL
    $curl = curl_init();

    // Устанавливаем параметры CURL
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://avtoimperiya8milya.amocrm.ru/api/v4/leads/complex',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $amo,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImIzZGE5MTA2OTRjOTM1ZjRiOTYxMDcyMjlkMDcwYjRjOWI5N2ExYTIyZGJjZmY3YWI5NmNhZDg4YjNlZmUzZjRiNWZmZmY0ZmM5YTJiY2E0In0.eyJhdWQiOiIwOWM0Y2U2ZS1lZWUyLTQwOGYtYjQzNy01ODUxOGNmOTVkOWEiLCJqdGkiOiJiM2RhOTEwNjk0YzkzNWY0Yjk2MTA3MjI5ZDA3MGI0YzliOTdhMWEyMmRiY2ZmN2FiOTZjYWQ4OGIzZWZlM2Y0YjVmZmZmNGZjOWEyYmNhNCIsImlhdCI6MTczODY2NjI2NiwibmJmIjoxNzM4NjY2MjY2LCJleHAiOjE4NTkxNTUyMDAsInN1YiI6IjEyMDY2NzM0IiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMyMjA2NjA2LCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOjIsInNjb3BlcyI6WyJjcm0iLCJmaWxlcyIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiLCJwdXNoX25vdGlmaWNhdGlvbnMiXSwiaGFzaF91dWlkIjoiYTFhMzc2M2MtZWUyYS00MDVmLTkzZWUtNjE3NzljYzk5ODE4IiwiYXBpX2RvbWFpbiI6ImFwaS1iLmFtb2NybS5ydSJ9.aWrib8c_N2-p-z1IPaS3HwGrzrup7HpUMWxMQacKMSEtl8yX6gpOFDk3STZMKykxcfd5sD9c5fB7f6DCAckJ7J7sYRnHj793urDMoLH4tdE6_nSz4BRNYcgfsy5v4Bff63bB0_StrFCQnCHOM3_dFeQ0PRSTXiO6vR_N5K0k4FOqCF5dQa-9m2c2DF1_4CBJSX6NvAL7FaTqTaXuMe4IchhWvcoXmSUVOralXlDuMiv3TWh060vegQ3lb9SNksEFeUYUx3aB9Y92oxu-Y405amIIlL_9rVOkDgtwIsIyMt6b723ju5D22ycfqk6-6-9ZqUjCN3PfllEk2PpByHuN8A',
            'Cookie: session_id=o5r3kf9400pdd041g5mvk5dvak; user_lang=ru'
        ),
    ));

    // Выполняем запрос CURL
    $response = curl_exec($curl);

    // Закрываем CURL соединение
    curl_close($curl);

    // Выводим ответ сервера
    echo $response;
}

// Пример использования функции
sendToAmoCrm($amo);

// Отправка сообщения в телеграм
sendToTelegram($service, $car, $phone, $telegram_bot_token, $telegram_chat_id, $name);

// Перенаправление пользователя на страницу "спасибо"
// header('Location: thank_you_page.html');
exit();
?>
