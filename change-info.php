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

        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        legend {
            margin-bottom: 15px;
        }
        form label input {
            width: 300px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body data-bs-theme="dark">
    <form action="change-info-logic.php" method="post">
        <legend>Обновление информации</legend>

        <?php
            if (count($_GET) != 1) {
                header("Location: error.php");
            } else {
                $sql = new mysqli("localhost", "root", "root", "main");
                $result = $sql->query("SELECT * FROM `data` WHERE id=".$_GET['id']);

                if ($result->num_rows > 0){
                    while ($row = $result->fetch_assoc()) {
                        echo "<label><input name='id' type='text' class='form-control' hidden='hidden' value='".$_GET['id']."'></label>";
                        echo "<label><input name='title' required class='form-control' value='".$row['title']."'></label>";
                        echo "<label><input name='shortDescription' required class='form-control' value='".$row['shortDescription']."'></label>";
                        echo "<label><input name='longDescription' required class='form-control' value='".$row['longDescription']."'></label>";
                        echo "<input class='btn btn-primary' type='submit'>";
                    }
                } else {
                    header("Location: error.php?id=3");
                }
            }
        ?>
    </form>
</body>
</html>