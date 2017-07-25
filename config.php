<?php

    //Настройки
    define("USER_LOGIN","temurbek.kutliboyev@gmail.com");
    define("USER_HASH","dd3ca2d3d5163de5f0220535db101de9");
    define("SUBDOMAIN","new5972d79f8d71f");

    //автозагрузка классов
    spl_autoload_register(function($class_name) {
        require_once "classes/".$class_name.".php";
    });
