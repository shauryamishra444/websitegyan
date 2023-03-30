<?php
$file = 'data.txt';

foreach ($_GET as $key => $value) {
    $current = file_get_contents($file);
    $current .= $key . '=' . $value . "\n";
    file_put_contents($file, $current);
}

// Return a response to the client
echo "Data added to file: " . $file;
?>
