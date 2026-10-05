<?php
// wrapper helper: php scripts/status.php
foreach (['backend', 'frontend'] as $dir) {
    echo $dir . ': ' . (is_file("$dir/.git") || is_dir("$dir/.git") ? 'ok' : 'missing - run git submodule update --init --recursive') . PHP_EOL;
}
