<?php

    require_once("config.php");
    client::auth();
    $lead_id = leads::getListTaskNone();
    $text = "Сделка без задачи";
    tasks::setTask($text,$lead_id);