<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Відправити лист</title>
    <link rel="stylesheet" href="styles.css">
    <?php
// Перевіряємо, чи прийшли з feedback та є email
$prefilledEmail = (isset($_GET['fromFeedback']) && $_GET['fromFeedback'] == 1 && isset($_GET['email'])) 
    ? htmlspecialchars($_GET['email']) 
    : '';
?>

</head>
<body>
    <form action="send.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $prefilledEmail; ?>"><br>
        
        <label for="subject">Тема:</label>
        <input type="text" name="subject" id="subject" required>
        
        <label for="message">Повідомлення:</label>
        <textarea name="message" id="message" rows="4" required></textarea>
        
        <button type="submit" name="send">Відправити</button>
    </form>
</body>
</html>
