<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Ошибка</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #121212;
        }
        div {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body data-bs-theme="dark">
    <div class="col-12">
        <?php

        use Couchbase\IndexNotFoundException;

        if (count($_GET) != 1) {
                echo "<h1 style='color: red'>ОШИБКА ДАННЫХ!</h1>";
                echo "<h3>Проверьте кол-во параметров страницы</h3>";
            } else {
                switch ($_GET['id']) {
                    case 0:
                        echo "<h1 style='color: red'>ОШИБКА ВАЛИДАЦИИ</h1>";
                        echo "<h3>Проверьте данные для входа</h3>";
                        break;
                    case 1:
                        echo "<h1 style='color: red'>ОШИБКА ФАЙЛА</h1>";
                        echo "<h3>Проверьте связанную с файлом информацию</h3>";
                        break;
                    case 2:
                        echo "<h1 style='color: red'>ОШИБКА СЕРВЕРА</h1>";
                        echo "<h3>Ошибка на самом сервере. Увы но вы ничего не можете сделать :(</h3>";
                        break;
                    case 3:
                        echo "<h1 style='color: red'>ОШИБКА ДАННЫХ</h1>";
                        echo "<h3>Проверьте данные переданые на обработку</h3>";
                        break;
                    default:
                        echo "<h1 style='color: red'>НЕИЗВЕСТНАЯ ОШИБКА</h1>";
                        echo "<h3>А хрен его знает что произошло :)</h3>";
                        break;
                }
            }
        ?>
    </div>
</body>
</html>