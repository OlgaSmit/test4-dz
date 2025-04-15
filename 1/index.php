<!-- Способ №1: и логика и шаблон страницы в одном файле (т.входа)-->
<!-- здесь прописывается вся логика -->
<?php
    $hello = "Добро пожаловать в галерею!";
    $age = 16;
?> 
<!-- а здесь шаблон страницы -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Document</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .menu {
            margin-bottom: 30px;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            cursor: pointer;
            background: white;
        }
        .menu a {
            display: inline-block;
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s;
            /* background-color: #4285f4; */
            background-color: #b489ce;
            color: white;
            text-decoration: none;
        }
        .menu a:hover {
            /* background-color: #3367d6; */
            background-color: #a75fd1;
            box-shadow: 8px 8px 10px  rgba(0, 0, 0, 0.8);
            transform: translateY(-1px);
        }
        .hello {
            margin: 20px 30px;
            color:rgb(92, 12, 143);
            font-size: 2em;
        }

    </style>

</head>
<body>
    <div class="menu">
        <a href="/">Главная</a>
        <a href="/gallery.php">Галерея</a><br>
    </div>
    <div class="hello">
        <?=$hello?>
    </div>
</body>
</html>