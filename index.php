<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <h1>Регестрация</h1>
    <form action="check.php" method="post">
        <input type="number" class="form-control" name="number" id="number" placeholder="Введите имя или номер"><br>
        <input type="password" class="form-control" name="pass" id="puss" placeholder="Введите пароль"><br>
        <button class="btn btn-success">Зарегистрировать</button>
    </form>
</div>
</body>
</html>