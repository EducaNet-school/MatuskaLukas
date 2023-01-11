<?php

function listFilesInDirectory($directory) {
    $dir = opendir($directory);

    while (($file = readdir($dir)) !== false) {
        echo $file . "<br>";
    }

    closedir($dir);
}

$dir = __DIR__;
listFilesInDirectory($dir);

?>
