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
    <title>Document</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #121212;
        }
    </style>
</head>
<body>
    <?php
        if (count($_GET) != 1) {
            header("Location: error.php");
        } else {
            $query = "DELETE FROM data WHERE `data`.`id` = ".$_GET['id'];
            $sql = new mysqli("localhost", "root", "root", "main");

            $sql->query($query);

            echo "<h1>Успешное выполнение!</h1>";
            echo "<a class='btn btn-primary' href='/'>На главную</a>";

            $sql->close();
        }
    ?>
</body>
</html>