<?php
$dir = 'portfolio_assets';
$files = scandir($dir);
foreach ($files as $file) {
    if (!is_dir($file)) {
        echo "<center><img src='/portfolio_assets/" . $file . "' width='600'></center><br><br>";
    }
}
?>