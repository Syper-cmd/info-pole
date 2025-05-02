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
            /*align-items: center;*/
            flex-direction: column;
            background-color: #121212;
        }
        ul {
            list-style: none;
            display: flex;
            flex-direction: column;
            margin-top: 10px;
            margin-right: auto;
        }

        a {
            text-decoration: none;
            color: white;
            transition: all 500ms ease;
        }

        .nameOfArticle:hover {
            color: bisque;
            border-left: #c96212 2px solid;
            margin-left: 4px;
        }

        .linkToDelete {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <ul class="container" style="margin-top: 20px">
        <?php
            $sql = new mysqli("localhost", "root", "root", "main");
            $result = $sql->query("SELECT * FROM `data`");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<li class="row">';
                    echo '<a href="about.php?id='.$row['id'].'" class="nameOfArticle col-3">'.$row['title'].'</a>';
                    echo '<a href="delete-info.php?id='.$row['id'].'" class="linkToDelete link-danger col-1">Удалить</a>';
                    echo '<a href="change-info.php?id='.$row['id'].'" class="linkToUpdate link-info col-1">Обновить</a>';
                    echo "</li>";
                }
            }
        ?>
    </ul>
    <div style="display: flex; justify-content: center; align-items: center; width: 100%; height: 50px">
        <a href="/" class="btn btn-primary">На главную</a>
    </div>
</body>
</html>