<?php // Pull chnages from git.

chdir(__DIR__);
$cmd = shell_exec('git pull 2>&1');

echo '<pre>';
passthru($cmd);
echo '</pre>';