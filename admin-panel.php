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
    <title>Панель Администратора</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #121212;
        }

        nav {
            background-color: #292928;
            width: 100%;
            height: 100px;
            display: flex;
            align-items: center;
            padding-left: 40px;
            padding-right: 40px;
        }

        nav ul {
            width: 100%;
            height: 100%;
            padding-left: 0;
            list-style: none;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        nav a:hover {
            color: bisque;
            border-bottom: #c96212 2px solid;
        }

        a {
            text-decoration: none;
            color: white;
            transition: all 500ms ease;
        }
    </style>
</head>

<body data-bs-theme="dark">
    <nav>
        <ul>
            <a href="add-info.php">Добавить запись</a>
            <a href="get-info.php">Список записей</a>
        </ul>
    </nav>
    <h1 style="margin-top: 20px">Здраствуйте администратор!</h1>
    <p>Вверху доступны все нужные функции.</p>
    <p>P.S. Это альфа, так что может быть чуть-чуть не удобно :З</p>
</body>
</html>