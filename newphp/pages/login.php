<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
</head>
<body>
    <?php include_once 'pages/nav.php'?>
    <h1>Вхід / Реєстрація</h1>
<form>
    <label>Логін: <input type="text" name="username"></label><br>
    <label>Пароль: <input type="password" name="password"></label><br>
    <button type="submit">Увійти</button>
</form>

</body>
</html>