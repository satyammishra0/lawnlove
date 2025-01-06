<?php

/* Defining a constant called APPPATH and setting it to the current directory. */
define('APPPATH', __DIR__);

$MODE = "PRO"; // SET "PRO" FROM PRODUCTION MODE


/* Getting the current URL and splitting it into an array. */
$ACTUAL_PATH_ARRAY = explode("/", (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

$APP_PATH = APPPATH;
$APP_PATH = str_replace("\\", "/", $APP_PATH);

/* Getting the index of the last element of the array. */
$APP_DIR_INDEX = array_search(explode("/", $APP_PATH)[count(explode("/", $APP_PATH)) - 1], $ACTUAL_PATH_ARRAY);


$APP_DOMAIN = "";

if ($APP_DIR_INDEX == 0) {
    $APP_DOMAIN =  (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/";
} else {

    for ($i = 0; $i < $APP_DIR_INDEX  + 1; $i++) {
        $APP_DOMAIN .= $ACTUAL_PATH_ARRAY[$i] . "/";
    }
}

if ($_SERVER['HTTP_HOST'] == "localhost") {
    define('mode', 0);
} else {
    define('mode', 1);
}

define('DOMAIN', $APP_DOMAIN);


if (mode == 1) {
    //  for production
    // Mysqli Db 
    $DB_HOST = "localhost";
    $DB_USER = "";
    $DB_PASS = "!@#$00";
    $DB_NAME = "";
    // 
    #
    //
} else {
    // for local host work
    // edit this details based on your database info and domain info
    // database info
    $DB_HOST = "localhost";
    $DB_USER = "root";
    $DB_PASS = "";
    $DB_NAME = "rapid_backup";
}
