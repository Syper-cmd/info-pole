<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ИнфоПоле</title>
    <link rel="stylesheet" href="styles/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>ИнфоПоле</title>

    <style>
        body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        div.card {
            background-color: #292928;
        }
    </style>

</head>
<body data-bs-theme="dark">
    <?php
        require "blocks/header.php"
    ?>
    <div class="row" style="width: 100%; padding-left: 20px; padding-right: 20px">
        <?php
        $sql = new mysqli("localhost", "root", "root", "main");

        $result = $sql->query("SELECT * FROM `data`");

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div style="padding: 10px;" class="col-4"><div class="card" style="justify-content: center; align-items: center; display: flex; flex-direction: column;"><img src="'.$row['imageUrl'].'" alt="Изображение" style="width: 100%; height: 200px" class="card-img-top"><div class="card-body"><h5 class="card-title">'.$row['title'].'</h5><p class="card-text">'.$row['shortDescription'].'</p><a href="about.php?id='.$row['id'].'" class="btn btn-primary">Узнать больше</a></div></div></div>';
            }
        }
        ?>
    </div>
</body>
</html>