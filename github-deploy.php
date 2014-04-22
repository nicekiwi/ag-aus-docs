<?php // Pull chnages from git.

chdir(__DIR__);
$output = shell_exec('git pull');
echo '<pre>' . $output . ' at ' . __DIR__ . '</pre>';