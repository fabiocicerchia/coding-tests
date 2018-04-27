<?php

require __DIR__ . '/vendor/autoload.php';

use PathLib\Path;

$path = new Path('/a/b/c/d');
$path->cd('../x');
echo $path->currentPath;
