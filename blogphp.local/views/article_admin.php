<!DOCTYPE html>
<html>

<head>
    <title>Мой первый блог</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://localhost/bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://localhost/bootstrap/css/bootstrap-theme.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://localhost/bootstrap/js/bootstrap.min.js">


    </script>

    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <div class="container">
        <h1>Мой первый блог</h1>
        <div>
            <form method="post" action="./index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
                <label>
                    Название
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label>
                    Дата
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <label>
                    Содержимое
                    <textarea class="form-item" name="content" required><?=$article['content']?></textarea>
                </label>
                <input type="submit" value="Сохранить" class="btn btn-default btn-lg">

            </form>
        </div>
        <footer>
            <p>
                Мой Первй Блог
                <br> Copyright &copy; 2015
            </p>
        </footer>
    </div>

</body>

</html>
