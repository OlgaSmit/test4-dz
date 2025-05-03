<?php
// <!-- Способ №3: логика и шаблон страницы в разных файлах. К логике (т.входа) подключается шаблон страницы -->

// <!-- Это логика (т.входа). Бывший файл logic.php переименовали в index.php. К ней подключаем шаблон страницы -->

$hello = "Hello World!!!";
$age = 18;

$content = file_get_contents('views/page.html');
$content = str_replace ('{{ $hello }}', $hello, $content );
echo $content;