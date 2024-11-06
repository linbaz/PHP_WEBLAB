<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Підключіть PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Налаштування SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP сервер (замість example.com введіть сервер вашого email-провайдера)
        $mail->SMTPAuth = true;
        $mail->Username = 'linbaz26134598700@gmail.com'; // Ваш email
        $mail->Password = '**** **** **** ****'; // Ваш пароль
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Від кого і кому надсилається лист
        $mail->setFrom('your_email@example.com', 'Your Name');
        $mail->addAddress($email);

        // Налаштування контенту листа
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        header('Location: success.php');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат відправлення</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php if (!empty($errorMessage)): ?>
        <p class="error"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
</body>
</html>
