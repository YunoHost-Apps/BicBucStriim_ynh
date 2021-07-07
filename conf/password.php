<?php
require_once 'vendor/ircmaxell/password-compat/lib/password.php';
$pwd = $argv[1];
$hash = password_hash($pwd, PASSWORD_BCRYPT);
echo $hash
?>
