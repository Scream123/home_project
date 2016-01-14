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
        <script src="http://localhost/bootstrap/js/bootstrap.min.js">                </script>
 
        
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h1>Мой первый блог</h1>
            <a href="./admin/index.php">Панель администратора</a>
            <div>
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                    <em>Опубликовано <?=$a['date']?></em>
                    <p><?=articles_intro($a['content'])?>...</p>
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p>Мой первый блог<br>Copyright &copy; 2015</p>
            </footer>
        </div>
        
    </body>
</html>