<?php
// Парсер цен с сайта (пример)
$html = file_get_contents('https://example.com');
preg_match_all('/<div class="price">(.*?)<\/div>/', $html, $matches);
print_r($matches[1]);
?>