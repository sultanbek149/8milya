<?php

// Переменные для формы
$service = $_POST['service'] ?? ''; // выбранная услуга
$car = $_POST['car'] ?? ''; // информация об автомобиле
$phone = $_POST['phone'] ?? ''; // номер телефона
$name = $_POST['name'] ?? ''; // номер телефона

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

function sendToAmoCrm($service, $car, $phone, $name) {
    // Создаем массив данных
    $data = array(
        array(
            "name" => $service,
            "pipeline_id" => 8123946,
            "created_by" => 0,
            "price" => 0,
            "custom_fields_values" => array(
                array(
                    "field_id" => 478771,
                    "values" => array(
                        array(
                            "value" => $service
                        )
                    )
                ),
                array(
                    "field_id" => 478773,
                    "values" => array(
                        array(
                            "value" => $car
                        )
                    )
                )
            ),
            "_embedded" => array(
                "metadata" => array(
                    "category" => "forms",
                    "form_id" => 1,
                    "form_name" => "Форма на сайте",
                    "form_page" => "https://detailing.8milya.kz/",
                    "form_sent_at" => 1608905348,
                    "ip" => "8.8.8.8",
                    "referer" => "https://detailing.8milya.kz/"
                ),
                "contacts" => array(
                    array(
                        "first_name" => $name,
                        "custom_fields_values" => array(
                            array(
                                "field_code" => "PHONE",
                                "values" => array(
                                    array(
                                        "enum_code" => "WORK",
                                        "value" => $phone
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    );

    // Преобразуем массив данных в JSON
    $json_data = json_encode($data);

    // Инициализируем CURL
    $curl = curl_init();

    // Устанавливаем параметры CURL
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://8milyainfo.amocrm.ru/api/v4/leads/complex',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $json_data,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM2ZGQwZTE4YTMyMjI3ZDUwY2Q4NTI0YWYzOGUxNGRkNDQyN2ViNTk3YzVjYzMwYzdiYzdkZGFlNjA5ZGU3ODJhMjA3NThkNDAwMTU4NTgzIn0.eyJhdWQiOiJmNGNmYjk1OS00ZDAwLTQ2M2YtYjAxMy1iN2RmYzFkZGFlNjAiLCJqdGkiOiJjNmRkMGUxOGEzMjIyN2Q1MGNkODUyNGFmMzhlMTRkZDQ0MjdlYjU5N2M1Y2MzMGM3YmM3ZGRhZTYwOWRlNzgyYTIwNzU4ZDQwMDE1ODU4MyIsImlhdCI6MTcxNTE2MzEwNSwibmJmIjoxNzE1MTYzMTA1LCJleHAiOjE4NDMzNDQwMDAsInN1YiI6IjExMDAzNjc4IiwiZ3JhbnRfdHlwZSI6IiIsImFjY291bnRfaWQiOjMxNzMwMjYyLCJiYXNlX2RvbWFpbiI6ImFtb2NybS5ydSIsInZlcnNpb24iOjIsInNjb3BlcyI6WyJjcm0iLCJmaWxlcyIsImZpbGVzX2RlbGV0ZSIsIm5vdGlmaWNhdGlvbnMiLCJwdXNoX25vdGlmaWNhdGlvbnMiXSwiaGFzaF91dWlkIjoiOGM2Mzk2ZTEtOTliNS00YWVhLTlhNzItM2UzMzM4MDVkN2I0In0.GGO696U1vKht-nLcYtThJfdpIShF52P9v3PT2dV9O-4VoNV8ydntRdebkOkvCneh7M9Yq7f3PSke8Szmdi3YIl_zKzxbIH9KYfAF4TvHNVr4r-qislDAgm7PSpOi7Qe4m0NIHYvvpeFTodLCUgcCd5rZUMO72_GK9zVnSwQKem1omdOHNpIUk_fe6uVqHuCHE1eeqGVPsf_SkhR2AarPlQlHLOX4puCLi1rUj1ULyMmJJe8cNM2hArTjI1DoFo5i5N-MhlbLmb-x3BTcY-HZAyiLcJX3dhwUH5WFnFJxS9Kt5vbJAiPGT0yzS8RM9a2h0mPOlJjFuTEgQm2ZcdF0ow',
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
sendToAmoCrm($service, $car, $phone, $name);

// Отправка сообщения в телеграм
sendToTelegram($service, $car, $phone, $telegram_bot_token, $telegram_chat_id, $name);

// Перенаправление пользователя на страницу "спасибо"
// header('Location: thank_you_page.html');
exit();
?>
