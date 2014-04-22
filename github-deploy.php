<?php // Pull chnages from git.

chdir(__DIR__);
$cmd = shell_exec('git pull');

echo '<pre>';
passthru($cmd);
echo '</pre>';