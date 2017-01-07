<?php

/** Отрисовывает меню.<br>
 * Получает массив $menuItems в качестве элементов меню.<br>
 * Если передан необязательный параметр $vertical=false, то будет отрисовано
 * горизонтальное меню.<br>
 * Если $menuItems не является массивом, то функция вернет пустой результат.
 * @param array $menuItems - элементы меню
 * @param boolean $vertical - false-горизонтально, true-вертикально
 */
function getMenu($menuItems, $vertical = true) {
    if (!is_array($menuItems) || count($menuItems) <= 0) {
        return;
    }
    $orientation = "vertical";
    if (!$vertical) {
        $orientation = "horizontal";
        //$style =  "display:inline";
    }
    echo '<ul style="list-style-type:none">';
    foreach ($menuItems as $link => $href) {
        if ($_SERVER['REQUEST_URI'] == $href) {
            echo "<li class='menuItem $orientation'><a class='currentPage'>$link</a></li>";
        } else {
            echo "<li class='menuItem $orientation'><a href='$href'>$link</a></li>";
        }
    }
    echo '</ul>';
}
