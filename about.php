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
    <title>ИнфоПоле</title>

    <style>
        body {
            background-color: #121212;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        img {
            width: 100%;
            height: 500px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php
        $sql = new mysqli("localhost", "root", "root", "main");
        $result = $sql->query("SELECT * FROM `data` WHERE id=".$_GET['id']);

        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<img src="'.$row['imageUrl'].'" alt="Картиночка :З">';
                echo '<h1 style="margin-bottom: 30px">'.$row['title'].'</h1>';
                echo '<p>'.$row['longDescription']."</p>";
                echo '<a class="btn btn-primary" style="margin-top: 40px" href="/">На главную</a>';
            }
        } else {
            exit("ЛОМКА-ГОЛОВОЛОМКА!");
        }
    ?>
</body>
</html>