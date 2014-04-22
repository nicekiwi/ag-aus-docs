<?php // Pull chnages from git.

chdir(__DIR__);
$output = shell_exec('git pull origin master');
echo '<pre>' . $output . '</pre>';