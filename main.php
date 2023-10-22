<?php
$password = '';
if(isset($_POST['password_length'])) {
    $length = $_POST['password_length'];
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, $charactersLength - 1)];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Генератор пароля</title>
</head>
<body>
<h1>Генератор пароля</h1>
<form action="" method="post">
    <label for="password_length">Количество символов пароля:</label><br>
    <input type="number" id="password_length" name="password_length" min="1"><br>
    <input type="submit" value="Сгенерировать">
</form>
<p>Пароль: <?php echo $password; ?></p>
</body>
</html>