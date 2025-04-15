<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        p {
            margin-left: 10px;
            font-size: 1em;
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
    <h1>Галерея</h1>
    <p><a href="/">На главную</a></p>

    <div class="gallery">

        <?php foreach($images as $image): ?>
            <a href="images/<?=$image;?>">
                <img src="images/<?=$image;?>" alt="">
            </a>
        <?php endforeach; ?>

    </div>
</body>
</html>