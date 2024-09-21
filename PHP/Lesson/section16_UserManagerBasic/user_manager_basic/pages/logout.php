<?php
session_start();

setcookie('is_login', true, time() - 3600);
setcookie('user_login', true, time() - 3600);

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

session_destroy();
redirect_to('?page=login');
