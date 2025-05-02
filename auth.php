<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #121212;
        }

        form {
            display: flex;
            flex-direction: column;
            background-color: #121212;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    </style>
    <title>Test</title>
</head>
<body data-bs-theme="dark">
    <form action="form.php" method="post">
        <legend style="margin-bottom: 20px">Авторизация</legend>
        <label>
            <input type="text" class="form-control" id="" placeholder="Логин" name="login" required style="margin-bottom: 10px">
        </label>
        <br>
        <label>
            <input type="password" class="form-control" id="" placeholder="Пароль" name="password" required style="margin-bottom: 10px">
        </label>
        <br>
        <input type="submit" value="Войти" class="btn btn-primary">
    </form>
</body>
</html>