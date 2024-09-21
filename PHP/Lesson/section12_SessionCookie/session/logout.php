<?php

session_start();
//unset() destroys the specified variables.
//
//The behavior of unset() inside of a function can vary depending on
//what type of variable you are attempting to destroy.
//
//If a globalized variable is unset() inside of a function, only the local 
//variable is destroyed. The variable in the calling environment will retain the 
//same value as before unset() was called.
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);

session_destroy(); 

header("Location: login.php");


