<?php
$disadv = array('Код всегда виден всем', 'Обычно по-разному интерпретируется разными браузерами', 'Может привести к остановке рендеринга всего веб-сайта');

for($i = 0; $i < count($disadv); $i++){
    echo '<li>' . $disadv[$i] . '</li>';
}
?>