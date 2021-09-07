<?php
    # php 설정 파일 (init.php)


    define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT']);
    define("LIB_DIR", ROOT_DIR . "/lib");
    define("DEBUG_LEVEL", 1);

    # error 설정
    error_reporting(E_ALL & E_NOTICE ^ E_DEPRECATED ^ E_STRICT);

    # PHP 환경설정
    ini_set("include_path", LIB_DIR);
    ini_set("display_errors", DEBUG_LEVEL);

    # 공동 include
    require "lib.common.php";

?>