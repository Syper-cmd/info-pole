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

        form label #shortDescription {
            width: 350px;
            height: 120px;
        }

        form label #longDescription {
            width: 350px;
            height: 200px;
        }

    </style>
</head>
<body data-bs-theme="dark">
    <form action="add-info-logic.php" method="post" enctype="multipart/form-data">
        <legend style="margin-bottom: 20px; margin-top: 30px">Добавление записи</legend>
        <label>
            <input type="text" placeholder="Заголовок" name="title" class="form-control" style="margin-bottom: 10px; width: 350px" required>
        </label>

        <label>
            <textarea id="shortDescription" type="text" placeholder="Короткое описание" name="shortDescription" class="form-control" style="margin-bottom: 10px" required></textarea>
        </label>

        <label>
            <textarea id="longDescription" name="longDescription" placeholder="Длинное описание" style="margin-bottom: 10px" class="form-control" required></textarea>
        </label>

        <label>
            <input type="file" value="Изображение" style="margin-bottom: 20px; width: 350px" class="form-control" name="image" required>
        </label>

        <label>
            <input type="submit" value="Сохранить" class="btn btn-primary" style="width: 250px">
        </label>
    </form>
</body>
</html>