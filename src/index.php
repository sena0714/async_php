<?php
ini_set('display_errors', 'On');

if (file_exists(__DIR__.'/async.txt')) {
    echo 'created file';
    exit;
} elseif (file_exists(__DIR__.'/async_start.txt')) {
    echo 'creating file now';
    exit;
}

exec('php create_file.php > /dev/null &');

echo 'started creating file';