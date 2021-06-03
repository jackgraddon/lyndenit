<?php
$dir = "."; //path

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) != false) {
            if ($file == "." or $file == "..") {
                //...
            } else {
                if (strpos($file, '.pdf')) {
                    $nameValues = substr($file, 0, strpos($file, "."));
                    $name = implode(' ', explode('-', $nameValues));
                    $url = "{$file}";
                    echo '<tr class="clickable" onclick="window.open(\'', $url, '\')"><td><p class="pb-0 mb-0">', $name, '</p></td><td style="width:160px">', date("M d, Y", filectime($url)), '</td></tr>';
                } else {
                }
            }
        }
    }
}
