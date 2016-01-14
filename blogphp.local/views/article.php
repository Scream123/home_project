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
            <div>
                <div class="article">
                    <h3><?=$article['title']?></h3>
                    <em>Опубликовано <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                </div>
<!--
                <div class="article">
                    <h3>Заголовок 2</h3>
                    <em>Опубликовано 2015-06-27</em>
                    <p>Статья</p>
                </div>
-->
            </div>
            <footer>
                <p>Мой первый блог<br>Copyright &copy; 2015</p>
            </footer>
        </div>
        
    </body>
</html>