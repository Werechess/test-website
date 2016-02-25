<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Блог</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Моя страничка</h1>
        <div>
            <div class="article">
                <h3><?=$articles['title']?></h3>
                <em>Опубликовано: <?=$articles['date']?></em>
                <p><?=$articles['content']?></p>
            </div>
        </div>
        <footer>
            <p>Мой Первый Блог<br />
                Copyrite &copy;2016</p>
        </footer>
    </div>
</body>
</html>