<?php
$adv = array('Всегда выполняется в клиентской среде, что значительно экономит пропускную способность и ускоряет процесс выполнения', 'Поддерживает все современные браузеры', 'Дает возможность создавать расширенные интерфейсы');

for($i = 0; $i < count($adv); $i++){
    echo '<li>' . $adv[$i] . '</li>';
}
?>