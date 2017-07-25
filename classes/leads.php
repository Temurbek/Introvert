<?php

class leads {
    public static function getList(){

        $link = "https://".SUBDOMAIN.".amocrm.ru/private/api/v2/json/leads/list";
        $Response = load::data($link);

        return $Response['leads'];

    }

    public static function getListTaskNone(){

        $leads = self::getList();
        $leads_id = [];

        foreach($leads as $row )
            if(empty($row['closest_task']))
                $leads_id[] = $row['id'];

        return $leads_id;

    }

}