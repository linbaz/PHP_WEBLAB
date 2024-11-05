<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Успішно надіслано</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Стиль для повідомлення про успіх */
        .success-message {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            color: #000000;
            text-align: center;
            border: 1px solid #000000;
            border-radius: 10px;
        }

        /* Стиль для кнопок */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-container .home-btn {
            background-color: #6a11cb;
            color: #ffffff;
        }

        .button-container .close-btn {
            background-color: #ff4d4d;
            color: #ffffff;
        }

        .button-container .home-btn:hover {
            background-color: #2575fc;
        }

        .button-container .close-btn:hover {
            background-color: #ff3333;
        }

        /* Стиль для анімованого кола */
        .feedback-circle {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 100px;
            height: 100px;
            background-color: #2575fc;
            color: transparent;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        /* Відображення тексту при наведенні */
        .feedback-circle:hover {
            color: #ffffff;
            background-color: #6a11cb;
        }
    </style>
</head>
<body>
    <div class="success-message">
        <p>Ваше повідомлення було успішно надіслано!</p>
        <div class="button-container">
            <button class="home-btn" onclick="window.location.href='index.php'">Повернутись на головну</button>
            <button class="close-btn" onclick="window.close()">Закрити сторінку</button>
        </div>
    </div>

    <!-- Анімоване коло з текстом "Залишити відгук" -->
    <div class="feedback-circle" onclick="redirectWithEmail()">Залишити відгук</div>

    <script>
    // Функція для перенаправлення на головну сторінку з параметрами електронної пошти
    function redirectWithEmail() {
        const email = 'linbaz26134598700@gmail.com';
        // Додаємо параметр fromFeedback = 1
        window.location.href = `index.php?email=${encodeURIComponent(email)}&fromFeedback=1`;
    }
</script>
</body>
</html>
