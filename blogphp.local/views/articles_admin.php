<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>

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

            <a href="./index.php?action=add">Добавить статью</a>
            <table class="admin-table">
                <tr>
                    <th>Дата</th>
                    <th>Заголовок</th>
                    <th></th>
                    <th></th>
                </tr>

                <?php foreach($articles as $a): ?>
                    <tr>
                        <td>
                            <?=$a['date']?>
                        </td>
                        <td>
                            <?=$a['title']?>
                        </td>
                        <td><a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a></td>
                        <td><a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a></td>
                    </tr>
                    <?php endforeach ?>

            </table>
        </div>
        <footer>
            <p>Мой первый блог
                <br>Copyright &copy; 2015</p>
        </footer>
    </div>

</body>

</html>
