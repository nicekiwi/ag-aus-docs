<?php // Pull chnages from git.

// Goto scripts location.
chdir(__DIR__);

// Echo the output of the 'git pull' command.
echo '<pre>';
echo shell_exec('git pull 2>&1');
echo '</pre>';