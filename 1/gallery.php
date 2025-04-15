<?php
// $images = ['.', '..', 'img01.jpg', 'img02.jpg', 'img03.jpg', 'img04.jpg', 'img05.jpg'];
//scandir('images');
    // Получаем список изображений из папки
    $images = scandir('images');
    // Фильтруем только изображения
    $images = array_filter($images, function($file) {
        return preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
    });
?> 
<!-- а здесь шаблон страницы -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Галерея</title>

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
        h1 {
            margin-left: 10px;
            color:rgb(139, 61, 187);
        }
        img {
            width: 210px; /* Ширина изображения */
            height: 140px; /* Высота изображения */
            margin: 10px; /* Отступ между изображениями */
            border-radius: 5px; /* Скругление углов изображения */
            cursor: pointer;
        }
        img:hover {
            box-shadow: 8px 8px 10px  rgba(0, 0, 0, 0.8);
            transform: translateY(-5px);
        }
        .gallery {
            display: flex;
            flex-wrap: wrap;
        }
    </style>

</head>
<body>
    <!-- при желании меню можно вынести в отдельный файл и подключать ч\з include -->
     <div class="menu">
        <a href="/">Главная</a>
        <a href="/gallery.php">Галерея</a><br>
     </div>

    <h1>Галерея</h1>
    <div class="gallery">

        <?php foreach($images as $image):?>
            <a href="images/<?=$image;?>">
                <img src="images/<?=$image;?>" alt="<?=htmlspecialchars($image);?>">
            </a>

        <?php endforeach;?>
    </div>
    

</body>
</html>